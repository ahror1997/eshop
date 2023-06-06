<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $this->call(RoleSeeder::class);

        $user = \App\Models\User::factory()->create([
            'name' => 'Tony Stark',
            'email' => 'admin@example.com',
            'password' => bcrypt("admin123"),
        ]);

        $user->assignRole("admin");

        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
    }
}
