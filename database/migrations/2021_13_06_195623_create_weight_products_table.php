<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeightProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weight_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('weight_id')->unsigned();

            $table->foreign('weight_id')->references('id')->on('weights')->onDelete('cascade');
            $table->unsignedBigInteger('product_id')->unsigned();

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weight_products');
    }
}
