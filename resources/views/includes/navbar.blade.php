<!-- Start Navbar -->
<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container relative">
        <!-- Logo container-->
        <a class="logo" href="{{ url('/') }}">
            <img src="{{ asset('assets/images/sawtic-white-logo-min.svg') }}" class="inline-block h-10" alt="Sawtic">
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
            <li class="flex items-center relative">
                <button id="currentLang" class="size-9 inline-flex items-center justify-center tracking-wide duration-500 text-base text-center rounded-full transition-all cursor-pointer" style="background: rgba(30, 192, 141, 0.1); border: 1px solid rgba(30, 192, 141, 0.2);" onmouseover="this.style.background='rgba(30, 192, 141, 0.2)'; this.style.borderColor='rgba(30, 192, 141, 0.3)'; this.style.cursor='pointer'" onmouseout="this.style.background='rgba(30, 192, 141, 0.1)'; this.style.borderColor='rgba(30, 192, 141, 0.2)'">
                    <span class="text-sm">🇺🇸</span>
                </button>
                <div id="langDropdown" class="absolute top-full right-0 mt-1 rounded-lg shadow-lg border min-w-[100px] opacity-0 invisible transform translate-y-2 transition-all duration-300 z-50" style="background-color: var(--voip-dark-bg); border-color: rgba(30, 192, 141, 0.2);">
                    <button class="lang-option w-full flex items-center space-x-2 px-3 py-2 text-sm text-white rounded-t-lg transition-colors duration-200 text-left cursor-pointer" data-lang="en" onmouseover="this.style.background='rgba(30, 192, 141, 0.2)'; this.style.cursor='pointer'" onmouseout="this.style.background='transparent'">
                        <span>🇺🇸</span>
                        <span>EN</span>
                    </button>
                    <button class="lang-option w-full flex items-center space-x-2 px-3 py-2 text-sm text-white rounded-b-lg transition-colors duration-200 text-left cursor-pointer" data-lang="ar" onmouseover="this.style.background='rgba(30, 192, 141, 0.2)'; this.style.cursor='pointer'" onmouseout="this.style.background='transparent'">
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
                <li><a href="{{ url('/about') }}" class="sub-menu-item">ABOUT</a></li>
                <li><a href="{{ url('/features') }}" class="sub-menu-item">FEATURES</a></li>
                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">SOLUTIONS</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="{{ url('/solutions/real-estate') }}" class="sub-menu-item text-base font-medium">Real Estate</a></li>
                        <li><a href="{{ url('/healthcare') }}" class="sub-menu-item text-base font-medium">Healthcare</a></li>
                        <li><a href="{{ url('/finance') }}" class="sub-menu-item text-base font-medium">Finance & Banking</a></li>
                        <li><a href="{{ url('/retail') }}" class="sub-menu-item text-base font-medium">Retail & E-commerce</a></li>
                        <li><a href="{{ url('/education') }}" class="sub-menu-item text-base font-medium">Education</a></li>
                        <li><a href="{{ url('/government') }}" class="sub-menu-item text-base font-medium">Government</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/contact-us') }}" class="sub-menu-item">CONTACT</a></li>
                
                <!-- Mobile Language Switcher -->
                <li class="mobile-lang-switcher border-t mt-4 pt-4 mb-4" style="border-color: rgba(30, 192, 141, 0.2);">
                    <div class="px-4 py-2">
                        <span class="text-sm font-medium mb-3 block" style="color: var(--voip-link);">Language</span>
                        <div class="flex space-x-3">
                            <button class="lang-option-mobile flex items-center space-x-2 px-4 py-3 text-sm text-white rounded-xl transition-all duration-200 flex-1 justify-center border cursor-pointer" data-lang="en" style="background: rgba(30, 192, 141, 0.1); border-color: rgba(30, 192, 141, 0.3);" onmouseover="this.style.background='rgba(30, 192, 141, 0.2)'; this.style.borderColor='rgba(30, 192, 141, 0.4)'; this.style.cursor='pointer'" onmouseout="this.style.background='rgba(30, 192, 141, 0.1)'; this.style.borderColor='rgba(30, 192, 141, 0.3)'">
                                <span>🇺🇸</span>
                                <span>EN</span>
                            </button>
                            <button class="lang-option-mobile flex items-center space-x-2 px-4 py-3 text-sm text-white rounded-xl transition-all duration-200 flex-1 justify-center border cursor-pointer" data-lang="ar" style="background: rgba(30, 192, 141, 0.1); border-color: rgba(30, 192, 141, 0.3);" onmouseover="this.style.background='rgba(30, 192, 141, 0.2)'; this.style.borderColor='rgba(30, 192, 141, 0.4)'; this.style.cursor='pointer'" onmouseout="this.style.background='rgba(30, 192, 141, 0.1)'; this.style.borderColor='rgba(30, 192, 141, 0.3)'">
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