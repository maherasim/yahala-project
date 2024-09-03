<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;


class StartPage extends Model
{
    protected $connection = 'mongodb';
     
    use HasFactory;

    protected $fillable = [
        // 'language_id',
        'language',
        'our_policy',
        'login',
        'sign_up',
        'dear_guest ',
        'create_account '
    ];


    
}
