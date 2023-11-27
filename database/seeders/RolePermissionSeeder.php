<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create(['name' => 'admin']);
        $role = Role::create(['name' => 'shop assistant']);
        $permissions = [
            Permission::create(['name' => 'product:create']),
            Permission::create(['name' => 'product:update']),
            Permission::create(['name' => 'product:delete']),
        ];
        $role->syncPermissions($permissions);
        $role = Role::create(['name' => 'helper']);
        $permissions = [
            Permission::create(['name' => 'user:view']),
        ];
        $role->syncPermissions($permissions);
        $role = Role::create(['name' => 'customer']);
        $permissions = [
            Permission::create(['name' => 'order:viewAny']),
            Permission::create(['name' => 'order:view']),
            Permission::create(['name' => 'order:create']),
            Permission::create(['name' => 'order:delete']),
            Permission::create(['name' => 'review:create']),
            Permission::create(['name' => 'review:delete']),
        ];
        $role->syncPermissions($permissions);
    }
}
