<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        //roles y permisos
        $this->call(RolaSeeder::class);
        //usuarios base
        $this->call(UserSeeder::class);

    }
}
