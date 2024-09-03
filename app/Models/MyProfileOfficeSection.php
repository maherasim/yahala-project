<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class MyProfileOfficeSection   extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    protected $fillable = [
        'language_id',
        'standard',
        'upgrade_account',
        'my_fanpage',
        'new_violate',
        'you_get_flag',
        'reason',
        'closed_violate',
        'my_fanpage_channel',
        'owner',
        'follower',
        'member',
        'our_document',
        'see_all_document',
        'statics',
        'my_storage',
        'used_storage',
        'free_storage',
        'my_wishes',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
