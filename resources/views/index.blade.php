@extends('layouts.main')

@section('title', 'AI Call Center - Intelligent Customer Service Solutions')

@section('content')

@include('includes.navbar')

<!-- Hero Section -->
<section class="relative table w-full py-36 lg:py-44">
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
            <div class="md:col-span-7">
                <div class="me-6">
                    <h1 class="font-semibold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-slate-900 dark:text-white">
                        AI-Powered <span class="text-indigo-600">Call Center</span> Solutions
                    </h1>
                    <p class="text-slate-400 text-lg max-w-xl">
                        Revolutionize your customer service with intelligent AI agents that handle calls 24/7, reduce wait times, and improve customer satisfaction.
                    </p>
                
                    <div class="mt-6">
                        <a href="{{ url('/contact-us') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md me-2 mt-2">
                            <i class="uil uil-envelope"></i> Get Started
                        </a>
                        <a href="{{ url('/features') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-transparent hover:bg-indigo-600 border-indigo-600 text-indigo-600 hover:text-white rounded-md mt-2">
                            <i class="uil uil-cpu"></i> Features
                        </a>
                    </div>
                </div>
            </div>

            <div class="md:col-span-5">
                <img src="{{ asset('assets/images/illustrator/Startup_SVG.svg') }}" alt="AI Call Center Solutions" class="mx-auto">
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h2 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Why Choose Our AI Call Center?</h2>
            <p class="text-slate-400 max-w-xl mx-auto">Advanced AI agents that transform customer service operations.</p>
        </div>

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-10 gap-[30px]">
            <div class="text-center px-6 mt-6">
                <div class="size-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                    <i class="uil uil-clock-nine"></i>
                </div>
                <div class="content mt-7">
                    <h5 class="title h5 text-xl font-medium">24/7 Availability</h5>
                    <p class="text-slate-400 mt-3">AI agents never sleep. Provide instant customer support around the clock.</p>
                </div>
            </div>

            <div class="text-center px-6 mt-6">
                <div class="size-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                    <i class="uil uil-brain"></i>
                </div>
                <div class="content mt-7">
                    <h5 class="title h5 text-xl font-medium">Smart AI Agents</h5>
                    <p class="text-slate-400 mt-3">Natural language processing that understands context and provides intelligent responses.</p>
                </div>
            </div>

            <div class="text-center px-6 mt-6">
                <div class="size-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                    <i class="uil uil-chart-growth"></i>
                </div>
                <div class="content mt-7">
                    <h5 class="title h5 text-xl font-medium">Cost Reduction</h5>
                    <p class="text-slate-400 mt-3">Reduce operational costs by up to 70% while improving customer satisfaction.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('includes.footer')

@endsection