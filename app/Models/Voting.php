<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Voting extends Model
{
    use HasFactory , LogsActivity;

    protected $fillable=[
        'name',
        'category_id',
        'description',
        'image',
        'options'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'options' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($history) {
            $lastHistory = self::orderBy('id', 'desc')->first();
            $lastId = $lastHistory ? intval(substr($lastHistory->custom_id, 2)) : 99;
            $history->custom_id = 'VT-' . ($lastId + 1);
        });
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }
    public function voting_category(){
        return $this->belongsTo(VotingCategory::class , 'category_id');
    }

    public function gallery(){
        return $this->hasMany(PostGallery::class,'vote_id','id');
    }

}
