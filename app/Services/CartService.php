<?php

namespace App\Services;

use App\Models\Cart;
use App\Models\Product;

/**
 * Class CartService
 * @package App\Services
 */
class CartService
{
    public function add_product(Product $product, int $quantity)
    {
        $cart = Cart::query()
            ->where("user_id", auth()->id())
            ->where("product_id", $product->id)
            ->firstOrCreate([
                "user_id" => auth()->id(),
                "product_id" => $product->id
            ]);

        $cart->increment("quantity", $quantity);
    }

    public function get_cart_products()
    {
        return Cart::query()->with("product")->where("user_id", auth()->id())->get();
    }

    public function get_total_sum()
    {
        $cart_products = $this->get_cart_products();
        $total_sum = 0;
        foreach ($cart_products as $cart_product) {
            $total_sum += $cart_product->product->price * $cart_product->quantity;
        }
        return $total_sum;
    }
}
