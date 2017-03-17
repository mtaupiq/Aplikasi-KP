<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLogbookPerbaikan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logbook_perbaikan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_logbook')->unsigned();
            $table->integer('id_perbaikan')->unsigned();

            $table->foreign('id_logbook')->references('id')->on('logbook')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_perbaikan')->references('id')->on('perbaikan')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logbook_perbaikan');
    }
}
