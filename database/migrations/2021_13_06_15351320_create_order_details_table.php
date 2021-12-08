<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id')->nullable()->unsigned();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->unsignedBigInteger('order_id')->nullable()->unsigned();
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->unsignedBigInteger('discount_id')->nullable()->unsigned();
            $table->foreign('discount_id')->references('id')->on('discounts')->onDelete('cascade');
            $table->unsignedBigInteger('color_id')->nullable()->unsigned();
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade'); 
            $table->unsignedBigInteger('size_id')->nullable()->unsigned();
            $table->foreign('size_id')->references('id')->on('sizes')->onDelete('cascade'); 
            $table->unsignedBigInteger('weight_id')->nullable()->unsigned();
            $table->foreign('weight_id')->references('id')->on('weights')->onDelete('cascade');

            $table->decimal('tax', 10, 2)->default(0.0);
            $table->decimal('discount_amount', 10, 2)->default(0.0);
            $table->decimal('total', 10, 2)->default(0.0);
            $table->decimal('price', 10, 2)->default(0.0);
            $table->integer('quantity');
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
        Schema::dropIfExists('order_details');
    }
}
