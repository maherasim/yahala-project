<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting; // Assuming you have a User model

class UserRoleSettingSeeder extends Seeder
{
    public function run()
    {
      $userLevels = ['standard', 'premium', 'vip'];

      $permissions = [
          'friends_allow_request' => false,
          'friends_total_friends' => 5,
          'friends_total_family' => 5,
          'storage_allow_total' => false,
          'storage_total_amount' => 100,
          'storage_alert' => false,
          'storage_alert_amount' => 10,
          'feed_allow_feeds' => false,
          'feed_options' => false,
          'feed_video_cam' => false,
          'feed_share_images' => false,
          'feed_text_comments' => false,
          'feed_like_button' => false,
          'feed_share_comments' => false,
          'feed_voice_comments' => false,
          'feed_voice_record_time' => 10,
          'feed_share_videos' => false,
          'feed_share_video_amount' => 10,
          'wishes_allow_wishes' => false,
          'wishes_daily_share' => 5,
          'wishes_text_comments' => false,
          'wishes_like_button' => false,
          'wishes_share_comments' => false,
          'wishes_voice_comments' => false,
          'wishes_voice_record_time' => 10,
          'history_allow_history' => false,
          'history_daily_share' => 5,
          'history_text_comments' => false,
          'history_like_button' => false,
          'history_share_comments' => false,
          'history_voice_comments' => false,
          'history_voice_record_time' => 10,
          'vote_allow_vote' => false,
          'music_allow_music' => false,
          'music_share_songs' => false,
          'music_create_playlist' => false,
          'music_allowed_playlist' => 5,
          'music_buy_songs' => false,
          'music_daily_songs' => 5,
          'music_favorite_songs' => false,
          'music_favorite_artist' => false,
          'music_playlist_price_amount' => 5,
          'music_playlist_price_unit' => '$',
          'video_allow_video' => false,
          'video_create_playlist' => false,
          'video_allowed_playlist' => false,
          'video_daily_videos' => false,
          'video_playlist_price_amount' => 5,
          'video_playlist_price_unit' => '$',
          'video_text_comments' => false,
          'video_like_button' => false,
          'video_share_comments' => false,
          'video_voice_comments' => false,
          'video_voice_record_time' => 10,
          'liveStream_allow_liveStream' => false,
          'liveStream_record_time' => 10,
          'liveStream_invent_friends' => false,
          'liveStream_invent_friends_amount' => 5,
          'liveStream_invent_family' => false,
          'liveStream_invent_family_amount' => 5,
          'liveStream_text_comments' => false,
          'liveStream_like_button' => false,
          'liveStream_share_comments' => false,
          'liveStream_voice_comments' => false,
          'liveStream_voice_record_time' => 10,
          'interviews_allow_interviews' => false,
          'interviews_record_time' => 10,
          'interviews_allowed_friends' => 5,
          'interviews_text_comments' => false,
          'interviews_like_button' => false,
          'interviews_share_comments' => false,
          'interviews_voice_comments' => false,
          'interviews_voice_record_time' => 10,
          'liveChannels_allow_liveChannels' => false,
          'liveChannels_allowed_friends' => 5,
          'liveChannels_text_comments' => false,
          'liveChannels_like_button' => false,
          'liveChannels_share_comments' => false,
          'liveChannels_voice_comments' => false,
          'liveChannels_voice_record_time' => 10,
          'chat_allow_chat' => false,
          'chat_voice_messages' => false,
          'chat_voice_record_allow' => false,
          'chat_voice_record_time' => 10,
          'chat_text_message' => false,
          'chat_share_files' => false,
          'chat_share_location' => false,
          'chat_create_groups_allow' => false,
          'chat_create_groups_amount' => 5,
          'chat_join_group' => false,
          'chat_voice_calls' => false,
          'chat_voice_group_calls' => false,
          'chat_voice_join_call' => false,
          'chat_voice_call_time' => 10,
          'chat_video_calls' => false,
          'chat_video_group_calls' => false,
          'chat_video_join_call' => false,
          'chat_video_call_time' => 10,
      ];

      // Create a permission
      for($i = 0; $i < 3; $i ++){
        Setting::create([
          'name' => $userLevels[$i],
          'value' => $permissions, // Optional, depends on your configuration
        ]);
      }
    }
}
