<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // admin permission
        $admin_permissions = Permission::all();
        Role::findOrFail(1)->permissions()->sync($admin_permissions->pluck('id'));

        // editor permission
        $editor_permissions = $admin_permissions->filter(function ($permission) {
            return substr($permission->title, 0, 5) != 'user_';
        });
        Role::findOrFail(2)->permissions()->sync($editor_permissions);
        
        // writer permission
        Role::findOrFail(3)->permissions()->sync($editor_permissions);
        
        // guest permission
        Role::findOrFail(4)->permissions()->sync(5);
    }
}
