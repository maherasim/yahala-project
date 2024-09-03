<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Eloquent;

class Citylocations extends Model
{
    protected $connection = 'mongodb';
    protected $table = 'cities';

    public function country() {
        return $this->belongsTo('App\Models\Countrylocations', 'country_id', 'conid');
    }
     

    public function state()
    {
        return $this->belongsTo('App\Models\Stateslocations', 'state_id', 'stid');
    }
        
}