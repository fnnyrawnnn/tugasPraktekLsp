<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\ProfileUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user.landingpage');
});

// AUTH
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'doLogin']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/userregister', [AuthController::class, "userregister"])->name('user.register');
Route::post('/userregister', [AuthController::class, "douserregister"])->name('do.userregister');
Route::get('/forgot', [AuthController::class, 'forgot'])->name('forgot');
Route::post('/forgotpassword', [AuthController::class, "forgotPassword"])->name('forgot.password');

// USER
Route::middleware(['auth:web'])->group(function () {
    Route::get('/profileuser', [ProfileUserController::class, 'showuser']);
    Route::get('/profileuser/{id}', [ProfileUserController::class, 'showdetailuser']);
    Route::get('/profileuser/{id}/edit', [ProfileUserController::class, 'edit']);
    Route::get('/profilehistory', [ProfileUserController::class, 'showhistory'])->name('user.history');
    Route::get('/user/{id}/edit', [ProfileUserController::class, 'edit']);
    Route::get('/user/{id}/detail', [PendaftaranController::class, 'userdetailpendaftaran']);
    Route::put('/user/{id}', [ProfileUserController::class, 'updatedetailuser'])->name('update.profile');
    
    Route::get('/pendaftaran/{id}', [PendaftaranController::class, 'index'])->name('pendaftaran');
    Route::post('/pendaftaran/create', [PendaftaranController::class, 'create'])->name('create.pendaftaran');
    Route::get('/detailpendaftaran', [PendaftaranController::class, 'detailpendaftaran'])->name('detail.pendaftaran');
    Route::get('/detailpendaftaran/user/cetak/pdf', [PendaftaranController::class, 'usercetakpendaftaran']);

    Route::post('/getkabupaten', [PendaftaranController::class, 'getkabupaten'])->name('getkabupaten');
    Route::post('/getkecamatan', [PendaftaranController::class, 'getkecamatan'])->name('getkecamatan');
});

// ADMIN
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/adminindex', [AdminController::class, 'index'])->name('adminindex');
    Route::get('/adminlistpendaftaran', [AdminController::class, 'listpendaftaran'])->name('showlistpendaftaran');
    Route::get('/updatependaftaran/{id}/edit', [AdminController::class, 'editpendaftaran'])->name('edit.pendaftaran');
    Route::put('/updatependaftaran/{id}', [AdminController::class, 'updatependaftaran'])->name('update.pendaftaran');
    Route::get('/admindetailpendaftaran/{id}', [AdminController::class, 'detailuserpendaftaran'])->name('detailpendaftaran');
    Route::get('/pendaftaran/{id}/delete', [AdminController::class, 'destroypendaftaran']);
    
    Route::get('/admindetailpendaftaran/{id}/cetak/pdf', [AdminController::class, 'cetakpendaftaran']);

    Route::post('/getkabupatenadmin', [AdminController::class, 'getkabupaten'])->name('getkabupatenadmin');
    Route::post('/getkecamatanadmin', [AdminController::class, 'getkecamatan'])->name('getkecamatanadmin');

    Route::get('/adminlistuser', [AdminController::class, 'listuser'])->name('showlistuser');
    Route::get('/createuser/add', [AdminController::class, 'adduser'])->name('add.user');
    Route::post('/createuser', [AdminController::class, 'createuser'])->name('create.user');
    Route::get('/updateuser/{id}/edit', [AdminController::class, 'edit']);
    Route::put('/updateuser/{id}', [AdminController::class, 'updateuser'])->name('update.user');
    Route::get('/adminlistuser/{id}/delete', [AdminController::class, 'destroyuser'])->name('deleteuser');
});
