<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['id' => 1, 'name' => 'Admin User', 'email' => 'admin@blog.com', 'password' => bcrypt('123'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 2, 'name' => 'Editor User', 'email' => 'editor@blog.com', 'password' => bcrypt('123'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 3, 'name' => 'Writer User', 'email' => 'writer@blog.com', 'password' => bcrypt('123'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 4, 'name' => 'Guest User 01', 'email' => 'guest01@blog.com', 'password' => bcrypt('123'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 5, 'name' => 'Guest User 02', 'email' => 'guest02@blog.com', 'password' => bcrypt('123'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 6, 'name' => 'Guest User 03', 'email' => 'guest03@blog.com', 'password' => bcrypt('123'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];

        User::insert($users);
    }
}
