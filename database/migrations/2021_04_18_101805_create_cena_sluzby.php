<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCenaSluzby extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cena_sluzby', function (Blueprint $table) {
            $table->integer('sluzby_id')->primary();
            $table->decimal('cena', 6,2);
            $table->decimal('cena_doprava', 6,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cena_sluzby');
    }
}
