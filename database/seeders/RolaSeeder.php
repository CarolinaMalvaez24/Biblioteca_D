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
        $role1= Role::create(['name'=>'Admin']);
        $role2= Role::create(['name'=>'consultor']);

        Permission::create(['name'=>'asigna_autores.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'asigna_autores.create'])->syncRoles([$role1]);
        Permission::create(['name'=>'asigna_autores.edit'])->syncRoles([$role1]);
        Permission::create(['name'=>'asigna_autores.destroy'])->syncRoles([$role1]);
    }
}
