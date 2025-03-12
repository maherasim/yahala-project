<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class AvatarsFeeds extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $table = 'avatars_feeds'; // MongoDB collection name

    protected $fillable = [
        'avatar_Id',
        'title',
        'image',
        'content',
        'forwards',
        'comments',
        'likes',
        'videos'
    ];

    protected $casts = [
        'image' => 'array',
        'videos' => 'array',
    ];
}


?>