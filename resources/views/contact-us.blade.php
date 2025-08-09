@extends('layouts.main')

@section('title', 'Contact Us - VoIP AI Communication Solutions')

@section('content')

@include('includes.navbar')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-44 bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/company/aboutus.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900 opacity-75"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="md:text-4xl text-3xl md:leading-normal tracking-wide leading-normal font-medium text-white">Contact Us</h3>
            <p class="text-white/70 text-lg max-w-xl mx-auto mt-3">Get in touch with our VoIP AI experts to transform your business communications</p>
        </div>
    </div>
    
    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="{{ url('/') }}">VoIP AI</a></li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">Contact Us</li>
        </ul>
    </div>
</section>
<div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-white dark:text-slate-900">
        <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->

<!-- Contact Information Section -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
            
            <!-- Phone -->
            <div class="text-center px-6 mt-6">
                <div class="size-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                    <i class="uil uil-phone"></i>
                </div>
                <div class="content mt-7">
                    <h5 class="title h5 text-xl font-medium">Phone</h5>
                    <p class="text-slate-400 mt-3">Ready to discuss your VoIP AI needs? Call our experts directly for immediate assistance.</p>
                    <div class="mt-5">
                        <a href="tel:+1-800-VOIP-AI" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">+1-800-VOIP-AI</a>
                    </div>
                </div>
            </div>

            <!-- Email -->
            <div class="text-center px-6 mt-6">
                <div class="size-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                    <i class="uil uil-envelope"></i>
                </div>
                <div class="content mt-7">
                    <h5 class="title h5 text-xl font-medium">Email</h5>
                    <p class="text-slate-400 mt-3">Send us detailed requirements and we'll respond with a customized VoIP AI solution.</p>
                    <div class="mt-5">
                        <a href="mailto:sales@voip-ai.com" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">sales@voip-ai.com</a>
                    </div>
                </div>
            </div>

            <!-- Location -->
            <div class="text-center px-6 mt-6">
                <div class="size-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                    <i class="uil uil-map-marker"></i>
                </div>
                <div class="content mt-7">
                    <h5 class="title h5 text-xl font-medium">Office</h5>
                    <p class="text-slate-400 mt-3">Visit our headquarters for in-person consultations and demonstrations.</p>
                    <div class="mt-5">
                        <a href="#" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Schedule a Visit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
            <div class="lg:col-span-7 md:col-span-6">
                <img src="{{ asset('assets/images/contact.svg') }}" alt="Contact VoIP AI">
            </div>

            <div class="lg:col-span-5 md:col-span-6">
                <div class="lg:ms-5">
                    <div class="bg-white dark:bg-slate-900 rounded-md shadow-xl dark:shadow-gray-800 p-6">
                        <h3 class="mb-6 text-2xl leading-normal font-medium">Get in touch with VoIP AI!</h3>

                        <form method="post" action="{{ route('contact.send') }}" name="contact-form" id="contact-form">
                            @csrf
                            
                            @if (session('success'))
                                <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded mb-4">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if (session('error'))
                                <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded mb-4">
                                    {{ session('error') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded mb-4">
                                    <ul class="list-disc list-inside">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="grid lg:grid-cols-12 lg:gap-6">
                                <div class="lg:col-span-6 mb-5">
                                    <label for="name" class="font-medium">Your Name:</label>
                                    <input name="name" id="name" type="text" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Name :" required>
                                </div>
    
                                <div class="lg:col-span-6 mb-5">
                                    <label for="email" class="font-medium">Your Email:</label>
                                    <input name="email" id="email" type="email" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Email :" required>
                                </div>
                            </div>

                            <div class="grid grid-cols-1">
                                <div class="mb-5">
                                    <label for="subject" class="font-medium">Your Question:</label>
                                    <input name="subject" id="subject" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Subject :" required>
                                </div>

                                <div class="mb-5">
                                    <label for="comments" class="font-medium">Your Comment:</label>
                                    <textarea name="comments" id="comments" class="form-input mt-2 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Message :"></textarea>
                                </div>
                            </div>
                            <button type="submit" id="submit" name="send" class="py-2 px-5 inline-block tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full">Send Message <i class="uil uil-message"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('includes.footer')

@endsection