<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\PermissionRegistrar;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Define modules and permissions
        $modules = [
            'inventory' => ['index', 'create', 'edit', 'delete', 'scan_barcode'],
            'procurement' => ['create_po', 'approve_po', 'manage_suppliers'],
            'orders' => ['process_orders', 'track_orders', 'ship_orders'],
            'reports' => ['stock_reports', 'sales_reports', 'procurement_reports'],
            'settings' => ['manage_users', 'configure_integrations'],
        ];

        // Step 1: Create permissions with full names (e.g., "inventory.index")
        $permissionsList = [];

        foreach ($modules as $module => $actions) {
            foreach ($actions as $action) {
                $permissionName = $module . '.' . $action;
                $permissionsList[$permissionName] = Permission::firstOrCreate(['name' => $permissionName]);
            }
        }

        // Define roles and their permissions
        $roles_permissions = [
            'admin' => array_keys($permissionsList),  // Admin gets all permissions
            'warehouse_staff' => [
                'inventory.index', 'inventory.create', 'inventory.edit', 'inventory.delete',
                'inventory.scan_barcode', 'orders.process_orders'
            ],
            'supervisor' => [
                'inventory.index', 'procurement.approve_po', 'orders.track_orders',
                'reports.stock_reports', 'reports.procurement_reports'
            ],
            'procurement_manager' => [
                'procurement.create_po', 'procurement.manage_suppliers', 'reports.procurement_reports'
            ],
            'delivery_agent' => [
                'orders.ship_orders', 'orders.track_orders'
            ],
            'auditor' => [
                'reports.stock_reports', 'reports.sales_reports', 'reports.procurement_reports'
            ],
        ];

        // Step 2: Create roles and assign permissions
        foreach ($roles_permissions as $roleName => $permissionNames) {
            $role = Role::firstOrCreate(['name' => $roleName]);
            foreach ($permissionNames as $permName) {
                if (isset($permissionsList[$permName])) {
                    $role->givePermissionTo($permissionsList[$permName]);
                }
            }
        }

        // Step 3: Create Admin User
        $admin = User::factory()->create([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'),
        ]);
        $admin->assignRole('admin');

        echo "Roles and permissions have been successfully seeded!\n";
    }
}
