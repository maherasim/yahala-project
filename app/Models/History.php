<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class History extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable=[
        'title',
        'category_id',
        'language',
        'image',
        'video'
    ];

    protected $casts = [
        'image' => 'array',
        'video' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($history) {
            $lastHistory = self::orderBy('id', 'desc')->first();
            $lastId = $lastHistory ? intval(substr($lastHistory->custom_id, 2)) : 99;
            $history->custom_id = 'HS-' . ($lastId + 1);
        });
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    public function history_category(){
        return $this->belongsTo(HistoryCategory::class, 'category_id');
    }


    public function gallery(){
        return $this->hasMany(PostGallery::class);
    }
}
