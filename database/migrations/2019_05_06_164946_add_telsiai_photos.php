<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTelsiaiPhotos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('telsiai_photos', function (Blueprint $table) {

           $table->engine = 'InnoDB';
           $table->increments('id')->unsigned();
           $table->string('photo');
           $table->integer('telsiai_id')->unsigned()->nullable();
           $table->foreign('telsiai_id')->references('id')->on('telsiai')->onDelete('cascade');
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
         Schema::dropIfExists('telsiai_photos');
     }
}
