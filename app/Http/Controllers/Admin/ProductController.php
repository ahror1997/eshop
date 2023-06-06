<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Services\ProductService;

class ProductController extends Controller
{
    /** @var ProductService $productService */
    private $productService;

    /**
     * ProductController constructor.
    * @param ProductService $productService
    */
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        return view("admin.product.index", [
            "products" => Product::query()->get()
        ]);
    }

    public function create()
    {
        return view("admin.product.create", [
            "categories" => Category::query()->get()
        ]);
    }

    public function store(ProductRequest $request)
    {
        $this->productService->create($request->validated());
        return redirect()->route("admin.products.index");
    }
}
