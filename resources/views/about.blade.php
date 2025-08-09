@extends('layouts.main')

@section('title', 'About Us - VoIP AI Communication Experts')

@section('content')

@include('includes.navbar')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-44">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-4xl md:leading-normal text-3xl leading-normal font-semibold">About Our <span class="text-indigo-600">VoIP AI</span> Solutions</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Leading the future of business communications with intelligent VoIP technology.</p>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
            <div class="lg:col-span-6 md:col-span-1">
                <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">About Us</h6>
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Revolutionizing Business Communications</h3>
                <p class="text-slate-400 max-w-xl mb-6">We specialize in AI-powered VoIP solutions that transform how businesses communicate, collaborate, and connect with their customers.</p>
                <p class="text-slate-400 max-w-xl">Our mission is to provide intelligent, scalable, and cost-effective communication platforms that grow with your business needs.</p>
            </div>
        </div>
    </div>
</section>

@include('includes.footer')

@endsection