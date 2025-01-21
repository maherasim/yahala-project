<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
// use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
// use Spatie\Permission\Models\Permission;
use Maklad\Permission\Models\Role;
use Maklad\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class PermissionsSeeder extends Seeder
 {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run()
 {
        // Path to the JSON file
        $jsonFile = database_path( 'data/permissions.json' );

        // Read the JSON file
        if ( !file_exists( $jsonFile ) ) {
            $this->command->error( "JSON file not found at {$jsonFile}" );
            return;
        }

        $jsonData = file_get_contents( $jsonFile );

        $jsonData = file_get_contents( $jsonFile );

        // Decode JSON into an array
        $permissions = json_decode( $jsonData, true );

        if ( json_last_error() !== JSON_ERROR_NONE ) {
            $this->command->error( 'Invalid JSON format.' );
            return;
        }

        DB::connection( 'mongodb' )->collection( 'permissions' )->delete();

        // Insert the data into the 'permissions' collection
        DB::connection( 'mongodb' )->collection( 'permissions' )->insert( $permissions );

        $this->command->info( 'Permissions data seeded successfully.' );
    }

}