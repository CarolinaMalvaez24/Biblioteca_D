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
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion',100)->nullable();
            $table->integer('anio')->nullable();
            $table->foreignId('id_editoriales')->constrained('editoriales');
            $table->foreignId('id_categorias')->constrained('categorias');
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
        Schema::dropIfExists('libros');
    }
};
