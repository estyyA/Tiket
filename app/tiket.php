<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    protected $table = 'tiket';

    protected $fillable = [
        'nomor_kereta',
        'stasiun_asal',
        'stasiun_tujuan',
        'tersedia',
        'gambar',
    ];
}

