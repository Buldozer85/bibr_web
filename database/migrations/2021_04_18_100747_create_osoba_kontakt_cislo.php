<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOsobaKontaktCislo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('osoba_kontakt_cislo', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('telefonni_cislo');
            $table->integer('osoba_osobni_udaje_id');
            $table->foreign('osoba_osobni_udaje_id')->references('ID')->on('osoba_osobni_udaje');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('osoba_kontakt_cislo');
    }
}
