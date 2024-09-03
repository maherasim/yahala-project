<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prefix extends Model
{
    use HasFactory , LogsActivity;

    protected $fillable=[
        'prefix_for',
        'prefix_id'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    // protected $casts = [
    //     'options' => 'array',
    // ];
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }


}
