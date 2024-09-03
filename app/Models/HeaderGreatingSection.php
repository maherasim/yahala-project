<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class HeaderGreatingSection  extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    protected $fillable = [
        'language_id',
        'greetings',
        'pray',
        'sympathy',
        'see_all',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
