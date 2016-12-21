<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('gallery', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gallery_title');
            $table->string('gallery_type');
            $table->string('gallery_description');
            $table->timestamps();
        });
        Schema::create('gallery_image', function (Blueprint $table) {
            $table->integer('image_id')->unsigned();
            $table->integer('gallery_id')->unsigned();
            $table->foreign('image_id')->references('id')->on('images')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('gallery_id')->references('id')->on('gallery')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['image_id', 'gallery_id']);
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('gallery');
        Schema::drop('gallery_image');
    }
}
