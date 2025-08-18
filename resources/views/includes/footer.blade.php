<!-- Footer Start -->
<footer class="relative bg-slate-900 dark:bg-slate-800 text-gray-200 dark:text-gray-200">    
    <div class="container relative">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="py-[60px] px-0">
                    <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                        <div class="lg:col-span-4 md:col-span-12">
                            <a href="{{ url('/') }}" class="text-[22px] focus:outline-none">
                                <img src="{{ asset('assets/images/sawtic-white-logo-min.svg') }}" class="h-8" alt="Sawtic">
                            </a>
                            <p class="mt-6 text-gray-300">Transforming customer service with intelligent AI call center solutions that work 24/7 for your business.</p>
                            <ul class="list-none mt-6">
                                <li class="inline"><a href="mailto:contact@ai-callcenter.com" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-800 dark:border-gray-700 text-gray-400 hover:text-white rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
                                <li class="inline"><a href="#" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-800 dark:border-gray-700 text-gray-400 hover:text-white rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-linkedin" title="LinkedIn"></i></a></li>
                                <li class="inline"><a href="#" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-800 dark:border-gray-700 text-gray-400 hover:text-white rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-twitter align-middle" title="Twitter"></i></a></li>
                            </ul>
                        </div>

                        <div class="lg:col-span-2 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Company</h5>
                            <ul class="list-none footer-list mt-6">
                                <li><a href="{{ url('/about') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> About Us</a></li>
                                <li class="mt-[10px]"><a href="{{ url('/features') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Features</a></li>
                                <li class="mt-[10px]"><a href="{{ url('/pricing') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Pricing</a></li>
                                <li class="mt-[10px]"><a href="{{ url('/contact-us') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Contact Us</a></li>
                            </ul>
                        </div>

                        <div class="lg:col-span-3 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Legal</h5>
                            <ul class="list-none footer-list mt-6">
                                <li><a href="{{ url('/terms') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Terms of Service</a></li>
                                <li class="mt-[10px]"><a href="{{ url('/privacy') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Privacy Policy</a></li>
                            </ul>
                        </div>

                        <div class="lg:col-span-3 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Get Started</h5>
                            <p class="mt-6 text-gray-300">Ready to transform your customer service? Contact us for a demo.</p>
                            <div class="mt-6">
                                <a href="{{ url('/contact-us') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center hover-voip-button text-white rounded-md" style="background-color: var(--voip-primary); border-color: var(--voip-primary);">
                                    Request Demo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-[30px] px-0 border-t border-gray-800 dark:border-gray-700">
        <div class="container relative text-center">
            <div class="grid md:grid-cols-1 items-center">
                <div class="text-center">
                    <p class="mb-0 text-gray-100">© <script>document.write(new Date().getFullYear())</script> AI Call Center. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->