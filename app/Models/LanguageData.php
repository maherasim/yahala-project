<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Jenssegers\Mongodb\Eloquent\HybridRelations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Language;

class LanguageData extends Model
{
    use HasFactory, HybridRelations;

    protected $connection = 'mongodb';
    protected $collection = 'language_datas';
    public $timestamps = true;

    protected $fillable = [
      'name',
      'en',
      'fr',
      'cn',
      'id',
    ];
}
