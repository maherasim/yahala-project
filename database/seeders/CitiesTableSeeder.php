<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use MongoDB\BSON\UTCDateTime;

class CitiesTableSeeder extends Seeder
{
    public function run()
    {
        // Path to the JSON file
        $jsonFile = database_path('data/city.json');

        // Decode the JSON data
        $jsonData = json_decode(file_get_contents($jsonFile), true);

        foreach ($jsonData as $city) {
            City::updateOrCreate(
                ['_id' => $city['_id']['$oid']], // Check by MongoDB ObjectId
                [
                    'cityid' => $city['cityid'],
                    'name' => $city['name'],
                    'state_id' => $city['state_id'],
                    'country_id' => $city['country_id'],
                    'updated_at' => new UTCDateTime(strtotime($city['updated_at']['$date']) * 1000),
                    'created_at' => new UTCDateTime(strtotime($city['created_at']['$date']) * 1000),
                ]
            );
        }
    }
}
