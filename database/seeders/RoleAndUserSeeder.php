<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RoleAndUserSeeder extends Seeder
{
    public function up()
    {
        // Disable foreign key constraints
        Schema::disableForeignKeyConstraints();

        // Delete records from roles and permissions tables
        DB::table('model_has_roles')->delete();
        DB::table('model_has_permissions')->delete();
        DB::table('roles')->delete();
        DB::table('permissions')->delete();

        // Re-enable foreign key constraints
        Schema::enableForeignKeyConstraints();
    }

    public function run()
    {
        DB::table('model_has_roles')->delete();
        DB::table('model_has_permissions')->delete();
        DB::table('roles')->delete();
        DB::table('permissions')->delete();
        // DB::table('users')->where('email', 'alte@admin.com')->delete();

        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Post Permissions
        Permission::Create(['name' => 'list post']);
        Permission::Create(['name' => 'edit post']);
        Permission::Create(['name' => 'delete post']);
        Permission::Create(['name' => 'show post']);
        Permission::Create(['name' => 'update post']);
        Permission::Create(['name' => 'create post']);

        // Section Permissions
        Permission::Create(['name' => 'list section']);
        Permission::Create(['name' => 'edit section']);
        Permission::Create(['name' => 'delete section']);
        Permission::Create(['name' => 'show section']);
        Permission::Create(['name' => 'update section']);
        Permission::Create(['name' => 'create section']);

        // Setting Permissions
        Permission::Create(['name' => 'list setting']);
        Permission::Create(['name' => 'edit setting']);
        Permission::Create(['name' => 'delete setting']);
        Permission::Create(['name' => 'show setting']);
        Permission::Create(['name' => 'update setting']);
        Permission::Create(['name' => 'create setting']);

        Permission::Create(['name' => 'list directory']);
        Permission::Create(['name' => 'edit directory']);
        Permission::Create(['name' => 'delete directory']);
        Permission::Create(['name' => 'show directory']);
        Permission::Create(['name' => 'update directory']);
        Permission::Create(['name' => 'create directory']);

        Permission::Create(['name' => 'list components']);
        Permission::Create(['name' => 'edit components']);
        Permission::Create(['name' => 'delete components']);
        Permission::Create(['name' => 'show components']);
        Permission::Create(['name' => 'update components']);
        Permission::Create(['name' => 'create components']);

        Permission::Create(['name' => 'list language']);
        Permission::Create(['name' => 'edit language']);
        Permission::Create(['name' => 'delete language']);
        Permission::Create(['name' => 'show language']);
        Permission::Create(['name' => 'update language']);
        Permission::Create(['name' => 'create language']);

        Permission::Create(['name' => 'list submission']);
        Permission::Create(['name' => 'edit submission']);
        Permission::Create(['name' => 'delete submission']);
        Permission::Create(['name' => 'show submission']);
        Permission::Create(['name' => 'update submission']);
        Permission::Create(['name' => 'create submission']);

        Permission::Create(['name' => 'list subscribe']);
        Permission::Create(['name' => 'edit subscribe']);
        Permission::Create(['name' => 'delete subscribe']);
        Permission::Create(['name' => 'show subscribe']);
        Permission::Create(['name' => 'update subscribe']);
        Permission::Create(['name' => 'create subscribe']);

        Permission::Create(['name' => 'list user']);
        Permission::Create(['name' => 'edit user']);
        Permission::Create(['name' => 'delete user']);
        Permission::Create(['name' => 'show user']);
        Permission::Create(['name' => 'update user']);
        Permission::Create(['name' => 'create user']);

        $role1 = Role::Create(['name' => 'Content Manager']);
        $role1->givePermissionTo(['list post', 'edit post', 'delete post', 'show post', 'update post', 'create post', 'list section', 'edit section', 'list setting', 'list directory', 'list language', 'list submission', 'show section']);

        // or may be done by chaining
        $role2 = Role::Create(['name' => 'Administrator']);
        $role2->givePermissionTo(Permission::all());

        // Create admin user
        $adminUser = User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'admin',
                'password' => bcrypt('admin'),
                'position' => '1',
                'status' => 'active',
            ]
        );
        // Assign roles to admin user
        $adminUser->assignRole(['Administrator']);

        $ContentManager = User::where('email', '!=', 'admin@admin.com')->get();
        foreach ($ContentManager as $manager) {
            $manager->assignRole(['Content Manager']);
        }
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

    }
}
