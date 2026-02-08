<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $cart = session()->get('cart', []);

        if (count($cart) == 0) {
            return redirect('/cart')->with('error', 'Cart is empty');
        }

        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['qty'];
        }

        Order::create([
            'user_id' => Auth::id(),
            'items' => json_encode($cart),
            'total' => $total,
            'status' => 'Pending'
        ]);

        Session::forget('cart');

        return redirect('/')->with('success', 'Order placed successfully!');
    }
}
