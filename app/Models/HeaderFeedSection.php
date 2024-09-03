<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class HeaderFeedSection extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    protected $fillable = [
        'language_id',
        'no_stories_found',
        'latest_feeds',
        'see_all',
        'greeting_wishes',
        'in_development',
        'soon_available',
        'latest_history',
        'latest_vote',
        'post_comment',
        'like',
        'replay',
        'report_comment',
        'show_more',
        'see_more_feeds',
        'show_less',
        'see_less_feeds',
        'save_feed',
        'add_to_collection',
        'active_notification',
        'get_message_publish_feed',
        'hide_feed_from_user',
        'lorem_ipsum',
        'report_this_feed',
        'share_yekbun',
        'public',
        'friend',
        'family',
        'enter_description',
        'create_feed',
        'select_background',
        'select_font_color',
        'select_service',
        'search',
        'newest',
        'friends',
        'must_viewed',
        'done',
        'no_data_found',
        'my_collection',
        'no_collection',
        'create_collection',
        'new_playlist_name',
        'select',
        'private',
        'public',
        'friends',
        'family',
        'create'
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
