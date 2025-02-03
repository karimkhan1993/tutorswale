<?php

namespace Modules\FAQ\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Models\FAQ;

class FAQDatabaseSeeder extends Seeder
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
         * FAQS Seed
         * ------------------
         */

        // DB::table('faqs')->truncate();
        // echo "Truncate: faqs \n";

        FAQ::factory()->count(20)->create();
        $rows = FAQ::all();
        echo " Insert: faqs \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
