<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaymentOffice extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = [
        'office_name',
        'name',
        'last_name',
        'email',
        'phone',
        'country',
        'city',
        'address',
        'image_path',
        'status'
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

}
