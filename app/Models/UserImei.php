<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class UserImei extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'users_imei';

    use HasFactory;

    protected $fillable = [
        'user_id',
        'device_imei'
    ];
}
