<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titile');
            $table->text('description');
            $table->float('price', 6, 2);
            $table->integer('quantity');
            $table->integer('category')->unsigned();
            $table->integer('manufacturer')->unsigned();
            $table->timestamps();
            $table->foreign('category')->references('id')->on('categories');
            $table->foreign('manufacturer')->references('id')->on('manufacturers');
        });
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
