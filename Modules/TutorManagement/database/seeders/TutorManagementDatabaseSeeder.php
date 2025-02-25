<?php

namespace Modules\TutorManagement\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Models\TutorManagement;

class TutorManagementDatabaseSeeder extends Seeder
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
         * TutorManagements Seed
         * ------------------
         */

        // DB::table('tutormanagements')->truncate();
        // echo "Truncate: tutormanagements \n";

        TutorManagement::factory()->count(20)->create();
        $rows = TutorManagement::all();
        echo " Insert: tutormanagements \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
