<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKaunasPhotos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('kaunas_photos', function (Blueprint $table) {

           $table->engine = 'InnoDB';
           $table->increments('id')->unsigned();
           $table->string('photo');
           $table->integer('kaunas_id')->unsigned()->nullable();
           $table->foreign('kaunas_id')->references('id')->on('kaunas')->onDelete('cascade');
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
         Schema::dropIfExists('kaunas_photos');
     }
}
