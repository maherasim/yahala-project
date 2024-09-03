<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class headerhistory extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    protected $fillable = [
        'language_id',
        'categories',
        'newst_upload',
        'must_viewed',
        'share_on_yekbun',
        'public',
        'friends',
        'family',
        'write_a_comment',
        'post_media_comment',
        'add_voice',
        'see_all',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
