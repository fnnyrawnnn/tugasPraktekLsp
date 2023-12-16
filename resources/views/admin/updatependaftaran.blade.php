<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Portal Telyu | Admin Side</title>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/lte') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/lte') }}/dist/css/adminlte.min.css">
    <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <!-- NAVBAR -->
        @include('admin.navbar')

        <!-- SIDEBAR -->
        @include('admin.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>@yield('title')</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{ $user_count }}</h3>
                                    <p>User yang terdaftar</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3 class="text-white">{{ $pendaftaran_count }}</h3>
                                    <p class="text-white">Pendaftaran yang terdaftar</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div>
                    <h3 style="text-align:center; font-weight:bold; margin-top:60px;">Update Data Pendaftaran <span style="color: #C51F1A;">{{ $pendaftarans->nama_lengkap }}</span></h3>
                    <div class="profileuser">
                            <div class="row px-5 gx-lg-5 d-flex justify-content-center align-items-center data-user"  style="padding-bottom: 40px">
                                <div class="col-lg-8 ">
                                    <form method="POST" action="{{ route('update.pendaftaran', ['id' => $pendaftarans->id]) }}" enctype="multipart/form-data">
                                            @csrf
                                            @method('put')
                                            <div class="form">
                                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                                    value="{{ $pendaftarans->nama_lengkap }}">
                                                @error('nama_lengkap')
                                                    <div class="invalid-feedback">
                                                        Nama tidak boleh kosong
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form">
                                                <label for="alamat_ktp" class="form-label">Alamat KTP</label>
                                                <input type="text" class="form-control" id="alamat_ktp" name="alamat_ktp" value="{{ $pendaftarans->alamat_ktp }}">
                                                @error('alamat_ktp')
                                                    <div class="invalid-feedback">
                                                        Alamat KTP tidak boleh kosong
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form">
                                                <label for="alamat_lengkap_saat_ini" class="form-label">Alamat Lengkap</label>
                                                <input type="text" class="form-control" id="alamat_lengkap_saat_ini" name="alamat_lengkap_saat_ini"
                                                    value="{{ $pendaftarans->alamat_lengkap_saat_ini }}">
                                                @error('alamat_lengkap_saat_ini')
                                                    <div class="invalid-feedback">
                                                        Alamat lengkap tidak boleh kosong
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form">
                                                <label for="propinsi">Propinsi</label>
                                                <select class="form-control" name="propinsi" id="propinsi">
                                                    <option>{{ $pendaftarans->propinsi }}</option>
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
                                                    <option>{{ $pendaftarans->kabupaten }}</option>
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
                                                    <option>{{ $pendaftarans->kecamatan }}</option>
                                                </select>
                                                @error('kecamatan')
                                                    <div class="invalid-feedback">
                                                        Kecamatan tidak boleh kosong
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form">
                                                <label for="no_telepon" class="form-label">Nomor Telepon</label>
                                                <input type="no_telepon" class="form-control" id="no_telepon" name="no_telepon" value="{{ $pendaftarans->no_telepon }}">
                                                @error('no_telepon')
                                                    <div class="invalid-feedback">
                                                        Nomor telepon tidak boleh kosong
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form">
                                                <label for="no_hp" class="form-label">Nomor Handphone</label>
                                                <input type="text" class="form-control" id="no_hp" name="no_hp"
                                                    value="{{ $pendaftarans->no_hp }}">
                                                @error('no_hp')
                                                    <div class="invalid-feedback">
                                                        Nomor handphone tidak boleh kosong
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    value="{{ $pendaftarans->email }}">
                                                @error('email')
                                                    <div class="invalid-feedback">
                                                        Email tidak boleh kosong
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form">
                                                <label for="kewarganegaraan">Kewarganegaraan</label>
                                                <select class="form-control" name="kewarganegaraan" id="kewarganegaraan">
                                                    <option>{{ $pendaftarans->kewarganegaraan }}</option>
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
                                                <input type="tanggal_lahir" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $pendaftarans->tanggal_lahir }}">
                                                @error('tanggal_lahir')
                                                    <div class="invalid-feedback">
                                                        Tanggal lahir tidak boleh kosong
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form">
                                                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                                <input type="tempat_lahir" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ $pendaftarans->tempat_lahir }}">
                                                @error('tempat_lahir')
                                                    <div class="invalid-feedback">
                                                        Tempat lahir tidak boleh kosong
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form">
                                                <label for="kota_lahir" class="form-label">Kota Lahir</label>
                                                <input type="kota_lahir" class="form-control" id="kota_lahir" name="kota_lahir" value="{{ $pendaftarans->kota_lahir }}">
                                                @error('kota_lahir')
                                                    <div class="invalid-feedback">
                                                        Kota lahir tidak boleh kosong
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form">
                                                <label for="propinsi_lahir" class="form-label">Propinsi Lahir</label>
                                                <input type="propinsi_lahir" class="form-control" id="propinsi_lahir" name="propinsi_lahir" value="{{ $pendaftarans->propinsi_lahir }}">
                                                @error('propinsi_lahir')
                                                    <div class="invalid-feedback">
                                                        Propinsi lahir tidak boleh kosong
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form">
                                                <label for="negara_lahir" class="form-label">Negara Lahir</label>
                                                <input type="negara_lahir" class="form-control" id="negara_lahir" name="negara_lahir" value="{{ $pendaftarans->negara_lahir }}">
                                                @error('negara_lahir')
                                                    <div class="invalid-feedback">
                                                        Negara lahir tidak boleh kosong
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form">
                                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                                    <option>{{ $pendaftarans->jenis_kelamin }}</option>
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
                                                    <option>{{ $pendaftarans->status_menikah }}</option>
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
                                                    <option>{{ $pendaftarans->agama }}</option>
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
                                            <div class="form">
                                                <label for="status_pendaftaran" class="form-label">Status Pendaftaran</label>
                                                <select class="form-control" name="status_pendaftaran" id="status_pendaftaran">
                                                    <option>{{ $pendaftarans->status_pendaftaran }}</option>
                                                    <option value="{{ $pending }}">Pending</option>
                                                    <option value="{{ $terima }}">Diterima</option>
                                                    <option value="{{ $proses }}">Diproses</option>
                                                    <option value="{{ $tolak }}">Ditolak</option>
                                                </select>
                                                @error('status_pendaftaran')
                                                    <div class="invalid-feedback">
                                                        Status tidak boleh kosong
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="action-user d-flex justify-content-end align-items-center">
                                                <a href="/adminlistpendaftaran"
                                                class="btn btn-secondary mt-3" style="margin-right: 4px;">Batal</a>
                                                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                            </div>
                                    </form>
                                </div>
                        </div>
                    </div>
                    @include('sweetalert::alert')
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('/lte') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/lte') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/lte') }}/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('/lte') }}/dist/js/demo.js"></script>
    <script>
        $(function () {
                $.ajaxSetup({
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
                });
    
                $('#propinsi').on('change', function () {
                    let id_propinsi = $('#propinsi').val();
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('getkabupatenadmin') }}",
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
                        url: "{{ route('getkecamatanadmin') }}",
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
