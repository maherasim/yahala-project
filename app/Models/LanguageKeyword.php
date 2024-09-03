<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;


class LanguageKeyword extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    protected $fillable = [
        'language_id', 'alert', 'upgrade', 'premium', 'vip', 'monthly', 'feeds',
        'text_comments', 'music_player', 'video_playlist', 'discount',
        'stories', 'voice_comments', 'live_stream', 'fanpage', 'gift_free',
        'show_me_the_gift', 'congratulations_educated', 'congratulations_academic',
        'premium_description', 'go_back_home', 'your_activation_code_mail',
        'your_password_code_mail', 'your_fanpage_activation_code', 'one_time_code',
        'follow_steps_on_your_device', 'welcome',
        // Add more fields if necessary
    ];


    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
