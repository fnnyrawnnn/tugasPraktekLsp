<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Enums\StatusPendaftaran;
use App\Models\Pendaftaran;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;

class PendaftaranController extends Controller
{
    public function index($id) {
        $data['users'] = User::findOrFail($id);
        $provinces = Province::orderBy('name', 'asc')->get();

        return view('user/pendaftaran', $data, compact('provinces'));
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

    public function create(Request $request){

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

        $user_id = Auth::id();
        $status = StatusPendaftaran::Pending;
        $propinsi = Province::where('id', $request->propinsi)->value('name');
        $kabupaten = Regency::where('id', $request->kabupaten)->value('name');
        $kecamatan = District::where('id', $request->kecamatan)->value('name');

        Pendaftaran::create([
            'user_id' => $user_id,
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'propinsi' => $propinsi,
            'kabupaten' => $kabupaten,
            'kecamatan' => $kecamatan,
            'kewarganegaraan' => $request->kewarganegaraan,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'kota_lahir' => $request->kota_lahir,
            'propinsi_lahir' => $request->propinsi_lahir,
            'negara_lahir' => $request->negara_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'status_menikah' => $request->status_menikah,
            'agama' => $request->agama,
            'no_telepon' => $request->no_telepon,
            'alamat_lengkap_saat_ini' => $request->alamat_lengkap_saat_ini,
            'alamat_ktp' => $request->alamat_ktp,
            'status_pendaftaran' => $status,
        ]);
        return redirect('/')->with('success', 'Pendaftaran Berhasil Dibuat!');
    }

    public function detailpendaftaran(){
        $user = Auth::user();
        $pendaftarans = $user->pendaftarans;

        return view('user/detailpendaftaran', ['pendaftarans' => $pendaftarans]);
    }

    public function usercetakpendaftaran(){
        $mpdf = new \Mpdf\Mpdf();
        $user = Auth::user();
        $pendaftarans = $user->pendaftarans;

        $mpdf->WriteHTML(view('user/detailpendaftaran', ['pendaftarans' => $pendaftarans]));
        $mpdf->Output($pendaftarans->nama_lengkap . '-bukti pendaftaran.pdf', 'D');
    }
}
