<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artist extends Model
{
    use HasFactory, LogsActivity;

    protected $connection = 'mongodb';
    protected $collection = 'artists';

    protected $fillable=[
        'first_name',
        'last_name',
        'city',
        'dob',
        'gender',
        'image'
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    public function musics(){
        return $this->hasMany(Music::class , 'artist_id' , 'id');
    }

    public function songs(){
        return $this->hasMany(Song::class , 'artist_id' , 'id');
    }

    public function albums(){
        return $this->hasMany(Album::class , 'artist_id' , 'id');
    }

    public function videos(){
        return $this->hasMany(VideoClip::class , 'artist_id' , 'id');
    }

    public function province()
    {
        return $this->belongsTo(Region::class, 'province_id');
    }


}
