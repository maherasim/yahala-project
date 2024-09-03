<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class HeaderSectionStories  extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    protected $fillable = [
        'language_id',
        'my_subscriber',
        'friends_stories',
        'family_stories',
        'my_stories',
        'see_all',
        'created',
        'story_created_success',
        'latest_stories',
        'no_stories_found',
        'recently_viewed',
        'stories',
        'create_new_stories',
        'start_now',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
