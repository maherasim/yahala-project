<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class AlbumFavourite extends Model
{
    use HasFactory;
    public $fillable = [
        'user_id',
        'album_id'
    ];

    protected $casts = ['album_id' => 'array'];
    // protected $attributes = ['album_id' => '[]' ];
}
