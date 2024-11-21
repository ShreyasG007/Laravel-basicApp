<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductManager extends Controller
{
    public function index()
    {
        $products = Product::all(); // Get all products from the database
        return view('product', compact('products'));
    }
}
