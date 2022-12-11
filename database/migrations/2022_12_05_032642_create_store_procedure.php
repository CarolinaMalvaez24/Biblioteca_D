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
                    INSERT INTO autores(nombre_autor,created_at,updated_at) 
                    VALUES (pnombre_autor,now(),now());
                END;";

                \DB::unprepared($store_procedure);
                

        $store_procedure1="DROP PROCEDURE IF EXISTS `Cargar_Categoria`;
            CREATE PROCEDURE `Cargar_Categoria`(ptipo_categoria varchar(50))
                BEGIN
                    INSERT INTO categorias(tipo_categoria,created_at,updated_at) 
                    VALUES (ptipo_categoria ,now(),now());
                END;";

                \DB::unprepared($store_procedure1);

        $store_procedure2="DROP PROCEDURE IF EXISTS `Cargar_Editorial`;
            CREATE PROCEDURE `Cargar_Editorial`(pnombre_editorial varchar(50))
                BEGIN
                    INSERT INTO editoriales(nombre_editorial,created_at,updated_at) 
                    VALUES (pnombre_editorial ,now(),now());
                END;";

                \DB::unprepared($store_procedure2);

        $store_procedure_libros="DROP PROCEDURE IF EXISTS `RegistraLibro`;
            CREATE PROCEDURE `RegistraLibro`(ptitulo varchar(100),panio int,pdescripcion text,peditorial varchar(50))
                 BEGIN
                DECLARE editorial BIGINT;
                    SET editorial=(SELECT editoriales.id from editoriales WHERE editoriales.nombre_editorial=peditorial);
                    INSERT INTO libros(titulo,anio,descripcion,editoriales_id,created_at, updated_at) values(ptitulo,panio,pdescripcion,editorial,now(),now());
                END;";


                \DB::unprepared($store_procedure_libros);        
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
