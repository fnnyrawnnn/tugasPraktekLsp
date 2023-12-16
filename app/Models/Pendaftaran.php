<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'nama_lengkap',
        'alamat_ktp',
        'alamat_lengkap_saat_ini',
        'kecamatan',
        'kabupaten',
        'propinsi',
        'no_telepon',
        'no_hp',
        'email',
        'kewarganegaraan',
        'tanggal_lahir',
        'tempat_lahir',
        'kota_lahir',
        'propinsi_lahir',
        'negara_lahir',
        'jenis_kelamin',
        'status_menikah',
        'agama',
        'status_pendaftaran',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
