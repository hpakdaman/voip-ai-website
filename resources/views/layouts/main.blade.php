<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Tailwind CSS Multipurpose Landing & Admin Dashboard Template">
        <meta name="keywords" content="agency, application, business, clean, creative, cryptocurrency, it solutions, modern, multipurpose, nft marketplace, portfolio, saas, software, tailwind css">
        <meta name="author" content="Shreethemes">
        <meta name="website" content="https://shreethemes.in">
        <meta name="email" content="support@shreethemes.in">
        <meta name="version" content="3.0.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!-- Css -->
        <link href="{{ asset('assets/libs/animate.css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/libs/tobii/css/tobii.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/libs/js-datepicker/datepicker.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/libs/choices.js/public/assets/styles/choices.min.css') }}" rel="stylesheet">
        <!-- Main Css -->
        <link href="{{ asset('assets/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet">
        <link href="{{ asset('assets/libs/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css">
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}">

    </head>
    
    <body class="font-nunito text-base text-slate-900 dark:text-white dark:bg-slate-900 bg-white">

        <!-- Main Content -->
        <div class="content">
            @yield('content')
        </div>

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 size-9 text-center bg-indigo-600 text-white leading-9"><i class="uil uil-arrow-up"></i></a>
        <!-- Back to top -->

        <!-- Switcher -->
        <div class="fixed top-[30%] -right-2 z-50">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
                <label class="label bg-slate-900 dark:bg-white shadow-sm dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                    <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] size-7"></span>
                </label>
            </span>
        </div>
        <!-- Switcher -->

        <!-- LTR & RTL Mode Code -->
        <div class="fixed top-[40%] -right-3 z-50">
            <a href="" id="switchRtl">
                <span class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow-sm dark:shadow-gray-800 font-bold rtl:block ltr:hidden" >LTR</span>
                <span class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow-sm dark:shadow-gray-800 font-bold ltr:block rtl:hidden">RTL</span>
            </a>
        </div>
        <!-- LTR & RTL Mode Code -->

        <!-- JAVASCRIPTS -->
        <script src="{{ asset('assets/libs/jarallax/jarallax.min.js') }}"></script>
        <script src="{{ asset('assets/libs/particles.js/particles.js') }}"></script>
        <script src="{{ asset('assets/libs/wow.js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/libs/tobii/js/tobii.min.js') }}"></script>
        <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/easy_background.js') }}"></script>
        @stack('scripts')
        <script src="{{ asset('assets/libs/shufflejs/shuffle.min.js') }}"></script>
        <script src="{{ asset('assets/libs/js-datepicker/datepicker.min.js') }}"></script>
        <script src="{{ asset('assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>
        <script src="{{ asset('assets/libs/gumshoejs/gumshoe.min.js') }}"></script>
        <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('assets/libs/tiny-slider/min/tiny-slider.js') }}"></script>
        <script src="{{ asset('assets/js/plugins.init.js') }}"></script>
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <!-- JAVASCRIPTS -->

        <script>
            const handleChange = () => {
            const fileUploader = document.querySelector('#input-file');
                const getFile = fileUploader.files
                if (getFile.length !== 0) {
                    const uploadedFile = getFile[0];
                    readFile(uploadedFile);
                }
            }

            const readFile = (uploadedFile) => {
                if (uploadedFile) {
                    const reader = new FileReader();
                    reader.onload = () => {
                    const parent = document.querySelector('.preview-box');
                    parent.innerHTML = `<img class="preview-content" src=${reader.result} />`;
                    };
                    
                    reader.readAsDataURL(uploadedFile);
                }
            };
        </script>
        <!-- JAVASCRIPTS -->

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const darkPages = ["index-ai","index-web-programming","index-cafe","index-gym","index-video","video-portfolio","index-photography","photography-about","photography-portfolio","index-crypto"]; // List of pages that should have 'dark' mode
                const htmlElement = document.documentElement; // Select the <html> tag
                const currentUrl = window.location.href; // Get the current URL
                //  Check if any dark mode page is in the URL
                const isDarkPage = darkPages.some(page => currentUrl.includes(page));
                
                if (isDarkPage) {
                    htmlElement.classList.add("dark");
                    htmlElement.classList.remove("light");
                } else { 
                    htmlElement.classList.add("light");
                    htmlElement.classList.remove("dark");
                }
            });
        </script>

    </body>
</html>