<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSluzby extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sluzby', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('nazev',255);
            $table->text('popis_sluzby');
            $table->tinyInteger('jeAktivni');
            $table->integer('druhy_sluzby_id');
            $table->foreign('druhy_sluzby_id')->references('id')->on('druhy_sluzby');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_sluzby');
    }
}
