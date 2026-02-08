<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Pawelier</title>
    @livewireStyles


    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body style="margin:0; background:#fff;">

    <!-- Pawelier Navbar -->
    <div style="
        display:flex;
        justify-content:space-between;
        align-items:center;
        padding:20px 40px;
        background:white;
        border-bottom:1px solid #eee;
        letter-spacing:3px;
    ">

        <!-- Left menu -->
        <div style="display:flex; gap:40px;">
            <a href="/home">HOME</a>
            <a href="/shop-all">SHOP ALL</a>
            <a href="/bakery">PAWELIER BAKERY</a>
            <a href="/about">ABOUT US</a>
          @auth
    @if(auth()->user()->role === 'admin')
        <a href="/admin">
            Admin Dashboard
        </a>
    @endif
@endauth




        </div>

        <!-- Logo -->
        <div style="font-size:22px; font-weight:bold;">Pawelier</div>

        <!-- Right icons -->
        <div style="display:flex; gap:30px; font-size:18px;">
            <a href="/login"><i class="fa fa-user"></i></a>
            <a href="{{ route('cart.index') }}"><i class="fa fa-shopping-cart"></i></a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" style="background:none;border:none;cursor:pointer;">
                    <i class="fa fa-sign-out-alt"></i>
                </button>
            </form>
        </div>
    </div>

    <!-- Page Content -->
    <main style="width:100%;">
         {{ $slot ?? '' }}
        @yield('content')
    </main>
@livewireScripts

</body>
</html>
