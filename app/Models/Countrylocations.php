<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Eloquent;

class Countrylocations extends Model
{
    protected $connection = 'mongodb';
    protected $table = 'countries';

    
    public function cities()
    {
        return $this->hasMany(Citylocations::class, 'country_id', 'conid');
    }

    public function states() {
        return $this->hasMany('App\Models\Stateslocations','country_id', 'conid');
    }

    /*
    public function states()
    {
        return $this->hasMany(States::class, 'country_id', 'conid');
    }
*/

}

