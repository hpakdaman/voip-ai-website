<!-- Footer Start -->
<footer class="relative bg-slate-900 dark:bg-slate-800 text-gray-200 dark:text-gray-200">
    <div class="container relative text-center">
        <div class="grid grid-cols-1">
            <div class="py-[30px] px-0">
                <div class="grid md:grid-cols-2 items-center">
                    <div class="md:text-start text-center">
                        <a href="#" class="text-[22px] focus:outline-none">
                            <img src="{{ asset('assets/images/logo-light.png') }}" class="mx-auto md:me-auto md:ms-0" alt="">
                        </a>
                    </div>

                    <ul class="list-none footer-list md:text-end text-center mt-6 md:mt-0">
                        <li class="inline"><i class="mdi mdi-circle-small align-middle"></i> <a href="{{ url('/page-job-grid') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out">Jobs</a></li>
                        <li class="inline ms-2"><i class="mdi mdi-circle-small align-middle"></i> <a href="{{ url('/page-job-companies') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out">Companies</a></li>
                        <li class="inline ms-2"><i class="mdi mdi-circle-small align-middle"></i> <a href="{{ url('/helpcenter-faqs') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out">FAQs</a></li>
                        <li class="inline ms-2"><i class="mdi mdi-circle-small align-middle"></i> <a href="{{ url('/contact-one') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out">Contact</a></li>
                    </ul><!--end icon-->
                </div><!--end grid-->
            </div>
        </div>
    </div><!--end container-->

    <div class="py-[30px] px-0 border-t border-gray-800 dark:border-gray-700">
        <div class="container relative text-center">
            <div class="grid grid-cols-1">
                <div class="text-center">
                    <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Techwind. Design & Develop with <i class="mdi mdi-heart text-red-600"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </div>
</footer><!--end footer-->
<!-- Footer End -->