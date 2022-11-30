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
        Schema::create('asigna_categorias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_libro')
                ->nullable()
                ->constrained('libros')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreignId('id_categoria')
                ->nullable()
                ->constrained('categorias')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asigna_categorias');
    }
};
