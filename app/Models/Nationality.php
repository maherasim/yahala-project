<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class  Nationality extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'nationalities';

    protected $fillable = [
        'name', 'thumbnail_path'
    ];
 

}
