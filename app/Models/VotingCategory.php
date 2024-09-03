<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
// use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VotingCategory extends Model
{
    // use HasFactory , LogsActivity;
    use HasFactory;
    protected $fillable=[
        'name'
    ];
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

}
