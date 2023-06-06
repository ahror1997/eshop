<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, "index"]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(["prefix" => "", "as" => "products."], function () {
    Route::get("/shop", [ProductController::class, "index"])->name("index");
    Route::get("/product/{product}", [ProductController::class, "show"])->name("show");
});

Route::get("/cart", [CartController::class, "cart"])->name("cart");
Route::post("/cart/{product}", [CartController::class, "add_to_cart"])->name("add_to_cart");
Route::get("checkout", [CartController::class, "checkout"])->name("checkout");

// Admin Panel
Route::group(["prefix" => "admin", "as" => "admin.", "middleware" => ["auth", "role:admin"]], function() {

    Route::group(["prefix" => "categories", "as" => "categories."], function() {
        Route::get("/", [CategoryController::class, "index"])->name("index");
        Route::get("create", [CategoryController::class, "create"])->name("create");
        Route::post("store", [CategoryController::class, "store"])->name("store");
    });

    Route::group(["prefix" => "products", "as" => "products."], function() {
        Route::get("/", [AdminProductController::class, "index"])->name("index");
        Route::get("create", [AdminProductController::class, "create"])->name("create");
        Route::post("store", [AdminProductController::class, "store"])->name("store");
    });

});

require __DIR__.'/auth.php';
