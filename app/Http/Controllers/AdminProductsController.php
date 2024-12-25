<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminProductsController extends Controller
{
    // Display the dashboard with CRUD operations
    public function index()
    {
        $products = Product::all();
        return view('admin.products.dashboard', compact('products'));
    }

    // Store a new product in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
        ]);

        // Handle file upload
        $imagePath = $request->file('image') ? $request->file('image')->store('products', 'public') : null;

        // Create product
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $imagePath,
            'category' => $request->category,
            'genre' => $request->genre,
        ]);

        return redirect()->back()->with('success', 'Product added successfully!');
    }

    // Update the product details
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->only(['name', 'price', 'description']));

        return redirect('/admin/products')->with('success', 'Product updated successfully!');
    }

    // Delete a product
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('/admin/products')->with('success', 'Product deleted successfully!');
    }
}