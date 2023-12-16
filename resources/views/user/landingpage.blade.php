@extends('layouts.app')

@section('title', 'Home')

@section('content')
    {{-- hero --}}
    <div class="hero d-flex align-items-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col text-center">
                    <h3 class="text-white fw-semibold mb-2">Holaaa</h3>
                    <h1 class="text-white fw-bold mb-4">Selamat Datang di Portal Pendaftaran Mahasiswa Telyu</h1>
                    <p class="text-white mb-5 text-opacity-75">
                        Telkom University merupakan Universitas Swasta Terbaik di Bandung Indonesia, Tel-U terakreditasi Unggul, program studinya sudah terakreditasi Unggul atau A.
                    </p>
                    @auth
                        <a href="{{ route('pendaftaran', [ Auth::user()->id ]) }}" style="background-color: #C51F1A; border:none;" class="btn btn-primary btn-lg rounded-1 mt-3">
                            Daftar
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
@endsection
