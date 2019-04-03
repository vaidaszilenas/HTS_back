<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHtsStructures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hts_structures_utena', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pond');
            $table->text('small-describe');
            $table->text('describe');
            $table->string('file_name');
            $table->string('district');
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
        Schema::dropIfExists('hts_structures_utena');
    }
}
