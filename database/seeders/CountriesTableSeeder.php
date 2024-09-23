<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use MongoDB\BSON\UTCDateTime;

class CountriesTableSeeder extends Seeder
{
    public function run()
    {
        // Path to the JSON file
        $jsonFile = database_path('data/countries.json');

        // Decode the JSON data
        $jsonData = json_decode(file_get_contents($jsonFile), true);

        foreach ($jsonData as $country) {
            Country::updateOrCreate(
                ['_id' => $country['_id']['$oid']], // Check by MongoDB ObjectId
                [
                    'conid' => $country['conid'],
                    'name' => $country['name'],
                    'dialcode' => $country['dialcode'],
                    'iso3' => $country['iso3'],
                    'iso2' => $country['iso2'],
                    'capital' => $country['capital'],
                    'currency' => $country['currency'],
                    'currency_name' => $country['currency_name'],
                    'currency_symbol' => $country['currency_symbol'],
                    'region' => $country['region'],
                    'updated_at' => new UTCDateTime(strtotime($country['updated_at']['$date']) * 1000), // Convert to MongoDB UTCDateTime
                    'created_at' => new UTCDateTime(strtotime($country['created_at']['$date']) * 1000), // Convert to MongoDB UTCDateTime
                ]
            );
        }
    }
}
