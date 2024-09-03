<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TaskModel extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = [
        'title',
        'user_id',
        'task_start',
        'task_deliver',
        'status',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }


    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
