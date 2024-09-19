<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Language extends Model
{
    use HasFactory, LogsActivity;

    protected $connection = 'mongodb';
    protected $collection = 'languages';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    public function translations ()
    {
        return $this->hasMany(Translation::class, 'language_id');
    }

}
