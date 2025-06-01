<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart($id)
{
    $product = Product::findOrFail($id);
    $cart = session()->get('cart', []);
    $cart[$id] = [
        "name" => $product->name,
        "quantity" => isset($cart[$id]) ? $cart[$id]['quantity'] + 1 : 1,
        "price" => $product->price,
    ];
    session()->put('cart', $cart);
    return redirect()->back()->with('success', 'Product added to cart!');
}

}
