<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class HeaderMusicSection   extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    protected $fillable = [
        'language_id',
        'new_albums',
        'latest_videos',
        'new_artist',
        'latest_stream',
        'latest_songs',
        'see_all',
        'history',
        'invoice',
        'purchase',
        'my_invoice',
        'music_history',
        'my_purchase',
        'options',
        'share_with_friends',
        'move_to_playlist',
        'save',
        'remove_from_playlist',
        'categorys',
        'popular_songs',
        'latest_uploads',
        'new_artist_2',
        'artist',
        'songs',
        'albums',
        'video_clip',
        'new_album',
        'albums_2',
        'my_playlist',
        'playlist',
        'need_more_playlist',
        'buy_new_playlist',
        'options_2',
        'create_new_playlist',
        'enter_new_playlist_name',
        'select',
        'private',
        'public',
        'friends',
        'family',
        'create',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
