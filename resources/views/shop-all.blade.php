@extends('layouts.app')

@section('content')

<section style="padding:100px 0; background:#f9f7f6;">
    <div style="
        max-width:1100px;
        margin:auto;
        background:white;
        border-radius:24px;
        padding:50px;
        box-shadow:0 10px 30px rgba(0,0,0,0.08);
    ">

        <h1 style="
            text-align:center;
            font-size:36px;
            letter-spacing:6px;
            margin-bottom:50px;
        ">
            PRODUCTS
        </h1>

        <div style="
            display:flex;
            gap:24px;
            justify-content:center;
            flex-wrap:wrap;
        ">

            <!-- WEAR -->
            <a href="/shop/wear"
               style="width:240px; height:150px; position:relative; overflow:hidden; border-radius:16px; display:block;">
                <img src="/images/dog-wear.jpg"
                     style="width:100%; height:100%; object-fit:cover;">
                <div style="position:absolute; inset:0; display:flex; align-items:center; justify-content:center;">
                    <span style="background:rgba(255,255,255,0.85); padding:8px 22px; letter-spacing:4px;">
                        WEAR
                    </span>
                </div>
            </a>

            <!-- WALK -->
            <a href="/shop/walk"
               style="width:240px; height:150px; position:relative; overflow:hidden; border-radius:16px; display:block;">
                <img src="/images/dog-walk.jpg"
                     style="width:100%; height:100%; object-fit:cover;">
                <div style="position:absolute; inset:0; display:flex; align-items:center; justify-content:center;">
                    <span style="background:rgba(255,255,255,0.85); padding:8px 22px; letter-spacing:4px;">
                        WALK
                    </span>
                </div>
            </a>

            <!-- LIVING -->
            <a href="/shop/living"
               style="width:240px; height:150px; position:relative; overflow:hidden; border-radius:16px; display:block;">
                <img src="/images/dog-living.jpg"
                     style="width:100%; height:100%; object-fit:cover;">
                <div style="position:absolute; inset:0; display:flex; align-items:center; justify-content:center;">
                    <span style="background:rgba(255,255,255,0.85); padding:8px 22px; letter-spacing:4px;">
                        LIVING
                    </span>
                </div>
            </a>

            <!-- TRAVEL -->
            <a href="/shop/travel"
               style="width:240px; height:150px; position:relative; overflow:hidden; border-radius:16px; display:block;">
                <img src="/images/dog-travel.jpg"
                     style="width:100%; height:100%; object-fit:cover;">
                <div style="position:absolute; inset:0; display:flex; align-items:center; justify-content:center;">
                    <span style="background:rgba(255,255,255,0.85); padding:8px 22px; letter-spacing:4px;">
                        TRAVEL
                    </span>
                </div>
            </a>

        </div>
    </div>
</section>


<section style="padding:80px 0; background:#f7f3f5;">
    <div style="
        max-width:1200px;
        margin:auto;
        background:#fff6f8;
        border-radius:28px;
        padding:50px;
        box-shadow:0 12px 35px rgba(0,0,0,0.08);
        text-align:center;
    ">

        <h2 style="font-size:32px; margin-bottom:10px;">
            Follow us on Instagram
        </h2>

        <p style="color:#666; margin-bottom:40px;">
            Join our community for daily inspiration and a closer look at our creations
        </p>

        <div style="
            display:flex;
            gap:18px;
            justify-content:center;
            flex-wrap:wrap;
            margin-bottom:40px;
        ">

            <!-- CARD 1 (IMAGE) -->
            <a href="https://www.instagram.com/" target="_blank"
               style="width:180px; height:260px; border-radius:16px; overflow:hidden; display:block;">
                <video autoplay muted loop playsinline
                       style="width:100%; height:100%; object-fit:cover;">
                    <source src="/videos/inster1.mp4" type="video/mp4">
                </video>
            </a>

            <!-- CARD 2 (VIDEO) -->
            <a href="https://www.instagram.com/" target="_blank"
               style="width:180px; height:260px; border-radius:16px; overflow:hidden; display:block;">
                <video autoplay muted loop playsinline
                       style="width:100%; height:100%; object-fit:cover;">
                    <source src="/videos/inster2.mp4" type="video/mp4">
                </video>
            </a>

            <!-- CARD 3 -->
            <a href="https://www.instagram.com/" target="_blank"
               style="width:180px; height:260px; border-radius:16px; overflow:hidden; display:block;">
                <video autoplay muted loop playsinline
                       style="width:100%; height:100%; object-fit:cover;">
                    <source src="/videos/inster3.mp4" type="video/mp4">
                </video>
            </a>

            <!-- CARD 4 -->
            <a href="https://www.instagram.com/" target="_blank"
               style="width:180px; height:260px; border-radius:16px; overflow:hidden; display:block;">
                <video autoplay muted loop playsinline
                       style="width:100%; height:100%; object-fit:cover;">
                    <source src="/videos/inster4.mp4" type="video/mp4">
                </video>
            </a>

            <!-- CARD 5 -->
            <a href="https://www.instagram.com/" target="_blank"
               style="width:180px; height:260px; border-radius:16px; overflow:hidden; display:block;">
                <video autoplay muted loop playsinline
                       style="width:100%; height:100%; object-fit:cover;">
                    <source src="/videos/inster5.mp4" type="video/mp4">
                </video>
            </a>

        </div>

        <!-- BUTTON -->
        <a href="https://www.instagram.com/" target="_blank"
           style="
            display:inline-block;
            background:black;
            color:white;
            padding:14px 34px;
            border-radius:10px;
            text-decoration:none;
            font-size:16px;
           ">
            Visit Instagram
        </a>

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
