<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class RealSong extends Model
{
    use HasFactory , LogsActivity;

    protected $connection = 'mongodb';

    protected $collection = 'realsong';

    protected $fillable = [ 'fileName',
    'filePath',
    'fileSize',
    'ringType'];


    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

}
