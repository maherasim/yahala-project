<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class HeaderVideoSection   extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    protected $fillable = [
        'language_id',
         'yahala',
        'arabic_social_site',
        'in_development',
        'soon_available',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
