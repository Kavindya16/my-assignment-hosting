@extends('layouts.app')

@section('content')
<div style="max-width:1200px;margin:50px auto">

    <h1 style="font-size:32px;margin-bottom:30px">Admin Orders</h1>

    <table width="100%" border="1" cellpadding="12" style="border-collapse:collapse">
        <tr style="background:#f3f3f3">
            <th>ID</th>
            <th>Customer</th>
            <th>Total</th>
            <th>Status</th>
            <th>Date</th>
        </tr>

        @foreach($orders as $order)
        <tr>
            <td>#{{ $order->id }}</td>
            <td>{{ $order->user->email ?? 'Guest' }}</td>
            <td>£{{ $order->total }}</td>
            <td>{{ $order->status }}</td>
            <td>{{ $order->created_at->format('Y-m-d') }}</td>
        </tr>
        @endforeach

    </table>

</div>
@endsection
