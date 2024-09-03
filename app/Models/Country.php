<?php
/*
namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;



//use Jenssegers\Mongodb\Eloquent\Model;
//use Eloquent;
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\Traits\LogsActivity;
use Jenssegers\Mongodb\Eloquent\Model;
use Eloquent;

class Country extends Model
{
    protected $connection = 'mongodb';
    protected $table = 'countries_orig';

    use HasFactory;

    protected $fillable = [
      'name',
      'code',
      'flag_path',
      'image_path',
      'icon_code',
      'capital_id',
      'language_id',
      'status',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    public function regions()
    {
        return $this->hasMany(Region::class, 'country_id', 'id');
    }

    public function cities()
    {
        return $this->hasMany(City::class, 'country_id', 'id');
    }

    public function capital()
    {
        return $this->hasOne(City::class, 'capital_id', 'id');
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
