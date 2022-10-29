<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asigna_autores', function (Blueprint $table) {
            $table->increments('id_asignaAutor');
            $table->foreignId('id_libro')->constrained('libros');
            $table->foreignId('id_autor')->constrained('autores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asigna_autores');
    }
};
