<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $products = Product::count();
        $orders   = Order::count();
        return view('admin.dashboard', compact('products', 'orders'));
    }

    public function products()
    {
        $products = Product::latest()->get();
        return view('admin.products', compact('products'));
    }

    public function storeProduct(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'category'=>'required',
            'image'=>'required|image'
        ]);

        $img = $request->file('image');
        $name = time().'.'.$img->getClientOriginalExtension();
        $img->move(public_path('images'), $name);

        Product::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'category'=>$request->category,
            'image'=>$name
        ]);

        return back();
    }

    public function updateProduct(Request $request, $id)
    {
        $p = Product::findOrFail($id);
        $p->name = $request->name;
        $p->price = $request->price;
        $p->category = $request->category;

        if($request->hasFile('image')){
            $img = $request->file('image');
            $name = time().'.'.$img->getClientOriginalExtension();
            $img->move(public_path('images'), $name);
            $p->image = $name;
        }

        $p->save();
        return back();
    }

    public function deleteProduct($id)
    {
        Product::findOrFail($id)->delete();
        return back();
    }

    public function orders()
    {
        $orders = Order::latest()->get();
        return view('admin.orders', compact('orders'));
    }
}
