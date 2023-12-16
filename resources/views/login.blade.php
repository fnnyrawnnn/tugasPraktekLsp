<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Boostrap icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <title>Pendaftaran Telyu | Login</title>

    <style>
        .login-box {
            /* border: solid 1px gray; */
            box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
            width: 500px;
            background-color: white;
            border-radius: 32px
        }
    </style>
</head>

<body>
    <div class="vh-100 p-5 d-flex justify-content-center align-items-center">
        <div class="login-box p-5">
            <div class="title mb-3">
                <h3 class="text-center">Selamat Datang Calon Mahasiswa <span style="color: #C51F1A;"> Telyu</span></h3>
                <p class="text-secondary text-center">Silahkan Masukkan Data Anda!</p>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3 form">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email"
                        class="form-control @error('email') is-invalid @enderror" required>
                    @error('email')
                        <div id="emailHelp" class="form-text">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 form">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password"
                        class="form-control @error('password') is-invalid @enderror" required>
                    @error('password')
                        <div id="passwordHelp" class="form-text">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 mt-5 ">
                    <button class="btn btn-primary w-100" type="sub
                    "
                        style="border-radius: 20px;">Login</button>
                    <p class="mt-3 text-center">Belum punya akun?</p>
                    <a href="{{ route('user.register') }}" class="btn btn-md btn-primary w-100 mb-2 mt-2"
                        style="border-radius: 20px;">Daftar
                        Sebagai
                        User</a>
                        <p class="mt-3 text-center">
                            Lupa password?
                            <a href="{{ route('forgot') }}">lupa password.</a>
                        </p>
                </div>
            </form>
        </div>
        @include('sweetalert::alert')

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha384-/L8k0Uq6T6+9nVzAx4/xF5OdeQvq0W9/1yVhLV6A+P3X4we1aTE3ZqLdPNM1hjp" crossorigin="anonymous"></script>
</body>

</html>
