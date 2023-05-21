<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model; 

class Kendaraan extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'kendaraan';

    protected $fillable = [
        'tahun keluaran','warna','harga','jumlah stok'
    ];

    
}
