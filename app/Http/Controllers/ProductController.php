<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::query()->with("products")->get();
        $products = Product::query()->get();

        return view("shop", [
            "categories" => $categories,
            "products" => $products
        ]);
    }

    public function show(Product $product)
    {
        $related_products = Product::query()
            ->where("category_id", "=", $product->category_id)
            ->where("id", "!=", $product->id)
            ->get();

        return view("product-single", [
            "product" => $product,
            "related_products" => $related_products
        ]);
    }
}
