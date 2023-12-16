<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal Telyu | Admin Side</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/lte') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/lte') }}/dist/css/adminlte.min.css">
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
                <h3 class="card-title">Tambah User</h3>
            </section>

            <div class="card-header">
                <form method="POST" action="{{ route('create.user') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap"
                            id="nama_lengkap" aria-describedby="nama_lengkapHelp">
                        @error('nama_lengkap')
                            <div id="nama_lengkapHelp" class="form-text">{{ $message }}</div>
                        @enderror
                    </div>
    
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            id="email" aria-describedby="emailHelp">
                        @error('email')
                            <div id="emailHelp" class="form-text">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="alamat_lengkap_saat_ini" class="form-label">Alamat Lengkap</label>
                        <input type="alamat" class="form-control @error('alamat_lengkap_saat_ini') is-invalid @enderror" name="alamat_lengkap_saat_ini"
                            id="alamat_lengkap_saat_ini" aria-describedby="alamat_lengkap_saat_iniHelp">
                        @error('alamat_lengkap_saat_ini')
                            <div id="alamat_lengkap_saat_iniHelp" class="form-text">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="no_hp" class="form-label">Nomor Handphone</label>
                        <input type="no_hp" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp"
                            id="no_hp" aria-describedby="no_hpHelp">
                        @error('no_hp')
                            <div id="no_hpHelp" class="form-text">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Foto Profil</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                            aria-describedby="imageHelp"" id="image" name="image">
                        @error('image')
                            <div id="imageHelp" class="form-text">{{ $message }}</div>
                        @enderror
                    </div>
    
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                            id="password">
                        @error('password')
                            <div id="passwordHelp" class="form-text">{{ $message }}</div>
                        @enderror
                    </div>
    
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Password Confirmation</label>
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                            name="password_confirmation" id="password_confirmation">
                        @error('password_confirmation')
                            <div id="passwordConfirmationHelp" class="form-text">{{ $message }}</div>
                        @enderror
                    </div>
    
                    <div class="action-user d-flex justify-content-end align-items-center">
                        <a href="/adminlistuser"
                        class="btn btn-secondary mt-3" style="margin-right: 4px;">Batal</a>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </div>
                </form>
        </div>



            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                @yield('content')
                @include('sweetalert::alert')
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
</body>

</html>
