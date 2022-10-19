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
        Schema::create('sale', function (Blueprint $table) {
            $table->increments('id', true);    
            $table->dateTime('sale_date');
            $table->integer('order_id')->unsigned();
            $table->integer('customer_id')->unsigned();            
            $table->foreign('order_id')->references('id')->on('order');
            $table->foreign('customer_id')->references('id')->on('order');
            $table->softDeletes();
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
        Schema::dropIfExists('sale');
    }
};
