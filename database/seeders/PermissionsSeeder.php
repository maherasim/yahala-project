<?php 
namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        $jsonFile = database_path('data/permissions.json');

        // Read the JSON file
        if (!file_exists($jsonFile)) {
            $this->command->error("JSON file not found at {$jsonFile}");
            return;
        }

        $jsonData = file_get_contents($jsonFile);

        // Decode JSON into an array
        $permissions = json_decode($jsonData, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            $this->command->error('Invalid JSON format.');
            return;
        }

        // Retrieve existing permissions to avoid duplicates
        $existingPermissions = DB::connection('mongodb')->collection('permissions')
                                  ->get(['name', 'guard_name'])
                                  ->keyBy(function ($permission) {
                                      return $permission['name'] . $permission['guard_name'];
                                  })
                                  ->toArray();

        // Filter out permissions that already exist in the database
        $permissionsToInsert = array_filter($permissions, function ($permission) use ($existingPermissions) {
            return !isset($existingPermissions[$permission['name'] . $permission['guard_name']]);
        });

        // Ensure $permissionsToInsert is a non-empty indexed array
        $permissionsToInsert = array_values($permissionsToInsert); // Reindex the array

        // Insert or update the filtered permissions
        if (!empty($permissionsToInsert)) {
            foreach ($permissionsToInsert as $permission) {
                // Use update() with upsert to avoid the '_id' modification error
                DB::connection('mongodb')->collection('permissions')->update(
                    ['name' => $permission['name'], 'guard_name' => $permission['guard_name']],  // Unique fields
                    ['$set' => $permission],  // Data to insert or update
                    ['upsert' => true]  // Perform upsert (insert if not found)
                );
            }
            $this->command->info('Permissions data seeded successfully.');
        } else {
            $this->command->info('No new permissions to insert (all are duplicates).');
        }
    }
}



?>