@extends('layouts.app')

@section('title', 'Detail User')

@section('content')
    <div class="profileuser">
        <div class="container">
            <div class="row px-5 gx-lg-5 d-flex justify-content-center align-items-center nama-user">
                <div class="col-lg-3">
                    <img src="{{ asset($users->image) }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-4 my-3">
                    <h5>Selamat Datang,</h5>
                    <h1>{{ $users->nama_lengkap }}</h1>
                </div>
            </div>
        </div>
        <div class="row px-5 gx-lg-5 d-flex justify-content-center align-items-center data-user">
            <div class="col-lg-8 ">
                <form action="#">
                    <div class="form">
                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{ $users->nama_lengkap }}"
                            disabled>
                    </div>
                    <div class="form">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $users->email }}"
                            disabled>
                    </div>
                    <div class="form">
                        <label for="no_hp" class="form-label">Nomor Handphone</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp"
                            value="{{ $users->no_hp }}" disabled>
                    </div>
                    <div class="form">
                        <label for="alamat_lengkap_saat_ini" class="form-label">Alamat Lengkap</label>
                        <input type="text" class="form-control" id="alamat_lengkap_saat_ini" name="alamat_lengkap_saat_ini"
                            value="{{ $users->alamat_lengkap_saat_ini }}" disabled>
                    </div>
                    <div class="action-user d-flex justify-content-end align-items-center">
                        <a href="/profileuser"
                            class="btn btn-lg btn-info text-white fw-bold mx-3">Kembali</a>
                        <a href="/profileuser/{{ $users->id }}/edit"
                            class="btn btn-lg btn-warning text-white fw-bold mx-3">Ubah</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
