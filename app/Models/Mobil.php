<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Mobil extends Model implements JWTSubject
{
    protected $connection = 'mongodb';
    protected $collection = 'mobil';

    protected $fillable = [
        'mesin_mobil','kapasitas','tipe','stok','kendaraan_id'
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    
    public function getJWTCustomClaims()
    {
        return [];
    }
}
