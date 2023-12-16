<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileUserController extends Controller
{
    public function showuser()
    {
        $datauser = User::get();
        return view('user/profileuser', ['users' => $datauser]);
    }

    public function showdetailuser($id)
    {
        $datauser = User::findOrFail($id);
        return view('user/profileuserdetail', ['users' => $datauser]);
    }

    public function edit($id)
    {
        $data['users'] = User::findOrFail($id);

        return view(
            'user/profileuseredit',
            $data
        );
    }

    public function updatedetailuser(Request $request, $id)
    {
        // mendapatkan data user
        $dataUser = User::findOrFail($id);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('images'), $imageName);

            $dataUser->image = 'images/'. $imageName;
        }

        $dataUser->nama_lengkap = $request->nama_lengkap;
        $dataUser->email = $request->email;
        $dataUser->alamat_lengkap_saat_ini = $request->alamat_lengkap_saat_ini;
        $dataUser->no_hp = $request->no_hp;
        $dataUser->save();

        return redirect('/profileuser/' . $dataUser->id)->with('success', 'User Berhasil Diubah!');
    }
}
