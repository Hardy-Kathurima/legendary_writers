<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('braintrees', function (Blueprint $table) {
            $table->id();
            $table->string("payment_id");
            $table->unsignedBigInteger('order_id');
            $table->string("amount");
            $table->string("currency");
            $table->string("order_name");
            $table->string("payment_status");
            $table->string("card_type");
            $table->string("customer_location");
            $table->timestamps();

            $table->foreign('order_id')->references('id')->on('orders')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('braintrees');
    }
};
