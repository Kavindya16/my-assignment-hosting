@extends('layouts.app')

@section('content')

<h1 class="text-3xl font-bold mb-6">Orders</h1>

<table class="w-full bg-white shadow rounded">
    <thead>
        <tr class="bg-gray-100">
            <th class="p-3 text-left">ID</th>
            <th class="p-3 text-left">User</th>
            <th class="p-3 text-left">Total</th>
            <th class="p-3 text-left">Status</th>
            <th class="p-3 text-left">Date</th>
        </tr>
    </thead>

    <tbody>
        @foreach($orders as $order)
        <tr class="border-t">
            <td class="p-3">#{{ $order->id }}</td>
            <td class="p-3">{{ $order->customer_name }}</td>
            <td class="p-3">Rs {{ $order->total }}</td>
            <td class="p-3 text-yellow-600">Pending</td>
            <td class="p-3">{{ $order->created_at->format('Y-m-d') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
