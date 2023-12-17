<!doctype html>
<html lang="en">

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <title>Portal Telyu | Pendaftaran</title>
     <style>
          * {
               margin: 0;
               padding: 0;
               box-sizing: border-box;
               font-family: "Poppins", sans-serif;
               color: #252a34;
          }
          .my-primary-button {
               background-color: #007bff;
               color: #ffffff;
               border: 1px solid #007bff;
               padding: 0.375rem 0.75rem;
               border-radius: 0.25rem;
               cursor: pointer;
               margin-left: 85%;
          }
          .profileuser {
               margin: 100px 0px 80px 120px;
          }
          .profileuser .data-user form label {
               font-style: normal;
               font-weight: 600;
               font-size: 20px;
               line-height: 30px;
               letter-spacing: 0.01em;
               display: block;
               margin-bottom: 8px;
          }

          .profileuser .data-user form input {
               width: 90%;
               padding: 12px;
               margin-bottom: 16px;
               box-sizing: border-box;
               border: 1px solid #ccc;
               border-radius: 4px;
          }

          .profileuser .data-user form select {
               width: 90%;
               padding: 12px;
               margin-bottom: 16px;
               box-sizing: border-box;
               border: 1px solid #ccc;
               border-radius: 4px;
               }
     </style>
</head>

<body>
     <div>
          {{-- @foreach ($pendaftaran as $items) --}}
          <h3 style="text-align:center; font-size:28px;font-weight:bold; margin-top:60px;">Data Pendaftaran <span style="color: #C51F1A;">{{ $items->nama_lengkap }}</span></span></h3>
          <div class="profileuser">
               <div class="data-user">
                    <form method="#" action="#" enctype="multipart/form-data">
                         <div class="form">
                              <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                              <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                   value="{{ $items->nama_lengkap }}" disabled>
                         </div>
                         <div class="form">
                              <label for="alamat_ktp" class="form-label">Alamat KTP</label>
                              <input type="text" class="form-control" id="alamat_ktp" name="alamat_ktp" value="{{ $items->alamat_ktp }}" disabled>
                         </div>
                         <div class="form">
                              <label for="alamat_lengkap_saat_ini" class="form-label">Alamat Lengkap</label>
                              <input type="text" class="form-control" id="alamat_lengkap_saat_ini" name="alamat_lengkap_saat_ini"
                                   value="{{ $items->alamat_lengkap_saat_ini }}" disabled>
                         </div>
                         <div class="form">
                              <label for="propinsi">Propinsi</label>
                              <select disabled class="form-control" name="propinsi" id="propinsi">
                                   <option>{{ $items->propinsi }}</option>
                              </select>
                         </div>
                         <div class="form">
                              <label for="kabupaten">Kabupaten</label>
                              <select disabled class="form-control" name="kabupaten" id="kabupaten">
                                   <option>{{ $items->kabupaten }}</option>
                              </select>
                         </div>
                         <div class="form">
                              <label for="kecamatan">Kecamatan</label>
                              <select disabled class="form-control" name="kecamatan" id="kecamatan">
                                   <option>{{ $items->kecamatan }}</option>
                              </select>
                         </div>
                         <div class="form">
                              <label for="no_telepon" class="form-label">Nomor Telepon</label>
                              <input type="no_telepon" disabled class="form-control" id="no_telepon" name="no_telepon" value="{{ $items->no_telepon }}">
                         </div>
                         <div class="form">
                              <label for="no_hp" class="form-label">Nomor Handphone</label>
                              <input type="text" class="form-control" id="no_hp" name="no_hp"
                                   value="{{ $items->no_hp }}" disabled>
                         </div>
                         <div class="form">
                              <label for="email" class="form-label">Email</label>
                              <input type="email" class="form-control" id="email" name="email"
                                   value="{{ $items->email }}" disabled>
                         </div>
                         <div class="form">
                              <label for="kewarganegaraan">Kewarganegaraan</label>
                              <select disabled class="form-control" name="kewarganegaraan" id="kewarganegaraan">
                                   <option>{{ $items->kewarganegaraan }}</option>
                              </select>
                         </div>
                         <div class="form">
                              <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                              <input type="tanggal_lahir" disabled disabled class="form-control" id="tanggal_lahir" value="{{ $items->tanggal_lahir }}" name="tanggal_lahir">
                         </div>
                         <div class="form">
                              <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                              <input type="tempat_lahir" disabled class="form-control" id="tempat_lahir" value="{{ $items->tempat_lahir }}" name="tempat_lahir">
                         </div>
                         <div class="form">
                              <label for="kota_lahir" class="form-label">Kota Lahir</label>
                              <input type="kota_lahir" disabled class="form-control" id="kota_lahir" value="{{ $items->kota_lahir }}" name="kota_lahir">
                         </div>
                         <div class="form">
                              <label for="propinsi_lahir" class="form-label">Propinsi Lahir</label>
                              <input type="propinsi_lahir" disabled class="form-control" id="propinsi_lahir" value="{{ $items->propinsi_lahir }}" name="propinsi_lahir">
                         </div>
                         <div class="form">
                              <label for="negara_lahir" class="form-label">Negara Lahir</label>
                              <input type="negara_lahir" disabled class="form-control" id="negara_lahir" value="{{ $items->negara_lahir }}" name="negara_lahir">
                         </div>
                         <div class="form">
                              <label for="jenis_kelamin">Jenis Kelamin</label>
                              <select disabled class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                   <option>{{ $items->jenis_kelamin }}</option>
                              </select>
                         </div>
                         <div class="form">
                              <label for="status_menikah">Status Menikah</label>
                              <select disabled class="form-control" name="status_menikah" id="status_menikah">
                                   <option>{{ $items->status_menikah }}</option>
                              </select>
                         </div>
                         <div class="form">
                              <label for="agama">Agama</label>
                              <select disabled class="form-control" name="agama" id="agama">
                                   <option>{{ $items->agama }}</option>
                              </select>
                         </div>
                         <div class="form">
                              <label for="status_pendaftaran" class="form-label">Status Pendaftaran</label>
                              <input  disabled type="status_pendaftaran" class="form-control" id="status_pendaftaran" value="{{ $items->status_pendaftaran }}" name="status_pendaftaran">
                         </div>
                         <div class="action-user d-flex justify-content-end align-items-center">
                              <a href="{{ url()->current() . '?output=pdf' }}"
                                   class="my-primary-button">Cetak</a>
                         </div>
                    </form>
               </div>
          </div>
          {{-- @endforeach --}}
     </div>
</body>
</html>
