<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class MyProfileMultimedia   extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    protected $fillable = [
        'language_id',
        'photo_gallery',
        'video_gallery',
        'my_playlist',
        'my_artist',
        'must_listen',
        'my_subscribes',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
