<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable()->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('status')->nullable();
            $table->decimal('sub_total', 10, 2)->default(0.0);
            $table->decimal('total', 10, 2)->default(0.0);
            $table->decimal('promo', 10, 2)->default(0.0);
            $table->decimal('shipping', 10, 2)->default(0.0);
            $table->decimal('discount', 10, 2)->default(0.0);
            $table->decimal('tax', 10, 2)->default(0.0);
            $table->unsignedBigInteger('payment_type')->nullable()->unsigned();
            $table->foreign('payment_type')->references('id')->on('payment_types')->onDelete('cascade');

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
        Schema::dropIfExists('orders');
    }
}
