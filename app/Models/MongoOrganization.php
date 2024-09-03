<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class MongoOrganization extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'mongo_organizations';

    public $timestamps = true;

    /**
     * Get the donations for the organization.
     */
    public function donations() {
        return $this->hasMany(MongoDonation::class, 'organization_id', '_id');
    }
}
