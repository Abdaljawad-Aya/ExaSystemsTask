<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Merchants extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('merchants')->insert(array(
            0 => array(
                "marchant_name" => "Vietnam",
                "admin_id" => 1,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            1 => array(
                "marchant_name" => "Nigeria",
                "admin_id" => 2,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            2 => array(
                "marchant_name" => "New Zealand",
                "admin_id" => 3,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            3 => array(
                "marchant_name" => "Chile",
                "admin_id" => 4,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            4 => array(
                "marchant_name" => "Australia",
                "admin_id" => 5,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            5 => array(
                "marchant_name" => "Russian Federation",
                "admin_id" => 6,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            6 => array(
                "marchant_name" => "Indonesia",
                "admin_id" => 7,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            7 => array(
                "marchant_name" => "Nigeria",
                "admin_id" => 8,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            8 => array(

                "marchant_name" => "Peru",
                "admin_id" => 9,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            9 => array(

                "marchant_name" => "Belgium",
                "admin_id" => 10,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
        ));
    }
}
