<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class FanPageType extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->hasMany(FanPage::class, 'category_id', 'id');
    }
}
