<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class ChannelPolicy extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'policy_descriptions';
}
