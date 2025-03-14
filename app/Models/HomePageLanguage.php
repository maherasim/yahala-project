<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class HomePageLanguage extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    protected $fillable = [
        'language_id',
        'language_main',
        'search_language'
        
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
