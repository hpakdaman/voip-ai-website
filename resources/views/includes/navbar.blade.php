<!-- Start Navbar -->
<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container relative">
        <!-- Logo container-->
        <a class="logo" href="{{ url('/') }}">
            <img src="{{ asset('assets/images/logo-dark.png') }}" class="inline-block dark:hidden" alt="">
            <img src="{{ asset('assets/images/logo-light.png') }}" class="hidden dark:inline-block" alt="">
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

        <!--Login button Start-->
        <ul class="buy-button list-none mb-0">
            <li class="inline mb-0">
                <a href="{{ url('/contact-us') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Get Started</a>
            </li>
        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->   
            <ul class="navigation-menu">
                <li><a href="{{ url('/') }}" class="sub-menu-item">Home</a></li>
                <li><a href="{{ url('/features') }}" class="sub-menu-item">Features</a></li>
                <li><a href="{{ url('/pricing') }}" class="sub-menu-item">Pricing</a></li>
                <li><a href="{{ url('/about') }}" class="sub-menu-item">About</a></li>
                <li><a href="{{ url('/contact-us') }}" class="sub-menu-item">Contact Us</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</nav><!--end header-->
<!-- End Navbar -->