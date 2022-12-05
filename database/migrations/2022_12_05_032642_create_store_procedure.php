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
        $store_procedure="DROP PROCEDURE IF EXISTS `Cargar_Autor`;
            CREATE PROCEDURE `Cargar_Autor`(pnombre_autor varchar(100))
                BEGIN
                    INSERT INTO autores(nombre_autor,created_at,updated_at) VALUES (pnombre_autor,now(),now());
                END;";

                \DB::unprepared($store_procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_procedure');
    }
};
