@extends('layouts.app')

@section('content')

<div class="min-h-screen flex items-center justify-center bg-gray-50 px-6">

    <div class="bg-white shadow-lg rounded-xl p-10 max-w-lg text-center">

        <!-- Success Icon -->
        <div class="flex justify-center mb-6">
            <div class="w-20 h-20 bg-green-100 text-green-600 flex items-center justify-center rounded-full text-4xl">
                ✓
            </div>
        </div>

        <h1 class="text-3xl font-bold mb-4">Thank You for Your Order!</h1>

        <p class="text-gray-600 mb-6">
            Your order has been placed successfully.  
            Our Pawelier team is preparing it with care 🐾
        </p>

        <div class="bg-gray-100 rounded-lg p-4 mb-6 text-sm text-gray-700">
            You will receive a confirmation email with your order details shortly.
        </div>

        <div class="flex flex-col gap-4">
            <a href="/" class="w-full bg-black text-white py-3 rounded-lg hover:bg-gray-900 transition">
                Continue Shopping
            </a>

            <a href="/my-orders" class="w-full border border-black text-black py-3 rounded-lg hover:bg-gray-100 transition">
                View My Orders
            </a>
        </div>

    </div>

</div>

@endsection
