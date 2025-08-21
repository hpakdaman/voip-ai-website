@extends('layouts.main')

@section('title', 'Sawtic | Admin Login - AI Call Center Management Portal')

@section('content')
<div class="relative min-h-screen" style="background: var(--voip-dark-bg);">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 rounded-full opacity-10" style="background: var(--voip-link);"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 rounded-full opacity-10" style="background: var(--voip-primary);"></div>
    </div>

    <div class="relative container mx-auto px-6 py-16 flex items-center justify-center min-h-screen">
        <div class="max-w-md w-full">
            <!-- Header -->
            <div class="text-center mb-8">
                <h1 class="text-4xl font-bold text-white mb-4">
                    Admin <span style="color: var(--voip-link);">Login</span>
                </h1>
                <p class="text-slate-300">
                    Access your Sawtic AI Call Center management dashboard
                </p>
            </div>

            <!-- Login Form -->
            <div class="bg-white rounded-3xl p-8 shadow-2xl">
                @if ($errors->any())
                    <div class="mb-6 p-4 rounded-xl border border-red-200 text-red-800" style="background: rgba(239, 68, 68, 0.1);">
                        <div class="flex items-center">
                            <i class="uil uil-times-circle text-red-600 text-xl mr-3"></i>
                            <div>
                                <h4 class="font-semibold">Login Failed</h4>
                                <ul class="mt-2 text-sm">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Field -->
                    <div class="mb-6">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="uil uil-envelope mr-2" style="color: var(--voip-link);"></i>
                            Email Address
                        </label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:border-transparent transition-all duration-300 @error('email') border-red-500 @enderror"
                               style="focus:ring-color: var(--voip-link);"
                               placeholder="admin@sawtic.com">
                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div class="mb-6">
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="uil uil-lock mr-2" style="color: var(--voip-link);"></i>
                            Password
                        </label>
                        <input id="password" type="password" name="password" required autocomplete="current-password"
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:border-transparent transition-all duration-300 @error('password') border-red-500 @enderror"
                               placeholder="Enter your password">
                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="mb-6">
                        <label class="flex items-center">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}
                                   class="w-4 h-4 rounded border-gray-300 focus:ring-2 focus:ring-offset-0 transition-all duration-300"
                                   style="color: var(--voip-primary); focus:ring-color: var(--voip-link);">
                            <span class="ml-2 text-sm text-gray-600">Remember me for 30 days</span>
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <div class="mb-6">
                        <button type="submit" 
                                class="w-full px-6 py-4 rounded-xl text-white font-semibold hover:scale-105 transform transition-all duration-300 shadow-lg"
                                style="background: var(--voip-primary);">
                            <i class="uil uil-signin mr-2"></i>
                            Sign In to Dashboard
                        </button>
                    </div>

                    <!-- Forgot Password Link -->
                    @if (Route::has('password.request'))
                        <div class="text-center">
                            <a href="{{ route('password.request') }}" 
                               class="text-sm font-medium hover:underline transition-colors"
                               style="color: var(--voip-link);">
                                <i class="uil uil-question-circle mr-1"></i>
                                Forgot your password?
                            </a>
                        </div>
                    @endif
                </form>
            </div>

            <!-- Back to Website -->
            <div class="text-center mt-8">
                <a href="{{ route('home') }}" 
                   class="inline-flex items-center text-slate-300 hover:text-white transition-colors">
                    <i class="uil uil-arrow-left mr-2"></i>
                    Back to Sawtic Website
                </a>
            </div>

            <!-- Security Notice -->
            <div class="mt-8 text-center">
                <div class="flex flex-wrap gap-6 items-center justify-center text-slate-400 text-sm">
                    <div class="flex items-center">
                        <i class="uil uil-shield-check text-lg mr-2" style="color: var(--voip-link);"></i>
                        <span>SSL Secured</span>
                    </div>
                    <div class="flex items-center">
                        <i class="uil uil-lock text-lg mr-2" style="color: var(--voip-link);"></i>
                        <span>2FA Protected</span>
                    </div>
                    <div class="flex items-center">
                        <i class="uil uil-database text-lg mr-2" style="color: var(--voip-link);"></i>
                        <span>Data Encrypted</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection