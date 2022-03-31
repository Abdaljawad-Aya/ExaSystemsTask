<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(array(
            0 => array(
                "name" => "Dalton Williams",
                "products_status" => "active",
                "price" => "29.15",
                "merchant_id" => 1,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            1 => array(
                "name" => "Ray Bolton",
                "products_status" => "drafted",
                "price" => "99.71",
                "merchant_id" => 2,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            2 => array(
                "name" => "Cameran Fox",
                "products_status" => "archived",
                "price" => "82.29",
                "merchant_id" => 3,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            3 => array(
                "name" => "Amos Roach",
                "products_status" => "active",
                "price" => "98.05",
                "merchant_id" => 4,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            4 => array(
                "name" => "Melissa Riggs",
                "products_status" => "archived",
                "price" => "51.93",
                "merchant_id" => 5,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            5 => array(
                "name" => "Quinn Knapp",
                "products_status" => "drafted",
                "price" => "94.14",
                "merchant_id" => 6,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            6 => array(

                "name" => "Tamara Malone",
                "products_status" => "drafted",
                "price" => "27.48",
                "merchant_id" => 7,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            7 => array(
                "name" => "Quinn Barton",
                "products_status" => "active",
                "price" => "38.25",
                "merchant_id" => 8,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            8 => array(
                "name" => "Robert Willis",
                "products_status" => "archived",
                "price" => "93.89",
                "merchant_id" => 9,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            9 => array(
                "name" => "Neil Holt",
                "products_status" => "archived,",
                "price" => "95.24",
                "merchant_id" => 10,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
        ));
    }
}
