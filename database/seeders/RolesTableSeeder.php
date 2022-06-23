<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role = new Role();
        $role->name = "Administrador";
        $role->description = "Todas as permissões e funcinalidades disponiveis";
        $role->slug = "admin";
        $role->save();

        $role = new Role();
        $role->name = "Moderador";
        $role->description = "Gestor de todo o portal";
        $role->slug = "mod";
        $role->save();

        $role = new Role();
        $role->name = "Utilizador";
        $role->description = "Utilizador comum com acesso ao portal";
        $role->slug = "utilizador";
        $role->save();
    }
}
