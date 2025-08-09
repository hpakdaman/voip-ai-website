@extends('layouts.main')

@section('title', 'Terms of Service - VoIP AI Solutions')

@section('content')

@include('includes.navbar')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-44">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-4xl md:leading-normal text-3xl leading-normal font-semibold">Terms of <span class="text-indigo-600">Service</span></h3>
            <p class="text-slate-400 max-w-xl mx-auto">Please read our terms and conditions for using our VoIP AI services.</p>
        </div>
    </div>
</section>

<!-- Terms Content -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="md:col-span-8 mx-auto">
            <div class="prose max-w-none">
                <p class="text-slate-400 mb-6">These Terms of Service govern your use of our VoIP AI communication platform and services.</p>
                
                <h4 class="text-xl font-semibold mb-4">Service Agreement</h4>
                <p class="text-slate-400 mb-6">By using our VoIP AI services, you agree to these terms and conditions.</p>
                
                <h4 class="text-xl font-semibold mb-4">Service Availability</h4>
                <p class="text-slate-400 mb-6">We strive to provide reliable VoIP services with minimal downtime and maximum quality.</p>
            </div>
        </div>
    </div>
</section>

@include('includes.footer')

@endsection