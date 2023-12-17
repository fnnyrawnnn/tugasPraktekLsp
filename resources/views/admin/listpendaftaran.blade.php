@extends('admin.app')

@section('title', 'Daftar Pendaftaran')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Pendaftaran</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Pendaftar</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pendaftarans as $item)
                        <tr class="align-items-center">
                            <td>
                                <p>{{ $loop->iteration }}</p>
                            </td>
                            <td>
                                <p>{{ $item->nama_lengkap }}</p>
                            </td>
                            <td><a href="/updatependaftaran/{{ $item->id }}/edit" class="btn btn-warning text-white">Update</a>
                            <a href="/pendaftaran/{{ $item->id }}/delete"
                                    class="btn btn-danger text-white">Hapus</a>
                            <a href="/admindetailpendaftaran/{{ $item->id }}"
                                    class="btn btn-info text-white">Detail</a>
                            <a href="/admincetakpdf/{{ $item->id }}"
                                    class="btn btn-primary text-white" target="_blank">Cetak</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
