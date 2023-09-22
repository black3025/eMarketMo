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
        \App\Models\Role::create(
            [
                'name'=>"admin",
                'role'=>1
            ]
        );
        \App\Models\Role::create(
            [
                'name'=>"Shop Owner",
                'role'=>2
            ]
        );

        \App\Models\User::create(
            [
                'name'=>'admin',
                'password'=>'$2y$10$D8DJDvIyE6bTu1ipgioOW.jAscxPWOnlQxACoCGZflhdDV7X4q1Um',
                'email'=>'admin@admin.com',
                'role_id'=>1
            ]
        );
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
