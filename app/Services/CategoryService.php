<?php

namespace App\Services;

use App\Models\Category;

/**
 * Class CategoryService
 * @package App\Services
 */
class CategoryService
{
    public function create(array $validated)
    {
        $category = Category::query()->create($validated);
        return $category;
    }
}
