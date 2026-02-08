@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto p-10">

    <h1 class="text-3xl font-bold mb-6">Manage Products</h1>

    <!-- Add Product -->
    <form action="/admin/products" method="POST" enctype="multipart/form-data" class="grid grid-cols-4 gap-4 mb-10">
        @csrf
        <input name="name" placeholder="Product Name" class="border p-3 rounded" required>
        <input name="price" placeholder="Price" class="border p-3 rounded" required>
        <input name="category" placeholder="Category" class="border p-3 rounded" required>
        <input type="file" name="image" required>

        <button class="col-span-4 bg-black text-white py-3 rounded">
            Add Product
        </button>
    </form>

    <!-- Product Table -->
    <table class="w-full bg-white shadow rounded">
        <tr class="bg-gray-100">
            <th class="p-3">Image</th>
            <th class="p-3">Name</th>
            <th class="p-3">Price</th>
            <th class="p-3">Category</th>
            <th class="p-3">Actions</th>
        </tr>

        @foreach($products as $p)
        <tr class="border-b">
            <td class="p-3">
                <img src="/images/{{ $p->image }}" class="w-16 h-16 object-cover rounded">
            </td>
            <td class="p-3">{{ $p->name }}</td>
            <td class="p-3">£{{ $p->price }}</td>
            <td class="p-3">{{ $p->category }}</td>
            <td class="p-3 flex gap-3">

                <form action="/admin/products/update/{{ $p->id }}" method="POST" enctype="multipart/form-data" class="flex gap-2">
                    @csrf
                    <input name="name" value="{{ $p->name }}" class="border p-1 w-24">
                    <input name="price" value="{{ $p->price }}" class="border p-1 w-16">
                    <input name="category" value="{{ $p->category }}" class="border p-1 w-20">
                    <input type="file" name="image">
                    <button class="bg-black text-white px-3 rounded">Update</button>
                </form>

                <a href="/admin/products/delete/{{ $p->id }}"
                   class="bg-red-600 text-white px-3 py-1 rounded"
                   onclick="return confirm('Delete this product?')">
                    Delete
                </a>

            </td>
        </tr>
        @endforeach

    </table>

</div>

@endsection
