@extends('layouts.main')

@section('title', 'VoIP Features - AI-Powered Communication Solutions')

@section('content')

@include('includes.navbar')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-44">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-4xl md:leading-normal text-3xl leading-normal font-semibold">AI-Powered VoIP <span class="text-indigo-600">Features</span></h3>
            <p class="text-slate-400 max-w-xl mx-auto">Discover how our intelligent VoIP solutions transform business communications with cutting-edge AI technology.</p>
        </div>
    </div>
</section>

<!-- Features Section - Will be built from template components -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
            <div class="lg:col-span-6 md:col-span-1">
                <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">VoIP Features</h6>
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Intelligent Communication Platform</h3>
                <p class="text-slate-400 max-w-xl">Transform your business communications with AI-powered features designed to enhance productivity and streamline operations.</p>
            </div>
        </div>
    </div>
</section>

@include('includes.footer')

@endsection