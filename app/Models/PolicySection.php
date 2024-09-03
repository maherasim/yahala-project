<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class PolicySection extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'policy_sections';
}
