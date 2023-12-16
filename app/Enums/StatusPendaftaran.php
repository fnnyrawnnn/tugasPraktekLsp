<?php

namespace App\Enums;

enum StatusPendaftaran: string
{
    case Pending = 'Pending';
    case Diterima = 'Diterima';
    case Diproses = 'Diproses';
    case Ditolak = 'Ditolak';
}
