<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        return view("home", [
            "products" => Product::inRandomOrder()->limit(3)->get(),
            "best_products" => Product::inRandomOrder()->limit(4)->get()
        ]);
    }
}
