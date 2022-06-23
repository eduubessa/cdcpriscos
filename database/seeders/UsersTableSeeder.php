<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User();
        $user->role = 1;
        $user->name = "Administrador";
        $user->username = "admin";
        $user->email = "admin@cdcpriscos.dev";
        $user->password = Hash::make("admin123");
        $user->save();

        $user = new User();
        $user->role = 2;
        $user->name = "Moderador";
        $user->username = "moderador";
        $user->email = "mod@cdcpriscos.dev";
        $user->password = Hash::make("moderador123");
        $user->save();

        $user = new User();
        $user->role = 3;
        $user->name = "Desenvolvedor";
        $user->username = "dev";
        $user->email = "dev@cdcpriscos.dev";
        $user->password = Hash::make('dev123');
        $user->save();
    }
}
