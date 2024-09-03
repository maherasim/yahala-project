<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MusicCategory extends Model
{
    use HasFactory, LogsActivity;

    protected $connection = 'mongodb';
    protected $collection = 'music_categories';

    protected $fillable =[
        'name'
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    public function musics(){
        return $this->hasMany(Music::class , 'category_id' , '_id');
    }
}
