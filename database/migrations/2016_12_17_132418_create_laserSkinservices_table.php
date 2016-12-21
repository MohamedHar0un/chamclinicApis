<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaserSkinservicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('laserskinservices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('service_name');
            $table->string('service_description');
            $table->string('service_category');
            $table->string('service_image');
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
        Schema::drop('laserskinservices');
    }
}
