<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class MyProfileHomeSection    extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    protected $fillable = [
        'language_id',
        'update_profile_image',
        'select_or_upload_banner',
        'like',
        'following',
        'following_posts',
        'menu',
        'share_on_yekbun',
        'upload_video',
        'create_reels',
        'go_live',
        'my_feed',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
