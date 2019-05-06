<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUtenaPhotos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('utena_photos', function (Blueprint $table) {

           $table->engine = 'InnoDB';
           $table->increments('id')->unsigned();
           $table->string('photo');
           $table->integer('utena_id')->unsigned()->nullable();
           $table->foreign('utena_id')->references('id')->on('utena')->onDelete('cascade');
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
         Schema::dropIfExists('utena_photos');
     }
}
