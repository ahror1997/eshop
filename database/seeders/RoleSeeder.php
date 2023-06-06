<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::query()->insert([
            [
                "name" => "admin",
                "guard_name" => "web",
            ],
            [
                "name" => "client",
                "guard_name" => "web",
            ]
        ]);
    }
}
