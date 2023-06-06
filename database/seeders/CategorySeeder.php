<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::query()->insert([
            [
                "name" => "Одежда",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Джинсы",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Обувь",
                "created_at" => now(),
                "updated_at" => now()
            ]
        ]);
    }
}
