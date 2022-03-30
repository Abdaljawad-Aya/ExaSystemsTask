<?php

namespace Database\Seeders;
use Carbon\Carbon;
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
                'full_name' => 'John',
                'slug' => 'john',
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            1 => array (
                'full_name' => 'Sam',
                'slug' => 'sam',
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
        ));
    }
}
