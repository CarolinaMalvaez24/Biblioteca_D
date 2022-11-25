<?php

namespace Database\Seeders;

use App\Models\autores;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AutoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $autores=[
            "Prueba1",
            "Prueba2",
            "Prueba3"
        ];
        foreach ($autores as $autoresito){
            autores::created([
                'nombre_autor'=>$autoresito
            ]);
        }
    }
}
