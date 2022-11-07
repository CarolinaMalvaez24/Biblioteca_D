<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name'=>'admin']);
        $editor = Role::create(['name'=>'editor']);
        $usuario = Role::create(['name'=>'usuario']);

        Permission::create(['name'=>'dashboard'])->syncRoles([$admin,$editor,$usuario]);
        Permission::create(['name'=>'autores.index'])->syncRoles([$admin,$editor,$usuario]);
        Permission::create(['name'=>'autores.create'])->syncRoles([$admin]);
        Permission::create(['name'=>'autores.store'])->syncRoles([$admin]);
        Permission::create(['name'=>'autores.show'])->syncRoles([$admin,$usuario]);
        Permission::create(['name'=>'autores.edit'])->syncRoles([$admin]);
        Permission::create(['name'=>'autores.update'])->syncRoles([$admin]);
        Permission::create(['name'=>'autores.destroy'])->syncRoles([$admin]);


    }
}