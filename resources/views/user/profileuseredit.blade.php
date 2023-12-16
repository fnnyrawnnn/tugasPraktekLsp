@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
    <div class="profileuser">
        <div class="row px-5 gx-lg-5 d-flex justify-content-center align-items-center data-user">
            <div class="col-lg-8 ">
                <form action="{{ route('update.profile',['id' => $users->id]) }}" method="POST"  enctype="multipart/form-data">
                    @method('put')
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
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ $users->email }}">
                        @error('email')
                            <div class="invalid-feedback">
                                Nama tidak boleh kosong
                            </div>
                        @enderror
                    </div>
                    <div class="form">
                        <label for="no_hp" class="form-label">Nomor Handphone</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp"
                            value="{{ $users->no_hp }}">
                        @error('no_hp')
                            <div class="invalid-feedback">
                                nomor handphone tidak boleh kosong
                            </div>
                        @enderror
                    </div>
                    <div class="form">
                        <label for="alamat_lengkap_saat_ini" class="form-label">Alamat Lengkap</label>
                        <input type="text" class="form-control" id="alamat_lengkap_saat_ini" name="alamat_lengkap_saat_ini"
                            value="{{ $users->alamat_lengkap_saat_ini }}">
                        @error('alamat_lengkap_saat_ini')
                            <div class="invalid-feedback">
                                Alamat tidak boleh kosong
                            </div>
                        @enderror
                    </div>
                    @if ($users->image)
                    <img src="{{ asset($users->image) }}" alt="{{ $users->nama_lengkap }}"
                        width="100">
                    @endif

                    <div class="mb-3">
                            <label for="image" class="form-label">Profile Picture</label>
                            <input type="file" value="{{ $users->image }}" class="form-control @error('image') is-invalid @enderror"
                                aria-describedby="imageHelp"" id="image" name="image">
                            @error('image')
                                <div id="imageHelp" class="form-text">{{ $message }}</div>
                            @enderror
                        </div>
                    <div class="action-user d-flex justify-content-end align-items-center">
                        <a href="/profileuser/{{ Auth::user()->id }}"
                        class="btn btn-secondary mt-3" style="margin-right: 4px;">Batal</a>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
