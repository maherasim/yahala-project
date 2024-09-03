<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
//use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Music extends Model
{
    use HasFactory, LogsActivity;

    protected $connection = 'mongodb';
    protected $collection = 'musics';

    protected $fillable =[
      'name',
      'category_id',
      'audio',
      'popular',
      'artist_id'

    ];
    protected $casts = [
        'audio' => 'array'
     ];
     protected $attributes = [
        'audio' => '[]'
     ];

     protected static function boot()
     {
         parent::boot();

         static::creating(function ($history) {
             $lastHistory = self::orderBy('id', 'desc')->first();
             $lastId = $lastHistory ? intval(substr($lastHistory->custom_id, 2)) : 99;
             $history->custom_id = 'MU-' . ($lastId + 1);
         });
     }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    public function music_category(){
        return $this->belongsTo(MusicCategory::class , 'category_id','_id' );
    }

    public function artist(){
        return $this->belongsTo(Artist::class , 'artist_id');
    }
    public function songs(){
        return $this->hasMany(Song::class , 'music_id')->where('length','!=',null);
    }
}
