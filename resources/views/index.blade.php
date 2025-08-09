<!-- resources/views/index.blade.php -->
@extends('layouts.main')

@section('title', 'Home Page')

@section('content')

@include('includes.navbar')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-44">
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
            <div class="md:col-span-7">
                <div class="me-6">
                    <h4 class="font-semibold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-slate-900 dark:text-white">AI-Powered <span class="text-indigo-600">VoIP Solutions</span> for Business</h4>
                    <p class="text-slate-400 text-lg max-w-xl">Transform your business communications with intelligent VoIP technology that adapts to your needs and scales with your growth.</p>
                
                    <div class="mt-6">
                        <a href="{{ url('/contact') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md me-2 mt-2"><i class="uil uil-envelope"></i> Get Started</a>
                        <a href="{{ url('/features') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-transparent hover:bg-indigo-600 border-indigo-600 text-indigo-600 hover:text-white rounded-md mt-2"><i class="uil uil-cpu"></i> Features</a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="md:col-span-5">
                <img src="{{ asset('assets/images/illustrator/Startup_SVG.svg') }}" alt="">
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- Business Partner -->
<section class="py-6 border-t border-b border-gray-100 dark:border-gray-800">
    <div class="container relative">
        <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
            
            <!-- includes/Home/business-partner.blade.php -->
            @include('includes.Home.business-partner')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- Business Partner -->

<!-- Start -->
<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">How It Work ?</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 items-center mt-10 gap-[30px]">

            <!-- includes/Home/about.blade.php -->
            @include('includes.Home.about')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 items-center mt-10 gap-[30px]">
      
            <!-- includes/Home/speed-up.blade.php -->
            @include('includes.Home.speed-up')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="mb-4 text-base font-medium text-indigo-600">We believe in building each other and hence</h6>
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Work with some amazing partners</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid relative grid-cols-1 mt-8">
            <div class="tiny-two-item">

                <!-- includes/Home/reviews.blade.php -->
                @include('includes.Home.reviews')

            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid lg:grid-cols-12 grid-cols-1 items-center gap-[30px]">
            
            <!-- includes/Home/rates.blade.php -->
            @include('includes.Home.rates')
        
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-gray-50 dark:text-slate-800">
        <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="grid md:grid-cols-2 grid-cols-1 gap-[30px]">
            
            <!-- includes/Home/work.blade.php -->
            @include('includes.Home.work')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16 md:mb-12">
        
        <!-- includes/Home/get-in-touch.blade.php -->
        @include('includes.Home.get-in-touch')

    </div><!--end container-->
</section><!--end section-->

<div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-slate-900 dark:text-slate-800">
        <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer')

@endsection