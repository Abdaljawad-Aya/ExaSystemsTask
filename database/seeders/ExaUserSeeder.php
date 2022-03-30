<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExaUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('user')->truncate();
        DB::table('user')->insert(array(
            0 => array (
                'id' => 1,
                'full_name' => 'John',
                'slug' => 'john'
            )
        ));
    }
}
