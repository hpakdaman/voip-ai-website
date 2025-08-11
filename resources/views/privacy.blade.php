@extends('layouts.main')

@section('title', 'Privacy Policy | UAE VoIP AI Data Protection & Security Compliance')

@section('content')

@include('includes.navbar')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-44 bg-gradient-to-br from-indigo-600/10 via-blue-50 to-amber-50/30 dark:from-slate-800 dark:via-slate-800 dark:to-slate-800">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h1 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-bold text-slate-900 dark:text-white">Privacy <span class="bg-gradient-to-r from-indigo-600 to-blue-600 text-transparent bg-clip-text">Policy</span></h1>
            <p class="text-slate-400 max-w-2xl mx-auto">Your privacy and data security are our top priorities. This policy explains how we collect, use, and protect your information in compliance with UAE laws.</p>
            <p class="text-sm text-slate-500 mt-4">Last updated: December 2024</p>
        </div>
    </div>
</section>

<!-- Privacy Content -->
<section class="relative md:py-24 py-16 bg-white dark:bg-slate-900">
    <div class="container relative">
        <div class="md:col-span-8 mx-auto">
            <div class="prose max-w-none">
                <p class="text-slate-400 mb-6">This Privacy Policy describes how we collect, use, and protect your information when you use our VoIP AI communication services.</p>
                
                <h4 class="text-xl font-semibold mb-4">Information We Collect</h4>
                <p class="text-slate-400 mb-6">We collect information necessary to provide and improve our VoIP services, including call data, user preferences, and technical information.</p>
                
                <h4 class="text-xl font-semibold mb-4">How We Use Your Information</h4>
                <p class="text-slate-400 mb-6">Your information is used to provide VoIP services, improve our AI features, and ensure service quality and security.</p>
            </div>
        </div>
    </div>
</section>

@include('includes.footer')

@endsection