<?php

namespace Modules\TutorHiring\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Models\TutorHiring;

class TutorHiringDatabaseSeeder extends Seeder
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
         * TutorHirings Seed
         * ------------------
         */

        // DB::table('tutorhirings')->truncate();
        // echo "Truncate: tutorhirings \n";

        TutorHiring::factory()->count(20)->create();
        $rows = TutorHiring::all();
        echo " Insert: tutorhirings \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
