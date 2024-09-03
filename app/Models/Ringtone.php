<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ringtone extends Model
{
    use HasFactory , LogsActivity;

    protected $connection = 'mongodb';

    protected $collection = 'ringtones';

    protected $fillable = [
        'fileName',
        'filePath',
        'fileSize',
        'ringType'
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

}
