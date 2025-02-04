<?php

namespace Modules\ExclusiveClass\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Models\ExclusiveClass;

class ExclusiveClassDatabaseSeeder extends Seeder
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
         * ExclusiveClasses Seed
         * ------------------
         */

        // DB::table('exclusiveclasses')->truncate();
        // echo "Truncate: exclusiveclasses \n";

        ExclusiveClass::factory()->count(20)->create();
        $rows = ExclusiveClass::all();
        echo " Insert: exclusiveclasses \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
