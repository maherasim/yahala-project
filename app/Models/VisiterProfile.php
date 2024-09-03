<?php
 namespace App\Models;

 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Jenssegers\Mongodb\Eloquent\Model;
 
 class VisiterProfile extends Model
 {
     protected $connection = 'mongodb';
     use HasFactory;
 
     protected $fillable = [
         'language_id',
         'say_hello',
         'be_friends',
         'cancel_friend_request',
         'my_feeds',
         'see_all_my_feeds',
         'photo_gallery',
         'see_all_photo_gallery',
         'video_gallery',
         'see_all_video_gallery',
         'my_friends',
         'see_all_my_friends',
         'options',
         'move_user',
         'friends_option',
         'family_option',
         'remove_option',
         'block_user',
         'unblock_block_user',
         'block_block_user',
         'report_user',
         'insult_report_user',
         'image_report_user',
         'content_report_user',
         'feedback_report_user',
         'annoyance_report_user',
         'racism_report_user'
     ];
 
     public function language()
     {
         return $this->belongsTo(Language::class);
     }
 }
 