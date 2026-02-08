@extends('layouts.app')

@section('content')

<div style="min-height:90vh;display:flex;align-items:center;justify-content:center;background:#f6f6f6;">

    <div style="width:420px;background:white;padding:50px;border-radius:18px;box-shadow:0 20px 60px rgba(0,0,0,0.08);text-align:center;">

        <h1 style="font-size:32px;font-weight:bold;margin-bottom:5px;">Pawelier</h1>
        <p style="color:#888;margin-bottom:30px;">Sign in to your account</p>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <input type="email" name="email" placeholder="Email"
                   required
                   style="width:100%;padding:14px;border:1px solid #ddd;border-radius:10px;margin-bottom:15px;">

            <input type="password" name="password" placeholder="Password"
                   required
                   style="width:100%;padding:14px;border:1px solid #ddd;border-radius:10px;margin-bottom:20px;">

            <button type="submit"
                    style="width:100%;padding:14px;background:black;color:white;border:none;border-radius:10px;font-size:16px;">
                Login
            </button>

        </form>

        <p style="margin-top:25px;color:#777;">
            Don’t have an account?
            <a href="/register" style="font-weight:bold;text-decoration:none;">Create one</a>
        </p>

    </div>

</div>

@endsection
