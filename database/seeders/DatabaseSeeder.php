<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\user::create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'password' => 123456789,
        // ]);
        \App\Models\user::create([
            'name' => ' user',
            'email' => 'user@gmail.com',
            'password' => 123456789,
        ]);
        \App\Models\user::create([
            'name' => ' admin',
            'email' => 'admin@gmail.com',
            'password' => 123456789,
        ]);
        \App\Models\role::create([
            'name' => ' user',
            'description' => 'user role',
        ]);
        \App\Models\role::create([
            'name' => ' admin',
            'description' => 'admin role',
        ]);
        \App\Models\permission::create([
            'name' => ' add_user',
            'description' => ' new user can be added by admin',
        ]);
        \App\Models\permission::create([
            'name' => ' view_user',
            'description' => ' user info can be view by admin',
        ]);
    }
}
