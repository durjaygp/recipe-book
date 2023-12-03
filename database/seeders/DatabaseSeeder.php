<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Role::factory()->create([
            'id' => 1,
            'name' => 'user',
        ]);

        \App\Models\Role::factory()->create([
            'id' => 2,
            'name' => 'admin',
        ]);


        \App\Models\User::create([
            'id' => 1,
            'name' => 'Durjay Ghosh',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // password = 12345678
            'remember_token' => Str::random(10),
            'role_id' => 2
        ]);

        \App\Models\User::create([
            'id' => 2,
            'name' => 'Test User',
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // password = 12345678
            'remember_token' => Str::random(10),
            'role_id' => 1
        ]);
    }
}
