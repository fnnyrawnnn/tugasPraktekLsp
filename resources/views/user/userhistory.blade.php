@extends('layouts.app')

@section('title', 'History Pendaftaran')

@section('content')
     <div class="profileuser">
          <div class="row px-5 gx-lg-5 d-flex justify-content-center align-items-center data-user">
               <div class="col-lg-8 ">
                    <div class="card">
                         <div class="card-header">
                              <h3 class="card-title">Riwayat Pendaftaran</h3>
                              <div class="card-body">
                              <table class="table">
                                   <thead>
                                        <tr>
                                             <th scope="col">No.</th>
                                             <th scope="col">Status</th>
                                             <th scope="col">Action</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        @foreach ($histories as $item)
                                             <tr class="align-items-center">
                                                  <td>
                                                  <p>{{ $loop->iteration }}</p>
                                                  </td>
                                                  <td>
                                                  <p>{{ $item->status_pendaftaran }}</p>
                                                  </td>
                                                  <td><a href="/user/{{ $item->id }}/detail" class="btn btn-info text-white">Detail</a>
                                                  </td>
                                             </tr>
                                        @endforeach
                                   </tbody>
                              </table>
                              </div>
                              <!-- /.card-body -->
                         </div>
               </div>
          </div>
     </div>
@endsection
