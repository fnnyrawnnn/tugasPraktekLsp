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
                         <form method="POST" action="{{ route('create.pendaftaran') }}" enctype="multipart/form-data">
                              @csrf
                              <div class="form">
                                   <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                   <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                        value="{{ $users->nama_lengkap }}">
                                   @error('nama_lengkap')
                                        <div class="invalid-feedback">
                                             Nama tidak boleh kosong
                                        </div>
                                   @enderror
                              </div>
                              <div class="form">
                                   <label for="alamat_ktp" class="form-label">Alamat KTP</label>
                                   <input type="text" class="form-control" id="alamat_ktp" name="alamat_ktp">
                                   @error('alamat_ktp')
                                        <div class="invalid-feedback">
                                             Alamat KTP tidak boleh kosong
                                        </div>
                                   @enderror
                              </div>
                              <div class="form">
                                   <label for="alamat_lengkap_saat_ini" class="form-label">Alamat Lengkap</label>
                                   <input type="text" class="form-control" id="alamat_lengkap_saat_ini" name="alamat_lengkap_saat_ini"
                                        value="{{ $users->alamat_lengkap_saat_ini }}">
                                   @error('alamat_lengkap_saat_ini')
                                        <div class="invalid-feedback">
                                             Alamat lengkap tidak boleh kosong
                                        </div>
                                   @enderror
                              </div>
                              <div class="form">
                                   <label for="propinsi">Propinsi</label>
                                   <select class="form-control" name="propinsi" id="propinsi">
                                        <option>Pilih Propinsi</option>
                                        @foreach ($provinces as $propinsi)
                                             <option value="{{ $propinsi->id }}">{{ $propinsi->name }}</option>
                                        @endforeach
                                   </select>
                                   @error('propinsi')
                                        <div class="invalid-feedback">
                                             Propinsi tidak boleh kosong
                                        </div>
                                   @enderror
                              </div>
                              <div class="form">
                                   <label for="kabupaten">Kabupaten</label>
                                   <select class="form-control" name="kabupaten" id="kabupaten">
                                        <option>Pilih Kabupaten</option>
                                   </select>
                                   @error('kabupaten')
                                        <div class="invalid-feedback">
                                             Kabupaten tidak boleh kosong
                                        </div>
                                   @enderror
                              </div>
                              <div class="form">
                                   <label for="kecamatan">Kecamatan</label>
                                   <select class="form-control" name="kecamatan" id="kecamatan">
                                        <option>Pilih Kecamatan</option>
                                   </select>
                                   @error('kecamatan')
                                        <div class="invalid-feedback">
                                             Kecamatan tidak boleh kosong
                                        </div>
                                   @enderror
                              </div>
                              <div class="form">
                                   <label for="no_telepon" class="form-label">Nomor Telepon</label>
                                   <input type="no_telepon" class="form-control" id="no_telepon" name="no_telepon">
                                   @error('no_telepon')
                                        <div class="invalid-feedback">
                                             Nomor telepon tidak boleh kosong
                                        </div>
                                   @enderror
                              </div>
                              <div class="form">
                                   <label for="no_hp" class="form-label">Nomor Handphone</label>
                                   <input type="text" class="form-control" id="no_hp" name="no_hp"
                                        value="{{ $users->no_hp }}">
                                   @error('no_hp')
                                        <div class="invalid-feedback">
                                             Nomor handphone tidak boleh kosong
                                        </div>
                                   @enderror
                              </div>
                              <div class="form">
                                   <label for="email" class="form-label">Email</label>
                                   <input type="email" class="form-control" id="email" name="email"
                                        value="{{ $users->email }}">
                                   @error('email')
                                        <div class="invalid-feedback">
                                             Email tidak boleh kosong
                                        </div>
                                   @enderror
                              </div>
                              <div class="form">
                                   <label for="kewarganegaraan">Kewarganegaraan</label>
                                   <select class="form-control" name="kewarganegaraan" id="kewarganegaraan">
                                        <option>Pilih Kewarganegaraan</option>
                                        <option value="WNI Asli">WNI Asli</option>
                                        <option value="WNI Keturunan">WNI Keturunan</option>
                                        <option value="Lain-lain">Lain-lain</option>
                                   </select>
                                   @error('kewarganegaraan')
                                        <div class="invalid-feedback">
                                             Kewarganegaraan tidak boleh kosong
                                        </div>
                                   @enderror
                              </div>
                              <div class="form">
                                   <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                   <input type="tanggal_lahir" class="form-control" placeholder="MM/DD/YYY" id="tanggal_lahir" name="tanggal_lahir">
                                   @error('tanggal_lahir')
                                        <div class="invalid-feedback">
                                             Tanggal lahir tidak boleh kosong
                                        </div>
                                   @enderror
                              </div>
                              <div class="form">
                                   <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                   <input type="tempat_lahir" class="form-control" id="tempat_lahir" name="tempat_lahir">
                                   @error('tempat_lahir')
                                        <div class="invalid-feedback">
                                             Tempat lahir tidak boleh kosong
                                        </div>
                                   @enderror
                              </div>
                              <div class="form">
                                   <label for="kota_lahir" class="form-label">Kota Lahir</label>
                                   <input type="kota_lahir" class="form-control" id="kota_lahir" name="kota_lahir">
                                   @error('kota_lahir')
                                        <div class="invalid-feedback">
                                             Kota lahir tidak boleh kosong
                                        </div>
                                   @enderror
                              </div>
                              <div class="form">
                                   <label for="propinsi_lahir" class="form-label">Propinsi Lahir</label>
                                   <input type="propinsi_lahir" class="form-control" id="propinsi_lahir" name="propinsi_lahir">
                                   @error('propinsi_lahir')
                                        <div class="invalid-feedback">
                                             Propinsi lahir tidak boleh kosong
                                        </div>
                                   @enderror
                              </div>
                              <div class="form">
                                   <label for="negara_lahir" class="form-label">Negara Lahir</label>
                                   <input type="negara_lahir" class="form-control" id="negara_lahir" name="negara_lahir">
                                   @error('negara_lahir')
                                        <div class="invalid-feedback">
                                             Negara lahir tidak boleh kosong
                                        </div>
                                   @enderror
                              </div>
                              <div class="form">
                                   <label for="jenis_kelamin">Jenis Kelamin</label>
                                   <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                        <option>Pilih Jenis Kelamin</option>
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                   </select>
                                   @error('jenis_kelamin')
                                        <div class="invalid-feedback">
                                             Jenis kelamin tidak boleh kosong
                                        </div>
                                   @enderror
                              </div>
                              <div class="form">
                                   <label for="status_menikah">Status Menikah</label>
                                   <select class="form-control" name="status_menikah" id="status_menikah">
                                        <option>Pilih Status Menikah</option>
                                        <option value="Belum Menikah">Belum Menikah</option>
                                        <option value="Menikah">Menikah</option>
                                        <option value="Lain-lain">Lain-lain</option>
                                   </select>
                                   @error('status_menikah')
                                        <div class="invalid-feedback">
                                             Status menikah tidak boleh kosong
                                        </div>
                                   @enderror
                              </div>
                              <div class="form">
                                   <label for="agama">Agama</label>
                                   <select class="form-control" name="agama" id="agama">
                                        <option>Pilih Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Lain-lain">Lain-lain</option>
                                   </select>
                                   @error('agama')
                                        <div class="invalid-feedback">
                                             Agama tidak boleh kosong
                                        </div>
                                   @enderror
                              </div>
                              <div class="action-user d-flex justify-content-end align-items-center">
                                   <a href="/"
                                   class="btn btn-secondary mt-3" style="margin-right: 4px;">Batal</a>
                                   <button type="submit" class="btn btn-primary mt-3">Submit</button>
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

<script>
     $(function () {
          $.ajaxSetup({
               headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
          });

          $('#propinsi').on('change', function () {
               let id_propinsi = $('#propinsi').val();
               $.ajax({
                    type: 'POST',
                    url: "{{ route('getkabupaten') }}",
                    data: { id_propinsi: id_propinsi },
                    cache: false,

                    success: function (msg) {
                         $('#kabupaten').html(msg);
                    },
                    error: function (data) {
                         console.log('error:', data);
                    },
               })
          });

          $('#kabupaten').on('change', function () {
               let id_kabupaten = $('#kabupaten').val();
               $.ajax({
                    type: 'POST',
                    url: "{{ route('getkecamatan') }}",
                    data: { id_kabupaten: id_kabupaten },
                    cache: false,

                    success: function (msg) {
                         $('#kecamatan').html(msg);
                    },
                    error: function (data) {
                         console.log('error:', data);
                    },
               })
          });

          $(document).ready(function(){
               var date_input=$('input[name="tanggal_lahir"]');
               var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
               var options={
                    format: 'mm/dd/yyyy',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
               };
               date_input.datepicker(options);
          })
     });
</script>
</body>
</html>
