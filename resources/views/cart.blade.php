@extends('layouts.app')

@section('content')
<div style="max-width:900px;margin:40px auto">
    <h1 style="font-size:32px;margin-bottom:20px">Your Cart</h1>

    @livewire('cart-component')

    
</div>
@endsection
