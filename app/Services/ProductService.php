<?php

namespace App\Services;

use App\Models\Product;

/**
 * Class ProductService
 * @package App\Services
 */
class ProductService
{
    public function create(array $validated)
    {
        $product = Product::query()->create($validated);
        $product->addMedia($validated["poster"])->toMediaCollection("posters");
        return $product;
    }
}
