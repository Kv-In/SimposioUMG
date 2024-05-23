<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Llama al RoleSeeder para asegurarse de que los roles y permisos están creados
        $this->call(RoleSeeder::class);

        // Crear el usuario admin
        $adminUser = User::create([
            'name' => 'Kevin Yovani',
            'email' => 'yovaniadmin@gmail.com',
            'password' => bcrypt('Rootyovani')
        ]);

        $adminUser = User::create([
            'name' => 'Admin',
            'email' => 'Foxadmin@gmail.com',
            'password' => bcrypt('RootAdmin1')
        ]);

        // Asignar el rol de Admin al usuario creado
        $adminUser->assignRole('Admin');

        // Crear un usuario adicional usando la fábrica
        User::factory(1)->create();
    }
}
