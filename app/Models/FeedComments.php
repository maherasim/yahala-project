<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class FeedComments extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'feed_comments';

    protected $fillable = [
        'user_id',
        'feed_id',
        'comment',
        'parent_id',
        'feed_type',
        'comment_type',
        'status',
        'audio',
        'emoji',
        'image'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function child_comments()
    {
        return $this->hasMany(self::class,'parent_id');
    }

    public function parent_comment()
    {
        return $this->belongsTo(self::class);
    }

}
