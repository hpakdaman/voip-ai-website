@extends('layouts.main')

@section('title', 'Privacy Policy - VoIP AI Solutions')

@section('content')

@include('includes.navbar')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-44">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-4xl md:leading-normal text-3xl leading-normal font-semibold">Privacy <span class="text-indigo-600">Policy</span></h3>
            <p class="text-slate-400 max-w-xl mx-auto">Your privacy and data security are our top priorities.</p>
        </div>
    </div>
</section>

<!-- Privacy Content -->
<section class="relative md:py-24 py-16">
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