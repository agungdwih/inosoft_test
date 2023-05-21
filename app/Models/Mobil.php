<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model; 

class Mobil extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'mobil';

    protected $fillable = [
        'mesin','kapasitas','tipe'
    ];

    
}
