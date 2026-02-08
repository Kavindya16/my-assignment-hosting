@extends('layouts.app')

@section('content')

<div class="max-w-5xl mx-auto p-10">
<h1 class="text-3xl font-bold mb-6">My Orders</h1>

<table class="w-full bg-white shadow rounded">
<tr class="bg-gray-100">
    <th class="p-3">ID</th>
    <th class="p-3">Total</th>
    <th class="p-3">Date</th>
</tr>

@foreach($orders as $order)
<tr>
    <td class="p-3">#{{ $order->id }}</td>
    <td class="p-3">Rs {{ $order->total }}</td>
    <td class="p-3">{{ $order->created_at->format('Y-m-d') }}</td>
</tr>
@endforeach

</table>
</div>

@endsection
