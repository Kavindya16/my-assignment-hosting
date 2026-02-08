@extends('layouts.app')

@section('content')


<!-- ABOUT HERO SECTION -->
<section style="
    position: relative;
    width: 100%;
    height: 80vh;
    background-image: url('/images/about1.jpg');
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
">

    <!-- Dark overlay -->
    <div style="
        position: absolute;
        inset: 0;
        background: rgba(0,0,0,0.35);
    "></div>

    <!-- Text content -->
    <div style="
        position: relative;
        text-align: center;
        color: white;
        z-index: 2;
        max-width: 800px;
        padding: 20px;
    ">
        <h1 style="
            font-size: 48px;
            margin-bottom: 15px;
            font-family: serif;
        ">
            About Pawelier
        </h1>

        <p style="
            font-size: 18px;
            opacity: 0.9;
            margin-bottom: 10px;
        ">
            Luxury essentials for the pets you love.
        </p>

        <span style="
            font-size: 14px;
            opacity: 0.8;
        ">
            Home &nbsp; • &nbsp; About
        </span>
    </div>

</section>

<!-- WHO WE ARE SECTION -->
<section style="padding:80px 0; background:#fbf9f7;">
    <div style="max-width:1200px; margin:auto; padding:0 20px;">

        <!-- Top Content -->
        <div style="
            display:flex;
            gap:50px;
            align-items:center;
            flex-wrap:wrap;
        ">

            <!-- Text -->
            <div style="flex:1; min-width:300px;">
                <h2 style="font-size:36px; margin-bottom:20px;">
                    Who We Are
                </h2>

                <p style="font-size:16px; line-height:1.7; color:#444;">
                    We believe pets deserve the same care, comfort, and style as their humans.
                    From elegant walking sets to cozy living accessories and a gourmet bakery,
                    Pawelier blends design and durability—so your best friend can live their best life.
                </p>

                <ul style="list-style:none; padding:0; margin-top:25px;">
                    <li style="margin-bottom:10px;">✔ Curated, premium materials</li>
                    <li style="margin-bottom:10px;">✔ Human-grade bakery treats</li>
                    <li>✔ Comfort-first design & fit</li>
                </ul>
            </div>

            <!-- Image -->
            <div style="flex:1; min-width:300px; text-align:right;">
                <img src="/images/about2.jpg"
                     style="
                        width:100%;
                        max-width:450px;
                        border-radius:20px;
                        box-shadow:0 15px 40px rgba(0,0,0,0.15);
                     ">
            </div>
        </div>

        <!-- Bottom Cards -->
        <div style="
            display:grid;
            grid-template-columns:repeat(auto-fit, minmax(280px, 1fr));
            gap:25px;
            margin-top:70px;
        ">

            <!-- Card 1 -->
            <div style="
                background:white;
                padding:30px;
                border-radius:20px;
                box-shadow:0 10px 30px rgba(0,0,0,0.05);
            ">
                <h3>💛 Our Mission</h3>
                <p style="margin-top:10px; color:#555;">
                    Bring joy, elegance, and well-being to every pet’s everyday life.
                </p>
            </div>

            <!-- Card 2 -->
            <div style="
                background:white;
                padding:30px;
                border-radius:20px;
                box-shadow:0 10px 30px rgba(0,0,0,0.05);
            ">
                <h3>🛡 Our Promise</h3>
                <p style="margin-top:10px; color:#555;">
                    Quality you can trust, with transparency from sourcing to delivery.
                </p>
            </div>

            <!-- Card 3 -->
            <div style="
                background:white;
                padding:30px;
                border-radius:20px;
                box-shadow:0 10px 30px rgba(0,0,0,0.05);
            ">
                <h3>⭐ Our Values</h3>
                <ul style="margin-top:10px; color:#555;">
                    <li>Care — pet-first decisions</li>
                    <li>Luxury — refined comfort</li>
                    <li>Trust — consistent quality</li>
                </ul>
            </div>

        </div>

    </div>
</section>

<!-- OUR STORY SECTION -->
<section style="padding:80px 0; background:#fbf9f7;">
    <div style="max-width:1200px; margin:auto; padding:0 20px;">

        <!-- Image Row -->
        <div style="
            display:flex;
            gap:20px;
            overflow-x:auto;
            margin-bottom:50px;
        ">
            <img src="/images/a1 (1).jpg" style="height:160px; border-radius:16px;">
            <img src="/images/a1 (2).jpg" style="height:160px; border-radius:16px;">
            <img src="/images/a1 (3).jpg" style="height:160px; border-radius:20px;">
            <img src="/images/a1 (5).jpg" style="height:160px; border-radius:16px;">
        </div>

        <!-- Text -->
        <div style="max-width:800px;">
            <h2 style="font-size:34px; margin-bottom:15px;">Our Story</h2>
            <p style="font-size:16px; line-height:1.7; color:#555;">
                What began as a small passion project became a community of pet lovers
                searching for smarter, safer, and more beautiful essentials. Today we
                work with trusted partners and test every product with real pets to
                ensure it meets our standards for safety, comfort, and style.
            </p>
        </div>

    </div>
</section>

<!-- CENTER CTA SECTION -->
<section style="padding:80px 0; background:#fbf9f7;">
    <div style="display:flex; justify-content:center;">

        <div style="
            width:100%;
            max-width:900px;
            padding:50px 40px;
            border-radius:22px;
            text-align:center;
            background:linear-gradient(135deg, #d4a15a, #e17ccf);
            color:#111;
        ">

            <h2 style="font-size:32px; margin-bottom:15px;">
                Ready to explore?
            </h2>

            <p style="font-size:16px; margin-bottom:30px;">
                Discover the collection across wear, walk, travel, living,
                and the Pawelier Bakery.
            </p>

            <div style="display:flex; gap:20px; justify-content:center; flex-wrap:wrap;">
                <a href="/shop-all"
                   style="
                        padding:12px 28px;
                        border-radius:10px;
                        background:white;
                        color:black;
                        text-decoration:none;
                        font-weight:600;
                   ">
                    Shop All
                </a>

                <a href="/pawelier-bakery"
                   style="
                        padding:12px 28px;
                        border-radius:10px;
                        border:2px solid #111;
                        color:#111;
                        text-decoration:none;
                        font-weight:600;
                   ">
                    Visit Bakery
                </a>
            </div>

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