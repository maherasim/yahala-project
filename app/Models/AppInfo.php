<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class AppInfo extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'app_info';

    protected $fillable = [
        'country',
        'address',
        'appartment',
        'phone',
        'city',
        'state',
        'pincode'
    ];
}
