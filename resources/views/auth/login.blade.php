<x-guest-layout>
    <x-authentication-card>

        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        {{-- Validation Errors --}}
        <x-validation-errors class="mb-4" />

        {{-- Password Reset Status --}}
        @if (session('status'))
            <div class="mb-4 text-sm text-green-600 text-center">
                {{ session('status') }}
            </div>
        @endif

        {{-- Invalid Login Error --}}
        @if (session('error'))
            <div class="mb-4 bg-red-100 text-red-700 p-3 rounded text-center">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div>
                <x-label for="email" value="Email" />
                <x-input id="email"
                         class="block mt-1 w-full"
                         type="email"
                         name="email"
                         value="{{ old('email') }}"
                         required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" value="Password" />
                <x-input id="password"
                         class="block mt-1 w-full"
                         type="password"
                         name="password"
                         required />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label class="flex items-center">
                    <x-checkbox name="remember" />
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-between mt-6">

                <a href="{{ route('password.request') }}"
                   class="text-sm text-gray-600 hover:text-gray-900 underline">
                    Forgot your password?
                </a>

                <x-button>
                    Log in
                </x-button>

            </div>

            <!-- Register -->
            <div class="text-center mt-6 text-sm text-gray-600">
                Don’t have an account?
                <a href="{{ route('register') }}" class="font-semibold underline">
                    Create one
                </a>
            </div>

        </form>

    </x-authentication-card>
</x-guest-layout>
