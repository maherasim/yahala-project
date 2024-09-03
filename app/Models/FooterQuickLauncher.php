<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class FooterQuickLauncher extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    protected $fillable = [
        'language_id',
        'quick_launcher',
        'wishes_thanks',
        'greetings',
        'wishes',
        'prays',
        'introduce_business',
        'services',
        'bazar',
        'channels',
        'shops',
        'fast_sharing',
        'feeds',
        'stories',
        'golive',
        'video',
        'quick_access',
        'my_storage',
        'used',
        'free',
        'coming_soon',
        'under_development',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
