<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class App_Policy extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    protected $fillable = [
        'language_id',
        'policy_terms',
        'description',
        'heading_title'
       
        
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
