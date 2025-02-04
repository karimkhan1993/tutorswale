<?php

namespace Modules\AboutU\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Models\AboutU;

class AboutUDatabaseSeeder extends Seeder
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
         * AboutUs Seed
         * ------------------
         */

        // DB::table('aboutus')->truncate();
        // echo "Truncate: aboutus \n";

        AboutU::factory()->count(20)->create();
        $rows = AboutU::all();
        echo " Insert: aboutus \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
