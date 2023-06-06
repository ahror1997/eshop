<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::query()->insert([
            // category Clothing
            [
                "name" => "Tom Tailor Поло",
                "price" => 4299,
                "description" => "Far far away, behind the word mountains, far from the countries",
                "category_id" => 1,
                "size" => "XL",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Lyle & Scott Куртка",
                "price" => 6379,
                "description" => "Far far away, behind the word mountains, far from the countries",
                "category_id" => 1,
                "size" => "XXL",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Befree Куртка утепленная",
                "price" => 2711,
                "description" => "Far far away, behind the word mountains, far from the countries",
                "category_id" => 1,
                "size" => "X",
                "created_at" => now(),
                "updated_at" => now()
            ],
            // category Jeans
            [
                "name" => "Boss Джинсы",
                "price" => 12700,
                "description" => "Far far away, behind the word mountains, far from the countries",
                "category_id" => 2,
                "size" => "XL",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Mango Man Джинсы BEN",
                "price" => 4790,
                "description" => "Far far away, behind the word mountains, far from the countries",
                "category_id" => 2,
                "size" => "X",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Colin's Джинсы 044 KARL Straight Fit",
                "price" => 2961,
                "description" => "Far far away, behind the word mountains, far from the countries",
                "category_id" => 2,
                "size" => "M",
                "created_at" => now(),
                "updated_at" => now()
            ],
            // category Shoes
            [
                "name" => "Hugo Кроссовки",
                "price" => 15900,
                "description" => "Far far away, behind the word mountains, far from the countries",
                "category_id" => 3,
                "size" => "42",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Reebok Кеды CLUB C REVENGE MU",
                "price" => 8900,
                "description" => "Far far away, behind the word mountains, far from the countries",
                "category_id" => 3,
                "size" => "43",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Salamander Туфли",
                "price" => 5500,
                "description" => "Far far away, behind the word mountains, far from the countries",
                "category_id" => 3,
                "size" => "42",
                "created_at" => now(),
                "updated_at" => now()
            ],
        ]);
    }
}
