<!-- Start Navbar -->
<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container relative">
        <!-- Logo container-->
        <a class="logo" href="{{ url('/') }}">
            <img src="{{ asset('assets/images/sawtic-white-logo-min.svg') }}" class="inline-block h-8" alt="Sawtic">
        </a>

        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <!--Simple Controls Start-->
        <ul class="buy-button list-none mb-0 flex items-center">
            <!-- Language Switcher -->
            <li class="flex items-center me-8 relative">
                <button id="currentLang" class="size-9 inline-flex items-center justify-center tracking-wide duration-500 text-base text-center rounded-full bg-slate-100 hover:bg-slate-200 dark:bg-slate-800 dark:hover:bg-slate-700">
                    <span class="text-sm">🇺🇸</span>
                </button>
                <div id="langDropdown" class="absolute top-full right-0 mt-1 bg-white dark:bg-slate-800 rounded-lg shadow-lg border dark:border-gray-700 min-w-[100px] opacity-0 invisible transform translate-y-2 transition-all duration-300 z-50">
                    <button class="lang-option w-full flex items-center space-x-2 px-3 py-2 text-sm hover:bg-gray-50 dark:hover:bg-slate-700 rounded-t-lg transition-colors duration-200 text-left" data-lang="en">
                        <span>🇺🇸</span>
                        <span>EN</span>
                    </button>
                    <button class="lang-option w-full flex items-center space-x-2 px-3 py-2 text-sm hover:bg-gray-50 dark:hover:bg-slate-700 rounded-b-lg transition-colors duration-200 text-left" data-lang="ar">
                        <span>🇦🇪</span>
                        <span>AR</span>
                    </button>
                </div>
            </li>
            
            <!-- Get Started Button -->
            {{-- <li class="flex items-center">
                <a href="{{ url('/contact-us') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border duration-500 text-base text-center text-white rounded-md hover-voip-button" style="background-color: var(--voip-primary); border-color: var(--voip-primary);">Get Started</a>
            </li> --}}
        </ul>
        <!--Simple Controls End-->

        <div id="navigation">
            <!-- Navigation Menu-->   
            <ul class="navigation-menu">
                <li><a href="{{ url('/') }}" class="sub-menu-item active">HOME</a></li>
                <li><a href="{{ url('/features') }}" class="sub-menu-item">FEATURES</a></li>
                <li><a href="{{ url('/pricing') }}" class="sub-menu-item">PAGES</a></li>
                <li><a href="{{ url('/about') }}" class="sub-menu-item">PORTFOLIO</a></li>
                <li><a href="{{ url('/contact-us') }}" class="sub-menu-item">COMPONENTS</a></li>
                
                <!-- Mobile Language Switcher -->
                <li class="block md:hidden border-t border-gray-200 dark:border-gray-700 mt-2 pt-2">
                    <div class="px-4 py-2">
                        <span class="text-sm font-medium text-slate-600 dark:text-slate-300 mb-2 block">Language</span>
                        <div class="flex space-x-2">
                            <button class="lang-option-mobile flex items-center space-x-2 px-3 py-2 text-sm bg-slate-100 hover:bg-slate-200 dark:bg-slate-700 dark:hover:bg-slate-600 rounded-lg transition-colors duration-200 flex-1 justify-center" data-lang="en">
                                <span>🇺🇸</span>
                                <span>EN</span>
                            </button>
                            <button class="lang-option-mobile flex items-center space-x-2 px-3 py-2 text-sm bg-slate-100 hover:bg-slate-200 dark:bg-slate-700 dark:hover:bg-slate-600 rounded-lg transition-colors duration-200 flex-1 justify-center" data-lang="ar">
                                <span>🇦🇪</span>
                                <span>AR</span>
                            </button>
                        </div>
                    </div>
                </li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</nav><!--end header-->
<!-- End Navbar -->