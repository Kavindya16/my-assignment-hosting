<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
   public function checkout()
{
    // Get cart from session
    $cart = session()->get('cart', []);

    // Calculate subtotal
    $subtotal = 0;
    foreach ($cart as $item) {
        $subtotal += $item['price'] * $item['qty'];
    }

    // Fixed shipping fee
    $shipping = 5;

    // Send everything to the view
    return view('checkout', compact('cart', 'subtotal', 'shipping'));
}


    public function add($id)
    {
        session()->push('cart', $id);
        return redirect()->route('cart.index');
    }
}
