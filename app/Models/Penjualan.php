<?php

namespace App\Models;
use Jenssegers\Mongodb\Eloquent\Model;

class Penjualan extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'penjualan';

    protected $fillable = [
        'tipe_kendaraan','id_jual','qty'
    ];

    
}
