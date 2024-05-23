<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Verificar y crear el rol Admin si no existe
        $role1 = Role::create(['name' => 'Admin']);
        // Verificar y crear el rol Users si no existe
        $role2 = Role::create(['name' => 'Colavorador']);

        $role3 = Role::create(['name' => 'Use']);
        

        Permission::Create(['name' => 'users.index'])->syncRoles([$role1]);
        Permission::Create(['name' => 'users.update'])->syncRoles([$role1]);
        Permission::Create(['name' => 'users.edit'])->syncRoles([$role1]);

        Permission::Create(['name' => 'table-productos.index'])->syncRoles([$role1, $role2]);
        Permission::Create(['name' => 'table-productos.create'])->syncRoles([$role1, $role2]);
        Permission::Create(['name' => 'table-productos.edit'])->syncRoles([$role1, $role2]);
        Permission::Create(['name' => 'table-productos.destroy'])->syncRoles([$role1, $role2]);

        Permission::Create(['name' => 'table-organizadores.index'])->syncRoles([$role1, $role2]);
        Permission::Create(['name' => 'table-organizadores.create'])->syncRoles([$role1, $role2]);
        Permission::Create(['name' => 'table-organizadores.edit'])->syncRoles([$role1, $role2]);
        Permission::Create(['name' => 'table-organizadores.destroy'])->syncRoles([$role1, $role2]);

        Permission::Create(['name' => 'table-expositores.index'])->syncRoles([$role1, $role2]);
        Permission::Create(['name' => 'table-expositores.create'])->syncRoles([$role1, $role2]);
        Permission::Create(['name' => 'table-expositores.edit'])->syncRoles([$role1, $role2]);
        Permission::Create(['name' => 'table-expositores.destroy'])->syncRoles([$role1, $role2]);
    }
    
}
