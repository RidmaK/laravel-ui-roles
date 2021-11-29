<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [ 'id' => 1, 'title' => 'admin'],
            [ 'id' => 2, 'title' => 'editor'],
            [ 'id' => 3, 'title' => 'writer'],
            [ 'id' => 4, 'title' => 'guest'],
        ];

        Role::insert($roles);
    }
}
