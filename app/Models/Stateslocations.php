<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Eloquent;

class Stateslocations extends Model
{
    protected $connection = 'mongodb';
    protected $table = 'states';

    public function country() {
        
        return $this->belongsTo('App\Models\Countrylocations', 'country_id', 'conid');
    }

    public function cities()
    {
        return $this->hasMany(Citylocations::class, 'stid', 'state_id');
    }
        

}