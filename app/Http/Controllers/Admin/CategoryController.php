<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Services\CategoryService;

class CategoryController extends Controller
{
    /** @var CategoryService $categoryService */
    private $categoryService;

    /**
     * CategoryController constructor.
    * @param CategoryService $categoryService
    */
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        return view("admin.category.index", [
            "categories" => Category::query()->get()
        ]);
    }

    public function create()
    {
        return view("admin.category.create");
    }

    public function store(CategoryRequest $request)
    {
        $this->categoryService->create($request->validated());
        return redirect()->route("admin.categories.index");
    }
}
