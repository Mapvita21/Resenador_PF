<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoritasTable extends Migration
{
    /**
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favoritas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('pelicula_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('pelicula_id')->references('id')->on('peliculas');

        });
    }

    /**
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favoritas');
    }
}
