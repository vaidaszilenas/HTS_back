<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPanevezysPhotos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('panevezys_photos', function (Blueprint $table) {

           $table->engine = 'InnoDB';
           $table->increments('id')->unsigned();
           $table->string('photo');
           $table->integer('panevezys_id')->unsigned()->nullable();
           $table->foreign('panevezys_id')->references('id')->on('panevezys')->onDelete('cascade');
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
         Schema::dropIfExists('panevezys_photos');
     }
}
