<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Video extends Model
{
    use HasFactory,LogsActivity;

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

        static::creating(function ($video) {
            $lastVideo = self::orderBy('created_at', 'desc')->first();
            $lastId = $lastVideo ? intval(substr($lastVideo->custom_id, 2)) : 99;
            $video->custom_id = 'VS-' . ($lastId + 1);
        });
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    public function comments()
    {
        return $this->hasMany(FeedComments::class)->where('feed_type','video');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
