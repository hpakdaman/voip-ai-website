@extends('layouts.main')

@section('title', 'VoIP Pricing - Affordable AI Communication Plans')

@section('content')

@include('includes.navbar')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-44">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-4xl md:leading-normal text-3xl leading-normal font-semibold">Choose Your <span class="text-indigo-600">VoIP Plan</span></h3>
            <p class="text-slate-400 max-w-xl mx-auto">Flexible pricing plans designed to scale with your business communications needs.</p>
        </div>
    </div>
</section>

<!-- Pricing Section - Will be built from template components -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid md:grid-cols-3 grid-cols-1 gap-[30px]">
            <div class="text-center">
                <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Starter Plan</h6>
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">$29/month</h3>
                <p class="text-slate-400">Perfect for small businesses getting started with VoIP.</p>
            </div>
        </div>
    </div>
</section>

@include('includes.footer')

@endsection