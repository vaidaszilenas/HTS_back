<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKlaipedaPhotos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('klaipeda_photos', function (Blueprint $table) {

           $table->engine = 'InnoDB';
           $table->increments('id')->unsigned();
           $table->string('photo');
           $table->integer('klaipeda_id')->unsigned()->nullable();
           $table->foreign('klaipeda_id')->references('id')->on('klaipeda')->onDelete('cascade');
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
         Schema::dropIfExists('klaipeda_photos');
     }
}
