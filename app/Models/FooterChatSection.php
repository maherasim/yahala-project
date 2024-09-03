<?php
 namespace App\Models;

 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Jenssegers\Mongodb\Eloquent\Model;
 
 class FooterChatSection extends Model
 {
     protected $connection = 'mongodb';
     use HasFactory;
 
     protected $fillable = [
         'language_id',
         'bazar_chat',
         'shop_chat',
         'service_chat',
         'friends_chat',
         'family_chat',
         'group_chat',
         'notifications',
         'fanpage_chat',
         'wishes_chat',
         'favorite_contacts',
         'my_groups',
         'coming_soon',
         'chat_overview',
         'new_messages',
         'options',
         'block_user',
         'unblocked',
         'block',
         'report_user'
     ];
 
     public function language()
     {
         return $this->belongsTo(Language::class);
     }
 }
 