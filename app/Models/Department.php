<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'departments';

    protected $fillable = [
        'name', 'thumbnail_path', 'parent_id'
    ];


    public function departments()
    {
        return $this->hasMany(Department::class, 'parent_id');
    }

    public function department()
    {
        return $this->hasOne(Department::class,'_id','parent_id');
    }

}
