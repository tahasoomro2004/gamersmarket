<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Add the index method here
    public function index()
    {     $products = Product::all();
        // You can return a view or data from here
        return view('index', compact('products'));
}
}