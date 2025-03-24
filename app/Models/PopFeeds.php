<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PopFeeds extends Model
{
    use HasFactory, LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'title',
        'date_start',
        'date_ends',
        'image',
        'audio',
        'video',
        'share_option',
        'status',
        'is_comments',
        'is_share',
        'is_emoji',
        'type',
        'limited',
        'is_paypal',
        'is_gpay',
        'is_pay_office',
        'is_pay_other',
        'icon1',
        'icon2',
        'icon3',
        'txt1',
        'txt2',
        'txt3'
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class, 'reported_post_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class );
    }

    /*
    public function reactions(){

        return $this->hasMany(Reaction::class , 'feed_id');
    }
        */

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


}
