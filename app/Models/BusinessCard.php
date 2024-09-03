<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
 
use Jenssegers\Mongodb\Eloquent\Model;

class BusinessCard extends Model
{
    use HasFactory;
    protected $fillable = [
        'card_name',
        'card_image'
    ];
}
