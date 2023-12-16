<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Pendaftaran Telyu | Register</title>

    <style>
        .register-box {
            box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
            width: 500px;
            background-color: white;
            border-radius: 32px
        }
    </style>
</head>

<body>
    <div class=" d-flex justify-content-center align-items-center my-5">
        <div class="register-box p-5 ">
            <div class="title mb-3">
                <h3 class="text-center">Selamat Datang Calon Mahasiswa <span style="color: #C51F1A;">Telyu</span></h3>
                <p class="text-secondary text-center">Silahkan Masukkan Data Anda!</p>
            </div>
            <form method="POST" action="{{ route('do.userregister') }}" enctype="multipart/form-data">
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
                    <label for="no_hp" class="form-label">Nomor Handphone</label>
                    <input type="text" class="form-control @error('no_hp') is-invalid @enderror"
                        name="no_hp" id="no_hp" aria-describedby="no_hpHelp">
                    @error('no_hp')
                        <div id="no_hpHelp" class="form-text">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="alamat_lengkap_saat_ini" class="form-label">Alamat Lengkap</label>
                    <input type="text" class="form-control @error('alamat_lengkap_saat_ini') is-invalid @enderror" name="alamat_lengkap_saat_ini"
                        id="alamat_lengkap_saat_ini" aria-describedby="alamat_lengkap_saat_iniHelp">
                    @error('alamat_lengkap_saat_ini')
                        <div id="alamatHelp" class="form-text">{{ $message }}</div>
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

                <div class="mb-3 mt-5 ">
                    <button class="btn btn-primary w-100" style="border-radius: 20px"
                        type="sub
                    ">Register</button>
                    <p class="mt-3 text-center">
                        Sudah punya akun?
                        <a href="{{ route('login') }}">silakan login.</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
