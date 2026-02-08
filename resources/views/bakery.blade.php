@extends('layouts.app')

@section('content')

<!-- BAKERY HERO VIDEO -->
<section style="position:relative; width:100%; height:100vh; overflow:hidden;">

    <!-- VIDEO -->
    <video autoplay muted loop playsinline
           style="
               position:absolute;
               top:0;
               left:0;
               width:100%;
               height:100%;
               object-fit:cover;
           ">
        <source src="/videos/bakery-video.mp4" type="video/mp4">
    </video>

    <!-- DARK OVERLAY -->
    <div style="
        position:absolute;
        inset:0;
        background:rgba(0,0,0,0.35);
    "></div>

    <!-- TEXT -->
    <div style="
        position:absolute;
        inset:0;
        display:flex;
        align-items:center;
        justify-content:center;
        text-align:center;
        z-index:2;
    ">
        <h1 style="
            color:white;
            font-size:48px;
            letter-spacing:6px;
            font-family:serif;
        ">
            WELCOME TO PAWELIER BAKERY
        </h1>
    </div>

</section>

{{-- BAKERY SPECIAL TREATS --}}
<section style="padding:100px 0; background:#f9f7f6;">

    <h2 style="
        text-align:center;
        font-size:36px;
        letter-spacing:4px;
        margin-bottom:60px;
        font-family:serif;
    ">
        BAKERY SPECIAL TREATS
    </h2>

    <div style="
        max-width:1200px;
        margin:auto;
        display:grid;
        grid-template-columns:repeat(auto-fit, minmax(280px, 1fr));
        gap:40px;
        padding:0 20px;
    ">

        <!-- CARD -->
        <div style="
            background:white;
            border-radius:20px;
            padding:24px;
            box-shadow:0 10px 30px rgba(0,0,0,0.06);
        ">
            <img src="/images/bakery1.png"
                 style="
                    width:100%;
                    height:220px;
                    object-fit:cover;
                    border-radius:14px;
                 ">

            <h3 style="margin:20px 0 10px; font-family:serif;">
                Strawberry Paw Biscuits
            </h3>

            <div style="
                border:1px solid #eee;
                padding:12px;
                border-radius:10px;
                margin-bottom:12px;
            ">
                £12.00
            </div>

            <a href="{{ route('cart.add', [
    'id' => 1,
    'name' => 'Strawberry Paw Biscuits',
    'price' => 12.00,
    'image' => '/images/bakery1.png'
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

        <!-- CARD -->
        <div style="
            background:white;
            border-radius:20px;
            padding:24px;
            box-shadow:0 10px 30px rgba(0,0,0,0.06);
        ">
            <img src="/images/bakery2.png"
                 style="
                    width:100%;
                    height:220px;
                    object-fit:cover;
                    border-radius:14px;
                 ">

            <h3 style="margin:20px 0 10px; font-family:serif;">
                Fish Cookie
            </h3>

            <div style="
                border:1px solid #eee;
                padding:12px;
                border-radius:10px;
                margin-bottom:12px;
            ">
                £15.00
            </div>

            <a href="{{ route('cart.add', [
    'id' => 1,
    'name' => 'Fish Cookie',
    'price' => 15.00,
    'image' => '/images/bakery2.png'
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

        <!-- CARD -->
        <div style="
            background:white;
            border-radius:20px;
            padding:24px;
            box-shadow:0 10px 30px rgba(0,0,0,0.06);
        ">
            <img src="/images/bakery3.png"
                 style="
                    width:100%;
                    height:220px;
                    object-fit:cover;
                    border-radius:14px;
                 ">

            <h3 style="margin:20px 0 10px; font-family:serif;">
                Dino Bone Cookies
            </h3>

            <div style="
                border:1px solid #eee;
                padding:12px;
                border-radius:10px;
                margin-bottom:12px;
            ">
                £18.00
            </div>

            <a href="{{ route('cart.add', [
    'id' => 1,
    'name' => 'Dino Bone Cookies',
    'price' => 18.00,
    'image' => '/images/bakery3.png'
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

        <!-- CARD -->
        <div style="
            background:white;
            border-radius:20px;
            padding:24px;
            box-shadow:0 10px 30px rgba(0,0,0,0.06);
        ">
            <img src="/images/bakery4.png"
                 style="
                    width:100%;
                    height:220px;
                    object-fit:cover;
                    border-radius:14px;
                 ">

            <h3 style="margin:20px 0 10px; font-family:serif;">
                Mahroom pie
            </h3>

            <div style="
                border:1px solid #eee;
                padding:12px;
                border-radius:10px;
                margin-bottom:12px;
            ">
                £15.00
            </div>

            <a href="{{ route('cart.add', [
    'id' => 1,
    'name' => ' Mahroom pie',
    'price' => 15.00,
    'image' => '/images/bakery4.png'
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

        <!-- CARD -->
        <div style="
            background:white;
            border-radius:20px;
            padding:24px;
            box-shadow:0 10px 30px rgba(0,0,0,0.06);
        ">
            <img src="/images/bakery5.png"
                 style="
                    width:100%;
                    height:220px;
                    object-fit:cover;
                    border-radius:14px;
                 ">

            <h3 style="margin:20px 0 10px; font-family:serif;">
                Creamy Fish Sticks
            </h3>

            <div style="
                border:1px solid #eee;
                padding:12px;
                border-radius:10px;
                margin-bottom:12px;
            ">
                £15.00
            </div>

            <a href="{{ route('cart.add', [
    'id' => 1,
    'name' => 'Creamy Fish Sticks',
    'price' => 15.00,
    'image' => '/images/bakery5.png'
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

        <!-- CARD -->
        <div style="
            background:white;
            border-radius:20px;
            padding:24px;
            box-shadow:0 10px 30px rgba(0,0,0,0.06);
        ">
            <img src="/images/bakery6.png"
                 style="
                    width:100%;
                    height:220px;
                    object-fit:cover;
                    border-radius:14px;
                 ">

            <h3 style="margin:20px 0 10px; font-family:serif;">
                Chicken Crunch Sticks
            </h3>

            <div style="
                border:1px solid #eee;
                padding:12px;
                border-radius:10px;
                margin-bottom:12px;
            ">
                £15.00
            </div>

            <a href="{{ route('cart.add', [
    'id' => 1,
    'name' => 'Chicken Crunch Sticks',
    'price' => 15.00,
    'image' => '/images/bakery6.png'
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
