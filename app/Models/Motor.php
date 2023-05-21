<?php

namespace App\Models;
use Jenssegers\Mongodb\Eloquent\Model;

class Motor extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'motor';

    protected $fillable = [
        'mesin','suspensi','transmisi'
    ];

    
}
