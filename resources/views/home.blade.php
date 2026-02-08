@extends('layouts.app')

@section('content')

<!-- HERO VIDEO -->
<section class="relative w-full min-h-screen overflow-hidden">

    <!-- VIDEO -->
    <video
        autoplay
        muted
        loop
        playsinline
        class="absolute top-0 left-0 w-full h-full object-cover"
    >
        <source src="/videos/dog-video2.mp4" type="video/mp4">
    </video>

    <!-- OVERLAY -->
    <div class="absolute inset-0 bg-black/40"></div>

    <!-- TEXT OVERLAY -->
<div style="
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    text-align:center;
    color:white;
    z-index:10;
">

    <p style="
        font-size:14px;
        letter-spacing:3px;
        font-weight:700;
        margin-bottom:12px;
    ">
        EXPLORE OUR LATEST COLLECTION
    </p>

    <h1 style="
        font-size:56px;
        font-weight:800;
        letter-spacing:2px;
        margin-bottom:18px;
    ">
        TRAVEL WITH TIMELESS STYLE
    </h1>

    <p style="
        font-size:18px;
        font-weight:600;
        margin-bottom:30px;
    ">
        Luxurious essentials for your beloved companions
    </p>

    <a href="/shop-all" style="
        display:inline-block;
        padding:14px 36px;
        background:black;
        color:white;
        font-size:14px;
        letter-spacing:3px;
        border-radius:8px;
        text-decoration:none;
        font-weight:700;
        transition:0.3s;
    "
    onmouseover="this.style.background='#111'"
    onmouseout="this.style.background='black'">
        SHOP NOW
    </a>

</div>

</section>

<section style="padding:80px 0; background:#f9fafb;">
    <div style="max-width:1100px; margin:auto; background:white; border-radius:24px; padding:40px; box-shadow:0 10px 30px rgba(0,0,0,0.08);">

        <h2 style="text-align:center; font-size:28px; margin-bottom:40px;">
            Featured Categories
        </h2>

        <div style="display:flex; gap:20px; justify-content:center; flex-wrap:wrap;">

            <!-- CARD -->
            <a href="/shop/wear"
               style="width:220px; height:140px; position:relative; overflow:hidden; border-radius:14px; display:block;">
                <img src="/images/dog-wear.jpg"
                     style="width:100%; height:100%; object-fit:cover; display:block;">
                <div style="position:absolute; inset:0; display:flex; align-items:center; justify-content:center;">
                    <span style="background:rgba(255,255,255,0.8); padding:6px 18px; letter-spacing:3px;">
                        WEAR
                    </span>
                </div>
            </a>

            <a href="/shop/walk"
               style="width:220px; height:140px; position:relative; overflow:hidden; border-radius:14px; display:block;">
                <img src="/images/dog-walk.jpg"
                     style="width:100%; height:100%; object-fit:cover; display:block;">
                <div style="position:absolute; inset:0; display:flex; align-items:center; justify-content:center;">
                    <span style="background:rgba(255,255,255,0.8); padding:6px 18px; letter-spacing:3px;">
                        WALK
                    </span>
                </div>
            </a>

            <a href="/shop/living"
               style="width:220px; height:140px; position:relative; overflow:hidden; border-radius:14px; display:block;">
                <img src="/images/dog-living.jpg"
                     style="width:100%; height:100%; object-fit:cover; display:block;">
                <div style="position:absolute; inset:0; display:flex; align-items:center; justify-content:center;">
                    <span style="background:rgba(255,255,255,0.8); padding:6px 18px; letter-spacing:3px;">
                        LIVING
                    </span>
                </div>
            </a>

            <a href="/shop/travel"
               style="width:220px; height:140px; position:relative; overflow:hidden; border-radius:14px; display:block;">
                <img src="/images/dog-travel.jpg"
                     style="width:100%; height:100%; object-fit:cover; display:block;">
                <div style="position:absolute; inset:0; display:flex; align-items:center; justify-content:center;">
                    <span style="background:rgba(255,255,255,0.8); padding:6px 18px; letter-spacing:3px;">
                        TRAVEL
                    </span>
                </div>
            </a>

        </div>
    </div>
</section>


<section style="padding:100px 0; background:#f9fafb;">
    <div style="
        max-width:1200px;
        margin:auto;
        background:#e7cfe0;
        border-radius:32px;
        padding:60px;
    ">

        <h2 style="
            text-align:center;
            font-size:32px;
            margin-bottom:60px;
            font-family:serif;
        ">
            Best Sellers
        </h2>

        <div style="
            display:flex;
            gap:30px;
            justify-content:center;
            flex-wrap:wrap;
        ">

            <!-- PRODUCT 1 -->
            <div style="
                width:240px;
                background:white;
                border-radius:18px;
                padding:16px;
            ">
                <div style="
                    width:100%;
                    height:180px;
                    overflow:hidden;
                    border-radius:14px;
                ">
                    <img src="/images/bestseller1.png"
                         style="width:100%; height:100%; object-fit:cover;">
                </div>

                <h3 style="margin:16px 0 6px; font-size:16px;">
                    All-Weather Hound Coat
                </h3>

                <p>
                    <span style="text-decoration:line-through; color:#888;">$99</span>
                    <strong style="margin-left:10px;">$79</strong>
                </p>
            </div>

            <!-- PRODUCT 2 -->
            <div style="
                width:240px;
                background:white;
                border-radius:18px;
                padding:16px;
            ">
                <div style="
                    width:100%;
                    height:180px;
                    overflow:hidden;
                    border-radius:14px;
                ">
                    <img src="/images/bestseller2.png"
                         style="width:100%; height:100%; object-fit:cover;">
                </div>

                <h3 style="margin:16px 0 6px; font-size:16px;">
                    CloudSoft Travel Blanket
                </h3>

                <p>
                    <span style="text-decoration:line-through; color:#888;">$49</span>
                    <strong style="margin-left:10px;">$39</strong>
                </p>
            </div>

            <!-- PRODUCT 3 -->
            <div style="
                width:240px;
                background:white;
                border-radius:18px;
                padding:16px;
            ">
                <div style="
                    width:100%;
                    height:180px;
                    overflow:hidden;
                    border-radius:14px;
                ">
                    <img src="/images/bestseller3.png"
                         style="width:100%; height:100%; object-fit:cover;">
                </div>

                <h3 style="margin:16px 0 6px; font-size:16px;">
                    Kiyott Earmuff Headband
                </h3>

                <p>
                    <span style="text-decoration:line-through; color:#888;">$25</span>
                    <strong style="margin-left:10px;">$19</strong>
                </p>
            </div>

            <!-- PRODUCT 4 -->
            <div style="
                width:240px;
                background:white;
                border-radius:18px;
                padding:16px;
            ">
                <div style="
                    width:100%;
                    height:180px;
                    overflow:hidden;
                    border-radius:14px;
                ">
                    <img src="/images/bestseller4.png"
                         style="width:100%; height:100%; object-fit:cover;">
                </div>

                <h3 style="margin:16px 0 6px; font-size:16px;">
                    Matte Ceramic Bowl
                </h3>

                <p>
                    <strong>$45</strong>
                </p>
            </div>

        </div>

        <!-- BUTTON -->
        <div style="text-align:center; margin-top:60px;">
            <a href="/shop"
               style="
                   background:black;
                   color:white;
                   padding:16px 40px;
                   border-radius:12px;
                   text-decoration:none;
                   font-size:16px;
                   display:inline-block;
               ">
                Shop All Best Sellers
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
