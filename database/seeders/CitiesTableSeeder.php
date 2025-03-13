<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use MongoDB\BSON\UTCDateTime;

class CitiesTableSeeder extends Seeder
{
    public function run()
    {
        // Read JSON file
        $jsonFile = database_path('data/cities.json');
        $jsonData = json_decode(file_get_contents($jsonFile), true);

        foreach ($jsonData as $city) {
            // Ensure 'updated_at' and 'created_at' are properly formatted
            $updatedAt = isset($city['updated_at']['$date']) ? strtotime($city['updated_at']['$date']) * 1000 : null;
            $createdAt = isset($city['created_at']['$date']) ? strtotime($city['created_at']['$date']) * 1000 : null;

            City::updateOrCreate(
                ['_id' => $city['_id']['$oid']], // Check by MongoDB ObjectId
                [
                    'cityid' => $city['cityid'],
                    'name' => $city['name'],
                    'region_id' => $city['state_id'],
                    'country_id' => $city['country_id'],
                    'updated_at' => $updatedAt ? new UTCDateTime($updatedAt) : null,
                    'created_at' => $createdAt ? new UTCDateTime($createdAt) : null,
                ]
            );
        }
    }
}
