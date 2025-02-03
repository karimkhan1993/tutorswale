<?php

namespace Modules\BannerManagement\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Models\BannerManagement;

class BannerManagementDatabaseSeeder extends Seeder
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
         * BannerManagements Seed
         * ------------------
         */

        // DB::table('bannermanagements')->truncate();
        // echo "Truncate: bannermanagements \n";

        BannerManagement::factory()->count(20)->create();
        $rows = BannerManagement::all();
        echo " Insert: bannermanagements \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
