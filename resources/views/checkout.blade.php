@extends('layouts.app')

@section('content')

<form action="/place-order" method="POST" class="max-w-6xl mx-auto p-10">
@csrf

<h1 class="text-4xl font-bold mb-8">Secure Checkout</h1>

<div class="grid grid-cols-2 gap-12">

<!-- LEFT SIDE -->
<div>

<h3 class="text-lg font-semibold mb-4">Customer Details</h3>

<input name="name" required class="w-full p-4 border rounded mb-4" placeholder="Full Name">
<input name="email" type="email" required class="w-full p-4 border rounded mb-4" placeholder="Email Address">
<textarea name="address" required class="w-full p-4 border rounded mb-6" placeholder="Shipping Address"></textarea>

<h3 class="text-lg font-semibold mb-4">Payment Information</h3>

<input class="w-full p-4 border rounded mb-4" placeholder="Cardholder Name">
<input class="w-full p-4 border rounded mb-4" placeholder="Card Number">

<div class="flex gap-4">
<input class="w-full p-4 border rounded" placeholder="MM/YY">
<input class="w-full p-4 border rounded" placeholder="CVC">
</div>

<button type="submit" class="mt-8 w-full bg-black text-white py-4 rounded text-lg">
Pay & Place Order
</button>

</div>

<!-- RIGHT SIDE -->
<div class="bg-gray-50 p-8 rounded">

<h3 class="text-lg font-semibold mb-6">Order Summary</h3>

@php $total = 0; @endphp
@foreach(session('cart', []) as $item)
@php
$qty = $item['quantity'] ?? 1;
$total += $item['price'] * $qty;
@endphp

<div class="flex justify-between mb-3">
    <div>
        <strong>{{ $item['name'] }}</strong><br>
        Qty: {{ $qty }}
    </div>
    <div>Rs {{ $item['price'] * $qty }}</div>
</div>
@endforeach

<hr class="my-4">

<div class="flex justify-between">
    <span>Subtotal</span>
    <span>Rs {{ $total }}</span>
</div>

<div class="flex justify-between">
    <span>Shipping</span>
    <span>Rs 250</span>
</div>

<hr class="my-4">

<div class="flex justify-between font-bold text-xl">
    <span>Total</span>
    <span>Rs {{ $total + 250 }}</span>
</div>

</div>

</div>

</form>

@endsection
