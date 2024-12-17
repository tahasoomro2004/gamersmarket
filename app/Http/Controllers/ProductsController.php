<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // Add the index method here
    public function index()
    {
        // You can return a view or data from here
        return view('products'); // Ensure you have a 'home.blade.php' in resources/views
    }
}
