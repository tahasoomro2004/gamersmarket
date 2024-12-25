<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductsController extends Controller
    {
        public function index()
        {
            $products = Product::all();
            return view('products', compact('products'));
        }
    }
