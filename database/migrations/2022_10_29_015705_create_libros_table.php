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
            $table->string('titulo',100)->nullable();
            $table->integer('anio')->nullable();
            $table->text('descripcion')->nullable();
            $table->unsignedBigInteger('editoriales_id')->nullable();
            $table->foreign('editoriales_id')->references('id')->on('editoriales')->onDelete('cascade')->onUpdate('cascade');
            //existancias->10
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
        Schema::dropIfExists('libros');
    }
};
