<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class AvatarsFeeds extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
     protected $table = 'avatars_feedsasim';

     protected $fillable = [
       'avatar_Id', 'title', 'image', 'content', 'forwards', 
    'comments', 'likes', 'videos', 'user_type', 'feed_type',
    'background_image', 'text_color', 'grid_style', 'description',
    'text', 'text_properties','textSize','user_Id','shareType','shareFrds'
    ];

    protected $casts = [
        'image' => 'array',
        'videos' => 'array',
        'shareFrds' => 'array',
    ];
}


?>