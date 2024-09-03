<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
 
use Jenssegers\Mongodb\Eloquent\Model;

class HeaderRestaurantSection extends Model
{
    use HasFactory;
    
    protected $connection = 'mongodb';
    use HasFactory;

    protected $fillable = [
        'language_id',
        'yahala',
        'social_arabic_site',
        'in_development',
        'soon_available',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
