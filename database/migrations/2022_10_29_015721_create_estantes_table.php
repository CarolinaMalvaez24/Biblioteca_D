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
        Schema::create('estantes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ejemplares_id');
            $table->unsignedBigInteger('users_id');

            $table->foreign('ejemplares_id')->references('id')->on('ejemplares')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');


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
        Schema::dropIfExists('estantes');
    }
};
