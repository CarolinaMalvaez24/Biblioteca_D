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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',30)->nullable();
            $table->string('apellidoPaterno',30)->nullable();
            $table->string('apellidoMaterno',30)->nullable();
            $table->string('nombreUsuario',20)->nullable();
            $table->string('correo',100)->nullable();
            $table->string('contrasena',100)->nullable();
            $table->foreignId('id_tipos')->constrained('tipos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
