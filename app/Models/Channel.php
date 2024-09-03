<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Channel extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'channels';

    public $timestamps = true;

    protected $fillable = ['_id','channel_title', 'banner'];
    public function subcategories() {
        return $this->hasMany(ChannelSubcategory::class, 'category_id', '_id');
    }

}
