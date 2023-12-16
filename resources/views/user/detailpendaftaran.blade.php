<!doctype html>
<html lang="en">

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="csrf-token" content="{{ csrf_token() }}"/>

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <!-- CSS Custom -->
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">

     <!-- jQuery -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

     <!-- Bootstrap JS -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

     <!-- Font Awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
          integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

     <!-- Boostrap icon -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

     <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
     <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

     <title>Portal Telyu | Pendaftaran</title>
</head>

<body>
     @include('layouts.navbar')
     <div>
          <h3 style="text-align:center; font-weight:bold; margin-top:60px;">Pendaftaran Calon Mahasiswa <span style="color: #C51F1A;">Telkom University</span></h3>
          <div class="profileuser">
               <div class="row px-5 gx-lg-5 d-flex justify-content-center align-items-center data-user">
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
                                   <input type="status_pendaftaran" class="form-control" id="status_pendaftaran" value="{{ $pendaftarans->status_pendaftaran }}" name="status_pendaftaran" disabled>
                              </div>
                              <div class="action-user d-flex justify-content-end align-items-center">
                                   <a href="/profileuser"
                                        class="btn btn-secondary mt-3" style="margin-right: 4px;">Kembali</a>
                                   <a href="/detailpendaftaran/user/cetak/pdf"
                                        class="btn btn-primary mt-3">Cetak</a>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
          @include('sweetalert::alert')
     </div>

     @include('layouts.footer')
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
     </script>
</body>
</html>
