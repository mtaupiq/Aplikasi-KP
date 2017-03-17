<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLogbookPetugas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logbook_petugas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_logbook')->unsigned();
            $table->integer('id_petugas')->unsigned();

            $table->foreign('id_logbook')->references('id')->on('logbook')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_petugas')->references('id')->on('petugas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logbook_petugas');
    }
}
