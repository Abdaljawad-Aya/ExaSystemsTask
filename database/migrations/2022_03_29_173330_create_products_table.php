<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // if (!Schema::hasTable('products')) {
            Schema::create('products', function (Blueprint $table) {
                $table->id('id');
                $table->string('name');
                $table->string('products_status');
                $table->float('price');
                $table->unsignedBigInteger('merchant_id');
                $table->foreign('merchant_id')
                    ->references('id')
                    ->on('merchants')
                    ->onDelete('cascade');
                $table->dateTime('start');
            });
        // }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
