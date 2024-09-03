<?php
 namespace App\Models;

 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Jenssegers\Mongodb\Eloquent\Model;
 
 class FooterFriendSection extends Model
 {
     protected $connection = 'mongodb';
     use HasFactory;
 
     protected $fillable = [
         'language_id',
         'friends_online',
         'user_you_may_know',
         'see_all',
         'friends_request',
         'search_friends',
         'friends',
         'no_record_found',
         'search_family',
         'family',
         'no_family_member_found',
         'search_user',
         'no_friend_family_found'
     ];
 
     public function language()
     {
         return $this->belongsTo(Language::class);
     }
 }
 