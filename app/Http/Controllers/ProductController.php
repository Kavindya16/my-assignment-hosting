<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Show Manage Products page (WEB)
    public function index(Request $request)
    {
        $category = $request->query('category');

        $products = Product::when($category, function ($query, $category) {
            return $query->where('category', $category);
        })
        ->orderBy('id', 'desc')
        ->get();

         return view('shop-category', compact('products', 'category'));
    }

    // Store Product (WEB)
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'category' => 'required',
            'price'    => 'required|numeric',
            'image'    => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $imagePath = $request->file('image')->store('products', 'public');

        Product::create([
            'name'     => $request->name,
            'category' => $request->category,
            'price'    => $request->price,
            'image'    => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Product added successfully');
    }

    // Delete product (WEB)
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return back();
    }

    // ✅ API: Get products for Android app
    public function apiIndex(Request $request)
    {
        $category = $request->query('category');

        $products = Product::when($category, function ($query, $category) {
            return $query->where('category', $category);
        })
        ->orderBy('id', 'desc')
        ->get();

        return response()->json($products);
    }
}
