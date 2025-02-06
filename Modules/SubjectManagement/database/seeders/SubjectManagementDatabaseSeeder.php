<?php

namespace Modules\SubjectManagement\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Models\SubjectManagement;

class SubjectManagementDatabaseSeeder extends Seeder
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
         * SubjectManagements Seed
         * ------------------
         */

        // DB::table('subjectmanagements')->truncate();
        // echo "Truncate: subjectmanagements \n";

        SubjectManagement::factory()->count(20)->create();
        $rows = SubjectManagement::all();
        echo " Insert: subjectmanagements \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
