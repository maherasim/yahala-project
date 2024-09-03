<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class headervoter extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    protected $fillable = [
        'language_id',
        'categories',
        'newst_uploads',
        'past_vote',
        'your_vote',
        'what_u_like',
        'notification',
        'vote_one_time',
        'cant_redo_vote',
        'community',
        'reviews_qualification',
        'total',
        'statistics',
        'age_and_gender',
        'male',
        'female',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
