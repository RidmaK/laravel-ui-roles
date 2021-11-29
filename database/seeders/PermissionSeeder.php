<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [ 'id' => 1, 'title' => 'user_view'],
            [ 'id' => 2, 'title' => 'user_create'],
            [ 'id' => 3, 'title' => 'user_edit'],
            [ 'id' => 4, 'title' => 'user_delete'],
            [ 'id' => 5, 'title' => 'post_view'],
            [ 'id' => 6, 'title' => 'post_create'],
            [ 'id' => 7, 'title' => 'post_edit'],
            [ 'id' => 8, 'title' => 'post_delete'],
        ];

        Permission::insert($permissions);
    }
}
