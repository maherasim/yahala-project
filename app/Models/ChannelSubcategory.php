<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class ChannelSubcategory extends Eloquent
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'channel_subcategory';

    public function category() {
        return $this->belongsTo(Channel::class, 'category_id', '_id');
    }
}
