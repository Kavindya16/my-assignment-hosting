@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-gray-100 p-10">

    <h1 class="text-4xl font-bold mb-8">Admin Dashboard</h1>

    <!-- Stats -->
    <div class="grid grid-cols-3 gap-6 mb-10">

        <div class="bg-white p-6 rounded-xl shadow">
            <h3 class="text-gray-500 text-sm mb-2">Total Products</h3>
            <p class="text-4xl font-bold">{{ $products }}</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
            <h3 class="text-gray-500 text-sm mb-2">Total Orders</h3>
            <p class="text-4xl font-bold">{{ $orders }}</p>
        </div>

        <div class="bg-black text-white p-6 rounded-xl shadow">
            <h3 class="text-sm mb-2">Pawelier Store</h3>
            <p class="text-xl">Live & Running 🐾</p>
        </div>

    </div>

    <!-- Actions -->
    <div class="bg-white rounded-xl shadow p-8">

        <h2 class="text-2xl font-semibold mb-6">Management</h2>

        <div class="flex gap-6">
            <a href="/admin/products" class="px-6 py-3 bg-black text-white rounded hover:bg-gray-800">
                Manage Products
            </a>

            <a href="/admin/orders" class="px-6 py-3 bg-black text-white rounded hover:bg-gray-800">
                Manage Orders
            </a>

            <a href="/" class="px-6 py-3 border border-black text-black rounded hover:bg-gray-100">
                Back to Store
            </a>
        </div>

    </div>

</div>

@endsection
