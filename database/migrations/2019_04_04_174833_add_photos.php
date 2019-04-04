<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPhotos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('photos', function (Blueprint $table) {
          $table->increments('id');
          $table->string('photo');
          $table->integer('hts_structure_id')->unsigned();
          $table->foreign('hts_structure_id')->references('id')->on('hts_structures_utena');
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
        Schema::dropIfExists('photos');
    }
}
