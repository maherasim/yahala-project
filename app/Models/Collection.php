<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;
    public function feeds()
    {
        return $this->belongsToMany(Feed::class, 'collection_feeds', 'collection_id', 'feed_id');
    }
    
}
