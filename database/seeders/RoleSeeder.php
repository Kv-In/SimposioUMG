<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::transaction(function () {
            // Crear roles si no existen
            $role1 = Role::firstOrCreate(['name' => 'Admin'], ['guard_name' => 'web']);
            $role2 = Role::firstOrCreate(['name' => 'Colaborador'], ['guard_name' => 'web']);
            $role3 = Role::firstOrCreate(['name' => 'User'], ['guard_name' => 'web']);

            // Crear permisos y sincronizarlos con roles
            $permissions = [
                'admin.home' => [$role1],
                'users.index' => [$role1],
                'users.update' => [$role1],
                'users.edit' => [$role1],
                'table-productos.index' => [$role1, $role2],
                'table-productos.create' => [$role1, $role2],
                'table-productos.edit' => [$role1, $role2],
                'table-productos.destroy' => [$role1, $role2],
                'table-organizadores.index' => [$role1, $role2],
                'table-organizadores.create' => [$role1, $role2],
                'table-organizadores.edit' => [$role1, $role2],
                'table-organizadores.destroy' => [$role1, $role2],
                'table-expositores.index' => [$role1, $role2],
                'table-expositores.create' => [$role1, $role2],
                'table-expositores.edit' => [$role1, $role2],
                'table-expositores.destroy' => [$role1, $role2],
            ];

            foreach ($permissions as $permission => $roles) {
                Permission::firstOrCreate(['name' => $permission])->syncRoles($roles);
            }
        });







    }
}
