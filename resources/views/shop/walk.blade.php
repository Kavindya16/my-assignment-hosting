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
        WALK
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
            <img src="/images/walk1.png"
                 style="width:100%; height:260px; object-fit:cover; border-radius:16px;">

            <h3 style="font-size:22px; margin:20px 0 10px; font-family:serif;">
                Trailblazer Collar
            </h3>

            <div style="border:1px solid #eee; padding:14px; border-radius:12px; width:120px;">
                £21.00
            </div>

           <a href="{{ route('cart.add', [
    'id' => 1,
    'name' => 'Trailblazer Collar',
    'price' => 21.00,
    'image' => '/images/walk1.png'
]) }}"
style="
 display:inline-block;
 margin-top:16px;
 color:#7c3aed;
 text-decoration:underline;
">
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
            <img src="/images/walk2.png"
                 style="width:100%; height:260px; object-fit:cover; border-radius:16px;">

            <h3 style="font-size:22px; margin:20px 0 10px; font-family:serif;">
                Bow Suspender Harness
            </h3>

            <div style="border:1px solid #eee; padding:14px; border-radius:12px; width:120px;">
                £58.00
            </div>

            <a href="{{ route('cart.add', [
    'id' => 1,
    'name' => 'Bow Suspender Harness',
    'price' => 58.00,
    'image' => '/images/walk2.png'
]) }}"
style="
 display:inline-block;
 margin-top:16px;
 color:#7c3aed;
 text-decoration:underline;
">
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
            <img src="/images/walk3.png"
                 style="width:100%; height:260px; object-fit:cover; border-radius:16px;">

            <h3 style="font-size:22px; margin:20px 0 10px; font-family:serif;">
                Comfort Recovery Harness
            </h3>

            <div style="border:1px solid #eee; padding:14px; border-radius:12px; width:120px;">
                £40.00
            </div>

            <a href="{{ route('cart.add', [
    'id' => 1,
    'name' => 'Comfort Recovery Harness',
    'price' => 40.00,
    'image' => '/images/walk3.png'
]) }}"
style="
 display:inline-block;
 margin-top:16px;
 color:#7c3aed;
 text-decoration:underline;
">
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
            <img src="/images/walk4.png"
                 style="width:100%; height:260px; object-fit:cover; border-radius:16px;">

            <h3 style="font-size:22px; margin:20px 0 10px; font-family:serif;">
               Lilco Braided-Leash Moonbeam
            </h3>

            <div style="border:1px solid #eee; padding:14px; border-radius:12px; width:120px;">
                £58.00
            </div>

            <a href="{{ route('cart.add', [
    'id' => 1,
    'name' => 'Lilco Braided-Leash Moonbeam',
    'price' => 58.00,
    'image' => '/images/walk4.png'
]) }}"
style="
 display:inline-block;
 margin-top:16px;
 color:#7c3aed;
 text-decoration:underline;
">
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
            <img src="/images/walk5.png"
                 style="width:100%; height:260px; object-fit:cover; border-radius:16px;">

            <h3 style="font-size:22px; margin:20px 0 10px; font-family:serif;">
                Reflective Safety Leash
            </h3>

            <div style="border:1px solid #eee; padding:14px; border-radius:12px; width:120px;">
                £58.00
            </div>

           <a href="{{ route('cart.add', [
    'id' => 1,
    'name' => 'Reflective Safety Leash',
    'price' => 58.00,
    'image' => '/images/walk5.png'
]) }}"
style="
 display:inline-block;
 margin-top:16px;
 color:#7c3aed;
 text-decoration:underline;
">
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
            <img src="/images/walk6.png"
                 style="width:100%; height:260px; object-fit:cover; border-radius:16px;">

            <h3 style="font-size:22px; margin:20px 0 10px; font-family:serif;">
                Adventure Dog Harness
            </h3>

            <div style="border:1px solid #eee; padding:14px; border-radius:12px; width:120px;">
                £58.00
            </div>

           <a href="{{ route('cart.add', [
    'id' => 1,
    'name' => 'Adventure Dog Harness',
    'price' => 58.00,
    'image' => '/images/walk6.png'
]) }}"
style="
 display:inline-block;
 margin-top:16px;
 color:#7c3aed;
 text-decoration:underline;
">
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
            <img src="/images/walk7.jpg"
                 style="width:100%; height:260px; object-fit:cover; border-radius:16px;">

            <h3 style="font-size:22px; margin:20px 0 10px; font-family:serif;">
                Bow Suspender Harness
            </h3>

            <div style="border:1px solid #eee; padding:14px; border-radius:12px; width:120px;">
                £58.00
            </div>

            <a href="{{ route('cart.add', [
    'id' => 1,
    'name' => 'Bow Suspender Harness',
    'price' => 58.00,
    'image' => '/images/walk7.jpg'
]) }}"
style="
 display:inline-block;
 margin-top:16px;
 color:#7c3aed;
 text-decoration:underline;
">
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
            <img src="/images/walk8.jpg"
                 style="width:100%; height:260px; object-fit:cover; border-radius:16px;">

            <h3 style="font-size:22px; margin:20px 0 10px; font-family:serif;">
                Bow Suspender Harness
            </h3>

            <div style="border:1px solid #eee; padding:14px; border-radius:12px; width:120px;">
                £58.00
            </div>

            <a href="{{ route('cart.add', [
    'id' => 1,
    'name' => 'Bow Suspender Harness',
    'price' => 58.00,
    'image' => '/images/walk8.jpg'
]) }}"
style="
 display:inline-block;
 margin-top:16px;
 color:#7c3aed;
 text-decoration:underline;
">
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
