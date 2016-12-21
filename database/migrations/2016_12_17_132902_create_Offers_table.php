<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('offers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('offer_title');
            $table->string('offer_description');
            $table->string('offer_price');
            $table->string('offert_type')->unique();
            $table->timestamps();});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('offers');
    }
}
