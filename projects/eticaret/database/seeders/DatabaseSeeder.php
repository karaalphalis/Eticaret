<?php

namespace Database\Seeders;

use database\seeders\Category\CategorySeeder;
use Database\Seeders\RolePermissions\GeneralRolPermissionSeeder;
use Database\Seeders\User\UserInitializeUserSeeder;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
        $this->call([
            GeneralRolPermissionSeeder::class,
            UserInitializeUserSeeder::class,
        ]);
    }
}
