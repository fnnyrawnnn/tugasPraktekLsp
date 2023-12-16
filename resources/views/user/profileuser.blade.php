@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="profileuser" style="margin-bottom: 200px;">
        <div class="container">
            <div class="row px-5 gx-lg-5 d-flex justify-content-center align-items-center nama-user">
                <div class="col-lg-3">
                    <img src="{{ asset(Auth::user()->image) }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-4 my-3">
                    <h5>Selamat Datang,</h5>
                    @auth
                        <h1>{{ Auth::user()->nama_lengkap }}</h1>
                    @endauth
                </div>
            </div>
            <div class="row px-5 gx-lg-5 d-flex justify-content-center align-items-center data-user">
                <div class="col-lg-8 p-4 bg-light rounded-3">
                    <div class="detail-user d-flex align-items-center justify-content-between my-3 bg-white p-3 rounded-3">
                        <h5 style="margin: 0;">Detail Profil</h5>
                        <a href="/profileuser/{{ Auth::user()->id }}">Lihat >>></a>
                    </div>
                    <div class="detail-user d-flex align-items-center justify-content-between my-3 bg-white p-3 rounded-3">
                        <h5 style="margin: 0;">Lihat Histori Pendaftaran</h5>
                        <a href="{{ route('detail.pendaftaran') }}">Lihat >>></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
