@extends('layouts.app')

@section('content')

<section style="padding:80px 0; background:#faf7f5;">

    <!-- TITLE -->
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
        WEAR
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

        <!-- PRODUCT CARD -->
        <div style="
            background:white;
            border-radius:24px;
            padding:24px;
            box-shadow:0 10px 30px rgba(0,0,0,0.06);
        ">
            <img src="/images/wear1.png" style="width:100%; height:260px; object-fit:cover; border-radius:16px;">

<h3 style="font-size:22px; margin:20px 0 10px; font-family:serif;">
    Luxury Pet Collar
</h3>

<div style="border:1px solid #eee; padding:14px; border-radius:12px; font-size:18px; width:120px;">
    Rs.4000.00
</div>

<a href="{{ route('cart.add', [
    'id' => 1,
    'name' => 'Luxury Pet Collar',
    'price' => 4000,
    'image' => '/images/wear1.png'
]) }}">
    Add to Cart
</a>

        </div>

        <!-- PRODUCT CARD -->
        <div style="
            background:white;
            border-radius:24px;
            padding:24px;
            box-shadow:0 10px 30px rgba(0,0,0,0.06);
        ">
            <img src="/images/wear2.png" style="width:100%; height:260px; object-fit:cover; border-radius:16px;">

<h3 style="font-size:22px; margin:20px 0 10px; font-family:serif;">
    Designer Sweater
</h3>

<div style="border:1px solid #eee; padding:14px; border-radius:12px; font-size:18px; width:120px;">
    Rs.3000.00
</div>

<a href="{{ route('cart.add', [
    'id' => 2,
    'name' => 'Designer Sweater',
    'price' => 3000,
    'image' => '/images/wear2.png'
]) }}">
    Add to Cart
</a>

        </div>

        <!-- PRODUCT CARD -->
        <div style="
            background:white;
            border-radius:24px;
            padding:24px;
            box-shadow:0 10px 30px rgba(0,0,0,0.06);
        ">
            <img src="/images/wear3.png" style="width:100%; height:260px; object-fit:cover; border-radius:16px;">

<h3 style="font-size:22px; margin:20px 0 10px; font-family:serif;">
    Bow Tie Set
</h3>

<div style="border:1px solid #eee; padding:14px; border-radius:12px; font-size:18px; width:120px;">
    Rs.2000.00
</div>

<a href="{{ route('cart.add', [
    'id' => 3,
    'name' => 'Bow Tie Set',
    'price' => 2000,
    'image' => '/images/wear3.png'
]) }}">
    Add to Cart
</a>

        </div>

         <!-- PRODUCT CARD -->
        <div style="
            background:white;
            border-radius:24px;
            padding:24px;
            box-shadow:0 10px 30px rgba(0,0,0,0.06);
        ">
           <img src="/images/wear4.png" style="width:100%; height:260px; object-fit:cover; border-radius:16px;">

<h3 style="font-size:22px; margin:20px 0 10px; font-family:serif;">
    Rain Jacket
</h3>

<div style="border:1px solid #eee; padding:14px; border-radius:12px; font-size:18px; width:120px;">
    Rs.5000.00
</div>

<a href="{{ route('cart.add', [
    'id' => 4,
    'name' => 'Rain Jacket',
    'price' => 5000,
    'image' => '/images/wear4.png'
]) }}">
    Add to Cart
</a>

        </div>

         <!-- PRODUCT CARD -->
        <div style="
            background:white;
            border-radius:24px;
            padding:24px;
            box-shadow:0 10px 30px rgba(0,0,0,0.06);
        ">
            <img src="/images/w5.jpg" style="width:100%; height:260px; object-fit:cover; border-radius:16px;">

<h3 style="font-size:22px; margin:20px 0 10px; font-family:serif;">
    Party Dress
</h3>

<div style="border:1px solid #eee; padding:14px; border-radius:12px; font-size:18px; width:120px;">
    Rs.4500.00
</div>

<a href="{{ route('cart.add', [
    'id' => 5,
    'name' => 'Party Dress',
    'price' => 4500,
    'image' => '/images/w5.jpg'
]) }}">
    Add to Cart
</a>

        </div>

         <!-- PRODUCT CARD -->
        <div style="
            background:white;
            border-radius:24px;
            padding:24px;
            box-shadow:0 10px 30px rgba(0,0,0,0.06);
        ">
            <img src="/images/w6.jpg" style="width:100%; height:260px; object-fit:cover; border-radius:16px;">

<h3 style="font-size:22px; margin:20px 0 10px; font-family:serif;">
    Winter Coat
</h3>

<div style="border:1px solid #eee; padding:14px; border-radius:12px; font-size:18px; width:120px;">
    Rs.6000.00
</div>

<a href="{{ route('cart.add', [
    'id' => 6,
    'name' => 'Winter Coat',
    'price' => 6000,
    'image' => '/images/w6.jpg'
]) }}">
    Add to Cart
</a>

        </div>
         <!-- PRODUCT CARD -->
        <div style="
            background:white;
            border-radius:24px;
            padding:24px;
            box-shadow:0 10px 30px rgba(0,0,0,0.06);
        ">
            <img src="/images/w7.jpg" style="width:100%; height:260px; object-fit:cover; border-radius:16px;">

<h3 style="font-size:22px; margin:20px 0 10px; font-family:serif;">
    Summer T-Shirt
</h3>

<div style="border:1px solid #eee; padding:14px; border-radius:12px; font-size:18px; width:120px;">
    Rs.2500.00
</div>

<a href="{{ route('cart.add', [
    'id' => 7,
    'name' => 'Summer T-Shirt',
    'price' => 2500,
    'image' => '/images/w7.jpg'
]) }}">
    Add to Cart
</a>


        </div>
         <!-- PRODUCT CARD -->
        <div style="
            background:white;
            border-radius:24px;
            padding:24px;
            box-shadow:0 10px 30px rgba(0,0,0,0.06);
        ">
            <img src="/images/w8.jpg" style="width:100%; height:260px; object-fit:cover; border-radius:16px;">

<h3 style="font-size:22px; margin:20px 0 10px; font-family:serif;">
    Bandana Collection
</h3>

<div style="border:1px solid #eee; padding:14px; border-radius:12px; font-size:18px; width:120px;">
    Rs.1500.00
</div>

<a href="{{ route('cart.add', [
    'id' => 8,
    'name' => 'Bandana Collection',
    'price' => 1500,
    'image' => '/images/w8.jpg'
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
