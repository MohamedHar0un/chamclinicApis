<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeethservicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('teethservices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('teeth_service_name');
            $table->string('teeth_service_description');
            $table->string('teeth_service_category');
            $table->string('teeth_service_image');
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
        Schema::drop('teethservices');
    }
}
