<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class RealReason extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','reason'
    ];
}
