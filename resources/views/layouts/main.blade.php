<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth" dir="ltr">
    <head>
        <meta charset="UTF-8">
        {{-- <title>@yield('title')</title> --}}
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- SEO Meta Tags -->
        {!! SEOMeta::generate() !!}
        {!! OpenGraph::generate() !!}
        {!! Twitter::generate() !!}
        {!! JsonLd::generate() !!}
        
        <!-- Geographic and Language Tags -->
        <meta name="geo.region" content="AE-DU">
        <meta name="geo.placename" content="Dubai, UAE">
        <meta name="geo.position" content="25.276987;55.296249">
        <meta name="ICBM" content="25.276987, 55.296249">
        <meta name="language" content="en">
        
        <!-- Performance & SEO Resource Hints -->
        <link rel="dns-prefetch" href="//fonts.googleapis.com">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <!-- Critical CSS for Above-the-Fold (Minimal, Non-Conflicting) -->
        @if(file_exists(public_path('assets/css/critical.css')))
        <style>
            {!! file_get_contents(public_path('assets/css/critical.css')) !!}
        </style>
        @endif
        
        <!-- Additional Meta Tags -->
        <meta name="website" content="https://sawtic.com">
        <meta name="email" content="dubai@sawtic.com">
        <meta name="version" content="3.0.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- favicon -->
        <link rel="icon" type="image/svg+xml" href="{{ asset('assets/images/favicon.svg') }}">
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}">
        <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon.svg') }}">

        @if(is_localhost())
            <!-- Local Fonts for Development -->
            <link rel="stylesheet" href="{{ asset('assets/css/local-fonts.css') }}">
        @else
            <!-- Google Fonts for Production - Optimized Loading with font-display:swap -->
            <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        @endif
        

        <!-- Vite - Processed Tailwind Configuration -->
        @vite('resources/css/app.css')

        <!-- Preload Critical Assets -->
        <link rel="preload" href="{{ asset('css/app.min.css') }}" as="style">
        <link rel="preload" href="{{ asset('js/app.min.js') }}" as="script">

        <!-- Laravel Mix - Library CSS/JS Bundle -->
        <link rel="stylesheet" href="{{ asset('css/app.min.css') }}">
        
        <!-- Laravel Mix - Minified and Compressed JavaScript --> 
        <script src="{{ asset('js/app.min.js') }}" defer></script>

        @stack('structured-data')

    </head>
    
    <body class="font-sans text-base text-white overflow-x-hidden" style="background-color: var(--voip-dark-bg);">

        <!-- Main Content -->
        <div class="content">
            @section('header')
                @include('includes.navbar')
                @include('components.home.background-blurs')
            @show

            @yield('content')

            @section('footer')
                @include('components.footers.footer-voip')
            @show
        </div>

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 size-9 text-center bg-indigo-600 text-white leading-9"><i class="uil uil-arrow-up"></i></a>
        <!-- Back to top -->


        @stack('scripts')

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
                // Force dark theme permanently
                const htmlElement = document.documentElement;
                htmlElement.classList.add('dark');
                htmlElement.classList.remove('light');
                
                // Language Controller
                initLanguageController();
                
                function initLanguageController() {
                    const currentLangBtn = document.getElementById('currentLang');
                    const langDropdown = document.getElementById('langDropdown');
                    const langOptions = document.querySelectorAll('.lang-option');
                    const langOptionsMobile = document.querySelectorAll('.lang-option-mobile');
                    
                    // Get saved language or default to 'en'
                    const savedLang = localStorage.getItem('language') || 'en';
                    updateLanguageDisplay(savedLang);
                    
                    // Toggle dropdown (desktop)
                    if (currentLangBtn) {
                        currentLangBtn.addEventListener('click', function(e) {
                            e.stopPropagation();
                            langDropdown.classList.toggle('opacity-0');
                            langDropdown.classList.toggle('invisible');
                            langDropdown.classList.toggle('translate-y-2');
                        });
                    }
                    
                    // Close dropdown when clicking outside
                    document.addEventListener('click', function() {
                        if (langDropdown) {
                            langDropdown.classList.add('opacity-0');
                            langDropdown.classList.add('invisible');
                            langDropdown.classList.add('translate-y-2');
                        }
                    });
                    
                    // Language selection (desktop)
                    langOptions.forEach(option => {
                        option.addEventListener('click', function(e) {
                            e.stopPropagation();
                            const selectedLang = this.getAttribute('data-lang');
                            updateLanguageDisplay(selectedLang);
                            localStorage.setItem('language', selectedLang);
                            
                            // Close dropdown
                            if (langDropdown) {
                                langDropdown.classList.add('opacity-0');
                                langDropdown.classList.add('invisible');
                                langDropdown.classList.add('translate-y-2');
                            }
                            
                            console.log('Language changed to:', selectedLang);
                        });
                    });
                    
                    // Language selection (mobile)
                    langOptionsMobile.forEach(option => {
                        option.addEventListener('click', function(e) {
                            e.stopPropagation();
                            const selectedLang = this.getAttribute('data-lang');
                            updateLanguageDisplay(selectedLang);
                            localStorage.setItem('language', selectedLang);
                            
                            // Update mobile button states
                            langOptionsMobile.forEach(btn => {
                                btn.classList.remove('bg-slate-200', 'dark:bg-slate-600');
                                btn.classList.add('bg-slate-100', 'dark:bg-slate-700');
                            });
                            this.classList.remove('bg-slate-100', 'dark:bg-slate-700');
                            this.classList.add('bg-slate-200', 'dark:bg-slate-600');
                            
                            console.log('Language changed to:', selectedLang);
                        });
                    });
                    
                    function updateLanguageDisplay(lang) {
                        const flagIcon = currentLangBtn?.querySelector('span');
                        
                        if (flagIcon) {
                            if (lang === 'ar') {
                                flagIcon.textContent = '🇦🇪';
                            } else {
                                flagIcon.textContent = '🇺🇸';
                            }
                        }
                        
                        // Update mobile button states based on saved language
                        langOptionsMobile.forEach(btn => {
                            const btnLang = btn.getAttribute('data-lang');
                            if (btnLang === lang) {
                                btn.classList.remove('bg-slate-100', 'dark:bg-slate-700');
                                btn.classList.add('bg-slate-200', 'dark:bg-slate-600');
                            } else {
                                btn.classList.remove('bg-slate-200', 'dark:bg-slate-600');
                                btn.classList.add('bg-slate-100', 'dark:bg-slate-700');
                            }
                        });
                    }
                }
            });
        </script>

    </body>
</html>