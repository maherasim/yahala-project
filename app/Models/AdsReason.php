<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class AdsReason extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','reason'
    ];
}
