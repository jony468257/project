<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PetProductController extends Controller

{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }
}
