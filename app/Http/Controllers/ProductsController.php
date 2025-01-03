<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    // Function to show the products page
    public function index()
    {
        $products = Product::all();  // Fetch all products from the database
        return view('products', compact('products'));  // Pass products to view
    }

    // Function to handle the search via AJAX
    public function search(Request $request)
    {
        $searchTerm = $request->query('query');

        // Log the search query for debugging
        \Log::info('Search query: ' . $searchTerm);

        // Fetch the products based on the search term
        $products = Product::where('name', 'like', '%' . $searchTerm . '%')
                            ->orWhere('category', 'like', '%' . $searchTerm . '%')
                            ->get();

        // Return the partial view with the filtered products
        return response()->json(view('partials.product-list', compact('products'))->render());
    }
}
