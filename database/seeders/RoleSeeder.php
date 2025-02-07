<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use App\Models\Module;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\PermissionRegistrar;
use App\Enums\RoleEnum;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Define modules with actions and role assignments
        $modules = [
            'users' => [
                'actions' => [
                    'index'   => 'user.index',
                    'create'  => 'user.create',
                    'edit'    => 'user.edit',
                    'trash'   => 'user.destroy',
                    'restore' => 'user.restore',
                    'delete'  => 'user.forceDelete'
                ],
                'roles' => [
                    RoleEnum::ADMIN->value => ['index', 'create', 'edit', 'trash', 'restore', 'delete'],
                ]
            ],
            'stock_intake' => [
                'actions' => [
                    'view'      => 'stock_intake.view',
                    'record'    => 'stock_intake.record',
                    'edit'      => 'stock_intake.edit',
                    'delete'    => 'stock_intake.delete',
                ],
                'roles' => [
                    RoleEnum::ADMIN->value           => ['view', 'record', 'edit', 'delete'],
                    RoleEnum::WAREHOUSE_STAFF->value => ['view', 'record', 'edit'],
                    RoleEnum::SUPERVISOR->value      => ['view', 'edit'],
                ]
            ],
            'inventory' => [
                'actions' => [
                    'index'        => 'inventory.index',
                    'create'       => 'inventory.create',
                    'edit'         => 'inventory.edit',
                    'delete'       => 'inventory.destroy',
                    'scan_barcode' => 'inventory.scan_barcode',
                ],
                'roles' => [
                    RoleEnum::ADMIN->value           => ['index', 'create', 'edit', 'delete', 'scan_barcode'],
                    RoleEnum::WAREHOUSE_STAFF->value => ['index', 'create', 'edit', 'scan_barcode'],
                    RoleEnum::SUPERVISOR->value      => ['index', 'edit'],
                ]
            ],
            'racks' => [
                'actions' => [
                    'index'  => 'racks.index',
                    'create' => 'racks.create',
                    'edit'   => 'racks.edit',
                    'delete' => 'racks.delete',
                ],
                'roles' => [
                    RoleEnum::ADMIN->value           => ['index', 'create', 'edit', 'delete'],
                    RoleEnum::WAREHOUSE_STAFF->value => ['index', 'create', 'edit'],
                    RoleEnum::SUPERVISOR->value      => ['index', 'edit'],
                ]
            ],
            'reports' => [
                'actions' => [
                    'stock_reports' => 'reports.stock_reports',
                ],
                'roles' => [
                    RoleEnum::ADMIN->value      => ['stock_reports'],
                    RoleEnum::SUPERVISOR->value => ['stock_reports'],
                ]
            ],
            'settings' => [
                'actions' => [
                    'manage_users' => 'settings.manage_users',
                ],
                'roles' => [
                    RoleEnum::ADMIN->value => ['manage_users'],
                ]
            ],
        ];

        // Prepare permissions storage per role
        $rolePermissions = [];
        foreach (RoleEnum::cases() as $role) {
            $rolePermissions[$role->value] = [];
        }

        // Loop through each module to create/update module records, permissions, and assign them to roles
        foreach ($modules as $moduleName => $moduleData) {
            Module::updateOrCreate(['name' => $moduleName], ['actions' => $moduleData['actions']]);

            foreach ($moduleData['actions'] as $actionKey => $permissionName) {
                $permission = Permission::firstOrCreate(['name' => $permissionName]);

                if (isset($moduleData['roles'])) {
                    foreach ($moduleData['roles'] as $role => $allowedActions) {
                        if (in_array($actionKey, $allowedActions)) {
                            $rolePermissions[$role][] = $permission;
                        }
                    }
                }
            }
        }

        // Sync permissions for each role
        foreach ($rolePermissions as $role => $permissions) {
            $roleInstance = Role::firstOrCreate(['name' => $role]);
            $roleInstance->syncPermissions($permissions);
        }

        // Create Example Users for Each Role
        $users = [
            RoleEnum::ADMIN->value           => ['first_name' => 'Admin', 'last_name' => 'User', 'email' => 'admin@example.com'],
            RoleEnum::WAREHOUSE_STAFF->value => ['first_name' => 'Warehouse', 'last_name' => 'Staff', 'email' => 'warehouse@example.com'],
            RoleEnum::SUPERVISOR->value      => ['first_name' => 'Supervisor', 'last_name' => 'User', 'email' => 'supervisor@example.com'],
        ];

        foreach ($users as $role => $userData) {
            $user = User::firstOrCreate(
                ['email' => $userData['email']],
                [
                    'first_name' => $userData['first_name'],
                    'last_name'  => $userData['last_name'],
                    'password'   => Hash::make('password123')
                ]
            );

            $user->assignRole($role);
        }

        echo "✅ Roles, permissions, modules, and example users have been successfully seeded!\n";
    }
}
