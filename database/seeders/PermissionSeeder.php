<?php

namespace Database\Seeders;

use App\Enums\PermissionEnum;
use App\Enums\RoleEnum;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $permissions = [];
        foreach (PermissionEnum::toLabels() as $permission) {
            $permissions[] = Permission::create(['name' => $permission]);
        }

        $admin = Role::findByName('admin');

        $admin->syncPermissions($permissions); //todo check
    }
}
