<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItems extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_items')->insert(array(
            0 => array(
                "order_id" => 1,
                "product_id" => 1,
                "quantity" => 9
            ),
            1 => array(
                "order_id" => 2,
                "product_id" => 2,
                "quantity" => 2
            ),
            2 => array(
                "order_id" => 3,
                "product_id" => 3,
                "quantity" => 5
            ),
            3 => array(
                "order_id" => 4,
                "product_id" => 4,
                "quantity" => 2
            ),
            4 => array(
                "order_id" => 5,
                "product_id" => 5,
                "quantity" => 8
            ),
            5 => array(
                "order_id" => 6,
                "product_id" => 6,
                "quantity" => 2
            ),
            6 => array(
                "order_id" => 7,
                "product_id" => 7,
                "quantity" => 8
            ),
            7 => array(
                "order_id" => 8,
                "product_id" => 8,
                "quantity" => 10
            ),
            8 => array(
                "order_id" => 9,
                "product_id" => 9,
                "quantity" => 3
            ),
            9 => array(
                "order_id" => 10,
                "product_id" => 10,
                "quantity" => 4
            )
        ));
    }
}
