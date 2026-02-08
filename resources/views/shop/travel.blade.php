@extends('layouts.app')

@section('content')

<section style="padding:80px 0; background:#faf7f5;">

    <!-- PAGE TITLE -->
    <h1 style="
        text-align:center;
        font-size:36px;
        letter-spacing:4px;
        margin-bottom:60px;
        font-family:serif;
    ">
        PRODUCTS
    </h1>

    <h2 style="
        text-align:center;
        font-size:28px;
        letter-spacing:3px;
        margin-bottom:60px;
        font-family:serif;
    ">
        TRAVEL
    </h2>

    <!-- PRODUCTS GRID -->
    <div style="
        max-width:1200px;
        margin:auto;
        display:grid;
        grid-template-columns:repeat(auto-fit, minmax(320px, 1fr));
        gap:40px;
        padding:0 20px;
    ">

        <!-- PRODUCT 1 -->
        <div style="
            background:white;
            border-radius:24px;
            padding:24px;
            box-shadow:0 10px 30px rgba(0,0,0,0.06);
        ">
            <img src="/images/travel1.png" style="width:100%; height:260px; object-fit:cover; border-radius:16px;">

<h3 style="font-size:22px; margin:20px 0 10px; font-family:serif;">
    Travel Carrier
</h3>

<div style="border:1px solid #eee; padding:14px; border-radius:12px; font-size:18px; width:120px;">
    £95.00
</div>

<a href="{{ route('cart.add', [
    'id' => 25,
    'name' => 'Travel Carrier',
    'price' => 95.00,
    'image' => '/images/travel1.png'
]) }}">
    Add to Cart
</a>

        </div>

        <!-- PRODUCT 2 -->
        <div style="
            background:white;
            border-radius:24px;
            padding:24px;
            box-shadow:0 10px 30px rgba(0,0,0,0.06);
        ">
            <img src="/images/travel2.png" style="width:100%; height:260px; object-fit:cover; border-radius:16px;">

<h3 style="font-size:22px; margin:20px 0 10px; font-family:serif;">
    Car Seat Cover
</h3>

<div style="border:1px solid #eee; padding:14px; border-radius:12px; font-size:18px; width:120px;">
    £45.00
</div>

<a href="{{ route('cart.add', [
    'id' => 26,
    'name' => 'Car Seat Cover',
    'price' => 45.00,
    'image' => '/images/travel2.png'
]) }}">
    Add to Cart
</a>

        </div>

        <!-- PRODUCT 3 -->
        <div style="
            background:white;
            border-radius:24px;
            padding:24px;
            box-shadow:0 10px 30px rgba(0,0,0,0.06);
        ">
            <img src="/images/travel3.png" style="width:100%; height:260px; object-fit:cover; border-radius:16px;">

<h3 style="font-size:22px; margin:20px 0 10px; font-family:serif;">
    Portable Bowl
</h3>

<div style="border:1px solid #eee; padding:14px; border-radius:12px; font-size:18px; width:120px;">
    £18.00
</div>

<a href="{{ route('cart.add', [
    'id' => 27,
    'name' => 'Portable Bowl',
    'price' => 18.00,
    'image' => '/images/travel3.png'
]) }}">
    Add to Cart
</a>

        </div>

        <!-- PRODUCT 4 -->
        <div style="
            background:white;
            border-radius:24px;
            padding:24px;
            box-shadow:0 10px 30px rgba(0,0,0,0.06);
        ">
            <img src="/images/travel4.png" style="width:100%; height:260px; object-fit:cover; border-radius:16px;">

<h3 style="font-size:22px; margin:20px 0 10px; font-family:serif;">
    Pet Backpack
</h3>

<div style="border:1px solid #eee; padding:14px; border-radius:12px; font-size:18px; width:120px;">
    £78.00
</div>

<a href="{{ route('cart.add', [
    'id' => 28,
    'name' => 'Pet Backpack',
    'price' => 78.00,
    'image' => '/images/travel4.png'
]) }}">
    Add to Cart
</a>

        </div>

        <!-- PRODUCT 5 -->
        <div style="
            background:white;
            border-radius:24px;
            padding:24px;
            box-shadow:0 10px 30px rgba(0,0,0,0.06);
        ">
            <img src="/images/travel5.png" style="width:100%; height:260px; object-fit:cover; border-radius:16px;">

<h3 style="font-size:22px; margin:20px 0 10px; font-family:serif;">
    Travel Bed
</h3>

<div style="border:1px solid #eee; padding:14px; border-radius:12px; font-size:18px; width:120px;">
    £52.00
</div>

<a href="{{ route('cart.add', [
    'id' => 29,
    'name' => 'Travel Bed',
    'price' => 52.00,
    'image' => '/images/travel5.png'
]) }}">
    Add to Cart
</a>

        </div>

        <!-- PRODUCT 6 -->
        <div style="
            background:white;
            border-radius:24px;
            padding:24px;
            box-shadow:0 10px 30px rgba(0,0,0,0.06);
        ">
            <img src="/images/travel6.png" style="width:100%; height:260px; object-fit:cover; border-radius:16px;">

<h3 style="font-size:22px; margin:20px 0 10px; font-family:serif;">
    ID Tag Set
</h3>

<div style="border:1px solid #eee; padding:14px; border-radius:12px; font-size:18px; width:120px;">
    £15.00
</div>

<a href="{{ route('cart.add', [
    'id' => 30,
    'name' => 'ID Tag Set',
    'price' => 15.00,
    'image' => '/images/travel6.png'
]) }}">
    Add to Cart
</a>

        </div>

        <!-- PRODUCT 2 -->
        <div style="
            background:white;
            border-radius:24px;
            padding:24px;
            box-shadow:0 10px 30px rgba(0,0,0,0.06);
        ">
           <img src="/images/t7.jpg" style="width:100%; height:260px; object-fit:cover; border-radius:16px;">

<h3 style="font-size:22px; margin:20px 0 10px; font-family:serif;">
    Pet Seatbelt
</h3>

<div style="border:1px solid #eee; padding:14px; border-radius:12px; font-size:18px; width:120px;">
    £22.00
</div>

<a href="{{ route('cart.add', [
    'id' => 31,
    'name' => 'Pet Seatbelt',
    'price' => 22.00,
    'image' => '/images/t7.jpg'
]) }}">
    Add to Cart
</a>

        </div>

        <!-- PRODUCT 2 -->
        <div style="
            background:white;
            border-radius:24px;
            padding:24px;
            box-shadow:0 10px 30px rgba(0,0,0,0.06);
        ">
            <img src="/images/t8.png" style="width:100%; height:260px; object-fit:cover; border-radius:16px;">

<h3 style="font-size:22px; margin:20px 0 10px; font-family:serif;">
    Travel First Aid Kit
</h3>

<div style="border:1px solid #eee; padding:14px; border-radius:12px; font-size:18px; width:120px;">
    £35.00
</div>

<a href="{{ route('cart.add', [
    'id' => 32,
    'name' => 'Travel First Aid Kit',
    'price' => 35.00,
    'image' => '/images/t8.png'
]) }}">
    Add to Cart
</a>

        </div>

    </div>
</section>

<footer style="background:#0b0b0b; color:#ddd; padding:80px 0 30px;">
    <div style="
        max-width:1200px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        flex-wrap:wrap;
        gap:40px;
        padding:0 40px;
    ">

        <!-- SHOP -->
        <div>
            <h4 style="color:white; margin-bottom:20px;">Shop</h4>
            <p><a href="/home" style="color:#ccc; text-decoration:none;">Home</a></p>
            <p><a href="/shop" style="color:#ccc; text-decoration:none;">Shop Now</a></p>
            <p><a href="/shop" style="color:#ccc; text-decoration:none;">Shop All</a></p>
            <p><a href="#" style="color:#ccc; text-decoration:none;">Shop Brands</a></p>
            <p><a href="#" style="color:#ccc; text-decoration:none;">Pawelier Bakery</a></p>
        </div>

        <!-- SUPPORT -->
        <div>
            <h4 style="color:white; margin-bottom:20px;">Support</h4>
            <p><a href="#" style="color:#ccc; text-decoration:none;">Track Your Order</a></p>
            <p><a href="#" style="color:#ccc; text-decoration:none;">Shipping Policy</a></p>
            <p><a href="#" style="color:#ccc; text-decoration:none;">Returns & Refunds</a></p>
            <p><a href="#" style="color:#ccc; text-decoration:none;">FAQs</a></p>
            <p><a href="#" style="color:#ccc; text-decoration:none;">Contact Us</a></p>
        </div>

        <!-- ABOUT -->
        <div>
            <h4 style="color:white; margin-bottom:20px;">About</h4>
            <p><a href="#" style="color:#ccc; text-decoration:none;">Our Story</a></p>
            <p><a href="#" style="color:#ccc; text-decoration:none;">Careers</a></p>
            <p><a href="#" style="color:#ccc; text-decoration:none;">Sustainability</a></p>
            <p><a href="#" style="color:#ccc; text-decoration:none;">Press</a></p>
        </div>

        <!-- SOCIAL -->
        <div>
            <h4 style="color:white; margin-bottom:20px;">Follow Us</h4>
            <div style="display:flex; gap:16px; font-size:20px;">
                <a href="#" style="color:white; text-decoration:none;">📷</a>
                <a href="#" style="color:white; text-decoration:none;">📘</a>
                <a href="#" style="color:white; text-decoration:none;">📌</a>
                <a href="#" style="color:white; text-decoration:none;">🐦</a>
            </div>
        </div>

    </div>

    <!-- BOTTOM BAR -->
    <div style="
        max-width:1200px;
        margin:40px auto 0;
        padding:20px 40px 0;
        border-top:1px solid #222;
        display:flex;
        justify-content:space-between;
        align-items:center;
        flex-wrap:wrap;
        color:#888;
        font-size:14px;
    ">
        <p>© 2025 Pawelier. All rights reserved.</p>

        <div style="display:flex; gap:20px; color:white;">
            <span>Visa</span>
            <span>Mastercard</span>
            <span>American Express</span>
            <span>PayPal</span>
        </div>
    </div>
</footer>

@endsection
