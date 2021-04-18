<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOsobaOsobniUdaje extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('osoba_osobni_udaje', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('titul', 20);
            $table->string('name',255);
            $table->string('surename',255);
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('osoba_osobni_udaje');
    }
}
