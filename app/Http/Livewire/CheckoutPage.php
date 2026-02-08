<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;

class CheckoutPage extends Component
{
    public $name;
    public $email;
    public $address;

    public function placeOrder()
    {
        $cart = session()->get('cart');

        if (!$cart || count($cart) === 0) {
            return;
        }

        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        Order::create([
            'customer_name' => $this->name,
            'email'         => $this->email,
            'address'       => $this->address,
            'total'         => $total,
        ]);

        session()->forget('cart');

        return redirect()->to('/thank-you');
    }

    public function render()
    {
        return view('livewire.checkout-page');
    }
}
