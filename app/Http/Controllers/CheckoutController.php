<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function placeOrder(Request $request)
    {
        $cart = session()->get('cart');

        $total = 0;
        foreach ($cart as $item) {
            $qty = $item['quantity'] ?? 1;
            $total += $item['price'] * $qty;
        }

        Order::create([
            'customer_name' => $request->name,
            'email'         => $request->email,
            'address'       => $request->address,
            'total'         => $total,
        ]);

        session()->forget('cart');

        return redirect('/thank-you');
    }
}
