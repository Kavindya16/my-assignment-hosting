<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartComponent extends Component
{
    public $cart = [];

    public function mount()
    {
        $this->cart = session()->get('cart', []);
    }

    public function increase($id)
    {
        $this->cart[$id]['qty']++;
        session()->put('cart', $this->cart);
    }

    public function decrease($id)
    {
        if ($this->cart[$id]['qty'] > 1) {
            $this->cart[$id]['qty']--;
            session()->put('cart', $this->cart);
        }
    }

    public function remove($id)
    {
        unset($this->cart[$id]);
        session()->put('cart', $this->cart);
    }

    public function getTotalProperty()
    {
        return collect($this->cart)->sum(function ($item) {
            return $item['price'] * $item['qty'];
        });
    }

    public function render()
    {
        return view('livewire.cart-component');
    }
}
