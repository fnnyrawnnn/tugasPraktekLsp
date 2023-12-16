@extends('admin.app')

@section('title', 'Detail Pendaftaran')

@section('content')
<div>
     <h3 style="text-align:center; font-weight:bold; margin-top:60px;">Data Pendaftaran <span style="color: #C51F1A;">{{ $pendaftarans->nama_lengkap }}</span></h3>
     <div class="profileuser">
          <div class="row px-5 gx-lg-5 d-flex justify-content-center align-items-center data-user" style="padding-bottom: 40px">
               <div class="col-lg-8 ">
                    <form method="#" action="#" enctype="multipart/form-data">
                         <div class="form">
                              <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                              <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                   value="{{ $pendaftarans->nama_lengkap }}" disabled>
                         </div>
                         <div class="form">
                              <label for="alamat_ktp" class="form-label">Alamat KTP</label>
                              <input type="text" class="form-control" id="alamat_ktp" name="alamat_ktp" value="{{ $pendaftarans->alamat_ktp }}" disabled>
                         </div>
                         <div class="form">
                              <label for="alamat_lengkap_saat_ini" class="form-label">Alamat Lengkap</label>
                              <input type="text" class="form-control" id="alamat_lengkap_saat_ini" name="alamat_lengkap_saat_ini"
                                   value="{{ $pendaftarans->alamat_lengkap_saat_ini }}" disabled>
                         </div>
                         <div class="form">
                              <label for="propinsi">Propinsi</label>
                              <select class="form-control" name="propinsi" id="propinsi" disabled>
                                   <option>{{ $pendaftarans->propinsi }}</option>
                              </select>
                         </div>
                         <div class="form">
                              <label for="kabupaten">Kabupaten</label>
                              <select class="form-control" name="kabupaten" id="kabupaten" disabled>
                                   <option>{{ $pendaftarans->kabupaten }}</option>
                              </select>
                         </div>
                         <div class="form">
                              <label for="kecamatan">Kecamatan</label>
                              <select class="form-control" name="kecamatan" id="kecamatan" disabled>
                                   <option>{{ $pendaftarans->kecamatan }}</option>
                              </select>
                         </div>
                         <div class="form">
                              <label for="no_telepon" class="form-label">Nomor Telepon</label>
                              <input type="no_telepon" class="form-control" id="no_telepon" name="no_telepon" value="{{ $pendaftarans->no_telepon }}" disabled>
                         </div>
                         <div class="form">
                              <label for="no_hp" class="form-label">Nomor Handphone</label>
                              <input type="text" class="form-control" id="no_hp" name="no_hp"
                                   value="{{ $pendaftarans->no_hp }}" disabled>
                         </div>
                         <div class="form">
                              <label for="email" class="form-label">Email</label>
                              <input type="email" class="form-control" id="email" name="email"
                                   value="{{ $pendaftarans->email }}" disabled>
                         </div>
                         <div class="form">
                              <label for="kewarganegaraan">Kewarganegaraan</label>
                              <select class="form-control" name="kewarganegaraan" id="kewarganegaraan" disabled>
                                   <option>{{ $pendaftarans->kewarganegaraan }}</option>
                              </select>
                         </div>
                         <div class="form">
                              <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                              <input type="tanggal_lahir" class="form-control" disabled id="tanggal_lahir" value="{{ $pendaftarans->tanggal_lahir }}" name="tanggal_lahir">
                         </div>
                         <div class="form">
                              <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                              <input type="tempat_lahir" class="form-control" id="tempat_lahir" value="{{ $pendaftarans->tempat_lahir }}" name="tempat_lahir" disabled>
                         </div>
                         <div class="form">
                              <label for="kota_lahir" class="form-label">Kota Lahir</label>
                              <input type="kota_lahir" class="form-control" id="kota_lahir" value="{{ $pendaftarans->kota_lahir }}" name="kota_lahir" disabled>
                         </div>
                         <div class="form">
                              <label for="propinsi_lahir" class="form-label">Propinsi Lahir</label>
                              <input type="propinsi_lahir" class="form-control" id="propinsi_lahir" value="{{ $pendaftarans->propinsi_lahir }}" name="propinsi_lahir" disabled>
                         </div>
                         <div class="form">
                              <label for="negara_lahir" class="form-label">Negara Lahir</label>
                              <input type="negara_lahir" class="form-control" id="negara_lahir" value="{{ $pendaftarans->negara_lahir }}" name="negara_lahir" disabled>
                         </div>
                         <div class="form">
                              <label for="jenis_kelamin">Jenis Kelamin</label>
                              <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" disabled>
                                   <option>{{ $pendaftarans->jenis_kelamin }}</option>
                              </select>
                         </div>
                         <div class="form">
                              <label for="status_menikah">Status Menikah</label>
                              <select class="form-control" name="status_menikah" id="status_menikah" disabled>
                                   <option>{{ $pendaftarans->status_menikah }}</option>
                              </select>
                         </div>
                         <div class="form">
                              <label for="agama">Agama</label>
                              <select class="form-control" name="agama" id="agama" disabled>
                                   <option>{{ $pendaftarans->agama }}</option>
                              </select>
                         </div>
                         <div class="form">
                              <label for="status_pendaftaran" class="form-label">Status Pendaftaran</label>
                              <select class="form-control" name="status_pendaftaran" id="status_pendaftaran" disabled>
                                   <option>{{ $pendaftarans->status_pendaftaran }}</option>
                              </select>
                         </div>
                         <div class="action-user d-flex justify-content-end align-items-center">
                              <a href="/adminlistpendaftaran"
                                   class="btn btn-secondary mt-3" style="margin-right: 4px;">Kembali</a>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</div>
@endsection
