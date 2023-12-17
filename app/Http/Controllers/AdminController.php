<?php

namespace App\Http\Controllers;

use App\Enums\StatusPendaftaran;
use App\Models\Admin;
use App\Models\Pendaftaran;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $pendaftaranCount = Pendaftaran::count();
        $adminCount = Admin::count();

        return view('admin/app', ['user_count' => $userCount, 'admin_count' => $adminCount,  'pendaftaran_count' => $pendaftaranCount]);
    }

    public function listuser()
    {
        $userCount = User::count();
        $pendaftaranCount = Pendaftaran::count();
        $data['users'] = User::all();
        return view('admin/listuser', $data, ['user_count' => $userCount, 'pendaftaran_count' => $pendaftaranCount]);
    }

    public function adduser()
    {
        return view('admin/adduser');
    }

    public function createuser(Request $request)
    {
        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        $request->validate([
            'nama_lengkap' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'max:100', 'email', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'no_hp' => ['required', 'numeric'],
            'alamat_lengkap_saat_ini' => ['required', 'string', 'max:200'],
        ]);

        $users = new User();
        $users->nama_lengkap = $request->nama_lengkap;
        $users->email = $request->email;
        $users->alamat_lengkap_saat_ini = $request->alamat_lengkap_saat_ini;
        $users->password = Hash::make($request->password);
        $users->no_hp = $request->no_hp;
        $users->image = 'images/' . $imageName;

        $users->save();

        return redirect()->route('showlistuser')->with('success', 'User berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data['users'] = User::findOrFail($id);

        return view(
            'admin/updateuser',
            $data
        );
    }

    public function updateuser(Request $request, $id)
    {
        $dataUser = User::findOrFail($id);

        $request->validate([
            'nama_lengkap' => ['required', 'string', 'max:100'],
            'no_hp' => ['required', 'numeric'],
            'alamat_lengkap_saat_ini' => ['required', 'string', 'max:200'],
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('images'), $imageName);

            $dataUser->image = 'images/' . $imageName;
        }

        $dataUser->nama_lengkap = $request->nama_lengkap;
        $dataUser->email = $request->email;
        $dataUser->alamat_lengkap_saat_ini = $request->alamat_lengkap_saat_ini;
        $dataUser->no_hp = $request->no_hp;

        $dataUser->save();

        return redirect(route('showlistuser'))->with('success', 'Data User Berhasil Diubah!');
    }

    public function destroyuser($id)
    {
        User::destroy($id);
        return redirect(route('showlistuser'))->with('success', 'User Berhasil Dihapus!');
    }

    // =============================================================================================

    public function listpendaftaran()
    {
        $userCount = User::count();
        $pendaftaranCount = Pendaftaran::count();
        $data['pendaftarans'] = Pendaftaran::all();
        return view('admin/listpendaftaran', $data, ['user_count' => $userCount, 'pendaftaran_count' => $pendaftaranCount]);
    }

    public function detailuserpendaftaran($id)
    {
        $userCount = User::count();
        $pendaftaranCount = Pendaftaran::count();
        $data['pendaftarans'] = Pendaftaran::findOrFail($id);

        return view('admin/detailuserpendaftaran', $data, ['user_count' => $userCount, 'pendaftaran_count' => $pendaftaranCount]);
    }

    public function editpendaftaran($id) {
        $userCount = User::count();
        $pendaftaranCount = Pendaftaran::count();
        $data['pendaftarans'] = Pendaftaran::findOrFail($id);
        $provinces = Province::orderBy('name', 'asc')->get();
        $pending = StatusPendaftaran::Pending;
        $terima = StatusPendaftaran::Diterima;
        $proses = StatusPendaftaran::Diproses;
        $tolak = StatusPendaftaran::Ditolak;

        return view('admin/updatependaftaran', $data, ['provinces' => $provinces, 'pending' => $pending, 'terima' => $terima, 'proses' => $proses, 'tolak' => $tolak, 'user_count' => $userCount, 'pendaftaran_count' => $pendaftaranCount]);
    }

    public function updatependaftaran(Request $request, $id){
        $dataPendaftaran = Pendaftaran::findOrFail($id);
        $request->validate([
            'nama_lengkap' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'max:100', 'email'],
            'no_hp' => ['required', 'numeric'],
            'propinsi' => ['required'],
            'kabupaten' => ['required'],
            'kecamatan' => ['required'],
            'kewarganegaraan' => ['required'],
            'tanggal_lahir' => ['required'],
            'tempat_lahir' => ['required'],
            'kota_lahir' => ['required'],
            'propinsi_lahir' => ['required'],
            'negara_lahir' => ['required'],
            'jenis_kelamin' => ['required'],
            'status_menikah' => ['required'],
            'agama' => ['required'],
            'no_telepon' => ['required', 'numeric'],
            'alamat_lengkap_saat_ini' => ['required', 'string', 'max:200'],
            'alamat_ktp' => ['required', 'string', 'max:200'],
        ]);

        if (is_numeric($request->propinsi)) {
            $propinsi = Province::where('id', $request->propinsi)->value('name');
        }else{
            $propinsi = $request->propinsi;
        }
        if (is_numeric($request->kabupaten)) {
            $kabupaten = Regency::where('id', $request->kabupaten)->value('name');
        }else{
            $kabupaten = $request->kabupaten;
        }
        if (is_numeric($request->kecamatan)) {
            $kecamatan = District::where('id', $request->kecamatan)->value('name');
        }else{
            $kecamatan = $request->kecamatan;
        }

        $dataPendaftaran->nama_lengkap = $request->nama_lengkap;
        $dataPendaftaran->email = $request->email;
        $dataPendaftaran->no_hp = $request->no_hp;
        $dataPendaftaran->propinsi = $propinsi;
        $dataPendaftaran->kabupaten = $kabupaten;
        $dataPendaftaran->kecamatan = $kecamatan;
        $dataPendaftaran->kewarganegaraan = $request->kewarganegaraan;
        $dataPendaftaran->tanggal_lahir = $request->tanggal_lahir;
        $dataPendaftaran->tempat_lahir = $request->tempat_lahir;
        $dataPendaftaran->kota_lahir = $request->kota_lahir;
        $dataPendaftaran->propinsi_lahir = $request->propinsi_lahir;
        $dataPendaftaran->negara_lahir = $request->negara_lahir;
        $dataPendaftaran->jenis_kelamin = $request->jenis_kelamin;
        $dataPendaftaran->status_menikah = $request->status_menikah;
        $dataPendaftaran->agama = $request->agama;
        $dataPendaftaran->no_telepon = $request->no_telepon;
        $dataPendaftaran->alamat_lengkap_saat_ini = $request->alamat_lengkap_saat_ini;
        $dataPendaftaran->alamat_ktp = $request->alamat_ktp;
        $dataPendaftaran->status_pendaftaran = $request->status_pendaftaran;
        $dataPendaftaran->save();

        return redirect()->route('showlistpendaftaran')->with('success', 'Pendaftaran Berhasil Diperbaharui!');
    }

    public function destroypendaftaran($id)
    {
        Pendaftaran::destroy($id);
        return redirect(route('showlistpendaftaran'))->with('success', 'Pendaftaran Berhasil Dihapus!');
    }

    public function getkabupaten(Request $request){
        $id_propinsi = $request->id_propinsi;

        $kabupatens = Regency::where('province_id', $id_propinsi)->orderBy('name', 'asc')->get();

        $option = "<option>Pilih Kabupaten</option>";
        foreach ($kabupatens as $kabupaten){
            $option.="<option value='$kabupaten->id'>$kabupaten->name</option>";
        }
        echo $option;
    }

    public function getkecamatan(Request $request){
        $id_kabupaten = $request->id_kabupaten;

        $kecamatans = District::where('regency_id', $id_kabupaten)->orderBy('name', 'asc')->get();

        $option = "<option>Pilih Kecamatan</option>";
        foreach ($kecamatans as $kecamatan){
            $option.="<option value='$kecamatan->id'>$kecamatan->name</option>";
        }
        echo $option;
    }

    public function cetakpdf($id){
        $items = Pendaftaran::findOrFail($id);

        if (request('output') == 'pdf'){
            $pdf = Pdf::loadView('admin/admincetakpdf', compact('items'));
            $namaFile = $items->nama_lengkap . "-bukti pendaftaran.pdf";
            return $pdf->download($namaFile);
        }

        return view('admin/admincetakpdf', compact('items'));
    }
}
