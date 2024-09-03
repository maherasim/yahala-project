<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class MongoDonation extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'mongo_donations';

    public $timestamps = true;

    /**
     * Get the organization that owns the donation.
     */
    public function organization() {
        return $this->belongsTo(MongoOrganization::class, 'organization_id', '_id');
    }
}
