<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\CartService;

class CartController extends Controller
{
    /** @var CartService $cartService */
    private $cartService;

    /**
     * CartController constructor.
    * @param CartService $cartService
    */
    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function cart()
    {
        return view("cart", [
            "cart_products" => $this->cartService->get_cart_products(),
            "total_sum" => $this->cartService->get_total_sum()
        ]);
    }

    public function add_to_cart(Product $product)
    {
        $this->cartService->add_product($product, request("quantity"));
        return redirect()->back();
    }

    public function checkout()
    {
        return view("checkout");
    }
}
