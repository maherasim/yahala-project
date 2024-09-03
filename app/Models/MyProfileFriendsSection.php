<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class MyProfileFriendsSection   extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    protected $fillable = [
        'language_id',
        'friend_request',
        'no_friend_requests',
        'see_all_friend_requests',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
