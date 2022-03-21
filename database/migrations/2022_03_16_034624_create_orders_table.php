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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('order_cost');
            $table->bigInteger('order_id');
            $table->string('academic_level')->nullable();
            $table->string('urgency')->nullable();
            $table->string('subject')->nullable();
            $table->string('paper_type')->nullable();
            $table->integer('number_pages')->nullable();
            $table->string('plagiarism_report')->nullable();
            $table->string('copies_sources')->nullable();
            $table->string('page_summary')->nullable();
            $table->string('paper_title')->nullable();
            $table->string('language_style')->nullable();
            $table->string('paper_style')->nullable();
            $table->string('number_sources')->nullable();
            $table->text('paper_details')->nullable();
            $table->string('paper_file')->nullable();
            $table->boolean('order_status')->default(false);
            $table->boolean('payment_status')->default(false);
            $table->string('terms')->default(false);
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users')
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
        Schema::dropIfExists('orders');
    }
};
