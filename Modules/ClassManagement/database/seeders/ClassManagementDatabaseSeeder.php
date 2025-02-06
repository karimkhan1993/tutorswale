<?php

namespace Modules\ClassManagement\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Models\ClassManagement;

class ClassManagementDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        /*
         * ClassManagements Seed
         * ------------------
         */

        // DB::table('classmanagements')->truncate();
        // echo "Truncate: classmanagements \n";

        ClassManagement::factory()->count(20)->create();
        $rows = ClassManagement::all();
        echo " Insert: classmanagements \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
