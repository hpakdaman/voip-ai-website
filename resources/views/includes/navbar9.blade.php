<!-- TAGLINE START-->
<div class="tagline bg-white dark:bg-slate-900 border-b border-gray-100 dark:border-gray-800">
    <div class="container">                
        <div class="grid grid-cols-1">
            <div class="flex items-center justify-between">
                <ul class="list-none mb-0">
                    <li class="inline mb-0"><a href="mailto:contact@example.com" class="text-slate-400 hover:text-indigo-600 inline-flex items-center"><i data-feather="mail" class="size-4 me-1 text-indigo-600"></i> contact@example.com</a></li>
                    <li class="inline mb-0 ms-3"><a href="tel:+152534-468-854" class="text-slate-400 hover:text-indigo-600 inline-flex items-center"><i data-feather="phone" class="size-4 me-1 text-indigo-600"></i> +152 534-468-854</a></li>
                </ul>

                <ul class="list-none mb-0">
                    <li class="inline"><a href="https://dribbble.com/shreethemes" target="_blank" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center text-gray-400 hover:text-white border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                    <li class="inline"><a href="https://www.behance.net/shreethemes" target="_blank" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center text-gray-400 hover:text-white border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-behance" title="Behance"></i></a></li>
                    <li class="inline"><a href="http://linkedin.com/company/shreethemes" target="_blank" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center text-gray-400 hover:text-white border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-linkedin" title="Linkedin"></i></a></li>
                    <li class="inline"><a href="https://www.facebook.com/shreethemes" target="_blank" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center text-gray-400 hover:text-white border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                    <li class="inline"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center text-gray-400 hover:text-white border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                </ul><!--end icon-->
            </div>
        </div>
    </div><!--end container-->
</div><!--end tagline-->
<!-- TAGLINE END-->

<!-- Start Navbar -->
<nav id="topnav" class="defaultscroll is-sticky bg-white dark:bg-slate-900 tagline-height">
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
                <a href="" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600/5 hover:bg-indigo-600 border border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white"><i data-feather="settings" class="size-4"></i></a>
            </li>
    
            <li class="inline ps-1 mb-0">
                <a href="https://1.envato.market/techwind" target="_blank" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white"><i data-feather="shopping-cart" class="size-4"></i></a>
            </li>
        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->   
            <ul class="navigation-menu nav-left !justify-start">
                <li><a href="{{ url('/') }}" class="sub-menu-item">Home</a></li>
        
                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Landings</a><span class="menu-arrow"></span>

                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li><a href="{{ url('/index-saas') }}" class="sub-menu-item">Saas <span class="bg-emerald-600 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Animation</span></a></li>
                                <li><a href="{{ url('/index-classic-saas') }}" class="sub-menu-item">Classic Saas </a></li>
                                <li><a href="{{ url('/index-modern-saas') }}" class="sub-menu-item">Modern Saas </a></li>
                                <li><a href="{{ url('/index-apps') }}" class="sub-menu-item">Application</a></li>
                                <li><a href="{{ url('/index-classic-app') }}" class="sub-menu-item">Classic App </a></li>
                                <li><a href="{{ url('/index-ai') }}" class="sub-menu-item">AI Tools <span class="bg-slate-900 dark:bg-slate-50 inline-block text-white dark:text-slate-900 text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Dark</span></a></li>
                                <li><a href="{{ url('/index-smartwatch') }}" class="sub-menu-item">Smartwatch</a></li>
                                <li><a href="{{ url('/index-marketing') }}" class="sub-menu-item">Marketing</a></li>
                                <li><a href="{{ url('/index-seo') }}" class="sub-menu-item">SEO Agency </a></li>
                                <li><a href="{{ url('/index-software') }}" class="sub-menu-item">Software </a></li>
                                <li><a href="{{ url('/index-web-programming') }}" class="sub-menu-item">Web Programming</a></li>
                                <li><a href="{{ url('/index-payment') }}" class="sub-menu-item">Payments</a></li>
                                <li><a href="{{ url('/index-charity') }}" class="sub-menu-item">Charity </a></li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li><a href="{{ url('/index-it-solution') }}" class="sub-menu-item">IT Solution</a></li>
                                <li><a href="{{ url('/index-it-solution-two') }}" class="sub-menu-item">It Solution Two </a></li>
                                <li><a href="{{ url('/index-digital-agency') }}" class="sub-menu-item">Digital Agency</a></li>
                                <li><a href="{{ url('/index-restaurent') }}" class="sub-menu-item">Restaurent</a></li>
                                <li><a href="{{ url('/index-hosting') }}" class="sub-menu-item">Hosting</a></li>
                                <li><a href="{{ url('/index-nft') }}" class="sub-menu-item">NFT Marketplace <span class="bg-red-500 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Full</span></a></li>
                                <li><a href="{{ url('/index-hotel') }}" class="sub-menu-item">Hotel & Resort</a></li>
                                <li><a href="{{ url('/index-travel') }}" class="sub-menu-item">Travels </a></li>
                                <li><a href="{{ url('/index-cafe') }}" class="sub-menu-item">Cafe <span class="bg-slate-900 dark:bg-slate-50 inline-block text-white dark:text-slate-900 text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Dark</span></a></li>
                                <li><a href="{{ url('/index-gym') }}" class="sub-menu-item">Gym <span class="bg-slate-900 dark:bg-slate-50 inline-block text-white dark:text-slate-900 text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Dark</span></a></li>
                                <li><a href="{{ url('/index-yoga') }}" class="sub-menu-item">Yoga </a></li>
                                <li><a href="{{ url('/index-spa') }}" class="sub-menu-item">Spa & Salon </a></li>
                                <li><a href="{{ url('/index-cleaner') }}" class="sub-menu-item">Cleaner Service</a></li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li><a href="{{ url('/index-job') }}" class="sub-menu-item">Job <span class="bg-red-500 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Full</span></a></li>
                                <li><a href="{{ url('/index-startup') }}" class="sub-menu-item">Startup</a></li>
                                <li><a href="{{ url('/index-business') }}" class="sub-menu-item">Business</a></li>
                                <li><a href="{{ url('/index-corporate') }}" class="sub-menu-item">Corporate</a></li>
                                <li><a href="{{ url('/index-corporate-two') }}" class="sub-menu-item">Corporate Two </a></li>
                                <li><a href="{{ url('/index-real-estate') }}" class="sub-menu-item">Real Estate <span class="bg-red-500 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Full</span></a></li>
                                <li><a href="{{ url('/index-consulting') }}" class="sub-menu-item">Consulting </a></li>
                                <li><a href="{{ url('/index-solar') }}" class="sub-menu-item">Solar / Green Energy <span class="bg-yellow-500 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">New</span></a></li>
                                <li><a href="{{ url('/index-life-coach') }}" class="sub-menu-item">Life Coach </a></li>
                                <li><a href="{{ url('/index-insurance') }}" class="sub-menu-item">Insurance </a></li>
                                <li><a href="{{ url('/index-construction') }}" class="sub-menu-item">Construction </a></li>
                                <li><a href="{{ url('/index-law') }}" class="sub-menu-item">Law Firm </a></li>
                                <li><a href="{{ url('/index-video') }}" class="sub-menu-item">Video </a></li>
                            </ul>
                        </li>
                
                        <li>
                            <ul>
                                <li><a href="{{ url('/index-personal') }}" class="sub-menu-item">Personal</a></li>
                                <li><a href="{{ url('/index-portfolio') }}" class="sub-menu-item">Portfolio <span class="bg-red-500 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Full</span></a></li>
                                <li><a href="{{ url('/index-photography') }}" class="sub-menu-item">Photography <span class="bg-slate-900 dark:bg-slate-50 inline-block text-white dark:text-slate-900 text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Dark</span></a></li>
                                <li><a href="{{ url('/index-studio') }}" class="sub-menu-item">Studio</a></li>
                                <li><a href="{{ url('/index-coworking') }}" class="sub-menu-item">Co-Woriking</a></li>
                                <li><a href="{{ url('/index-classic-business') }}" class="sub-menu-item">Classic Business </a></li>
                                <li><a href="{{ url('/index-course') }}" class="sub-menu-item">Online Courses </a></li>
                                <li><a href="{{ url('/index-event') }}" class="sub-menu-item">Event / Conference </a></li>
                                <li><a href="{{ url('/index-podcast') }}" class="sub-menu-item">Podcasts </a></li>
                                <li><a href="{{ url('/index-hospital') }}" class="sub-menu-item">Hospital</a></li>
                                <li><a href="{{ url('/index-phone-number') }}" class="sub-menu-item">Phone Number</a></li>
                                <li><a href="{{ url('/index-forums') }}" class="sub-menu-item">Forums </a></li>
                            </ul>
                        </li>
                
                        <li>
                            <ul>
                                <li><a href="{{ url('/index-shop') }}" class="sub-menu-item">Shop / eCommerce <span class="bg-red-500 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Full</span></a></li>
                                <li><a href="{{ url('/index-crypto') }}" class="sub-menu-item">Cryptocurrency  <span class="bg-slate-900 dark:bg-slate-50 inline-block text-white dark:text-slate-900 text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Dark</span></a></li>
                                <li><a href="{{ url('/index-landing-one') }}" class="sub-menu-item">Landing One</a></li>
                                <li><a href="{{ url('/index-landing-two') }}" class="sub-menu-item">Landing Two</a></li>
                                <li><a href="{{ url('/index-landing-three') }}" class="sub-menu-item">Landing Three</a></li>
                                <li><a href="{{ url('/index-landing-four') }}" class="sub-menu-item">Landing Four</a></li>
                                <li><a href="{{ url('/index-landing-six') }}" class="sub-menu-item">Landing Six </a></li>
                                <li><a href="{{ url('/index-christmas') }}" class="sub-menu-item">Christmas </a></li>
                                <li><a href="{{ url('/index-service') }}" class="sub-menu-item">Service Provider</a></li>
                                <li><a href="{{ url('/index-food-blog') }}" class="sub-menu-item">Food Blog </a></li>
                                <li><a href="{{ url('/index-blog') }}" class="sub-menu-item">Blog </a></li>
                                <li><a href="{{ url('/index-furniture') }}" class="sub-menu-item">Furniture </a></li>
                                <li><a href="{{ url('/index-landing-five') }}" class="sub-menu-item">Landing Five <span class="bg-green-600 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Onepage</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Company </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{ url('/page-aboutus') }}" class="sub-menu-item"> About Us</a></li>
                                <li class="has-submenu child-menu-item"><a href="javascript:void(0)"> Services</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="{{ url('/page-services') }}" class="sub-menu-item">Services</a></li>
                                        <li><a href="{{ url('/page-service-detail') }}" class="sub-menu-item">Service Detail</a></li>
                                    </ul>  
                                </li>
                                <li><a href="{{ url('/page-team') }}" class="sub-menu-item"> Team</a></li>
                                <li><a href="{{ url('/page-pricing') }}" class="sub-menu-item">Pricing</a></li>
                                <li><a href="{{ url('/page-testimonial') }}" class="sub-menu-item">Testimonial </a></li>
                            </ul> 
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Accounts</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{ url('/user-profile') }}" class="sub-menu-item">User Profile</a></li>
                                <li><a href="{{ url('/user-billing') }}" class="sub-menu-item">Billing</a></li>
                                <li><a href="{{ url('/user-payment') }}" class="sub-menu-item">Payment</a></li>
                                <li><a href="{{ url('/user-invoice') }}" class="sub-menu-item">Invoice</a></li>
                                <li><a href="{{ url('/user-social') }}" class="sub-menu-item">Social</a></li>
                                <li><a href="{{ url('/user-notification') }}" class="sub-menu-item">Notification</a></li>
                                <li><a href="{{ url('/user-setting') }}" class="sub-menu-item">Setting</a></li>
                            </ul> 
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Real Estate</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{ url('/property-listing') }}" class="sub-menu-item">Listing</a></li>
                                <li><a href="{{ url('/property-detail') }}" class="sub-menu-item">Property Detail</a></li>
                            </ul> 
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Courses </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{ url('/course-listing') }}" class="sub-menu-item">Course Listing</a></li>
                                <li><a href="{{ url('/course-detail') }}" class="sub-menu-item">Course Detail</a></li>
                            </ul> 
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> NFT Market </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{ url('/nft-explore') }}" class="sub-menu-item">Explore</a></li>
                                <li><a href="{{ url('/nft-auction') }}" class="sub-menu-item">Auction</a></li>
                                <li><a href="{{ url('/nft-collection') }}" class="sub-menu-item">Collections</a></li>
                                <li class="has-submenu child-menu-item"><a href="javascript:void(0)"> Creator  </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="{{ url('/nft-creators') }}" class="sub-menu-item"> Creators</a></li>
                                        <li><a href="{{ url('/nft-creator-profile') }}" class="sub-menu-item"> Creator Profile </a></li>
                                        <li><a href="{{ url('/nft-creator-profile-edit') }}" class="sub-menu-item"> Profile Edit </a></li>
                                    </ul>  
                                </li>
                                <li><a href="{{ url('/nft-wallet') }}" class="sub-menu-item">Wallet</a></li>
                                <li><a href="{{ url('/nft-create-item') }}" class="sub-menu-item">Create NFT</a></li>
                                <li><a href="{{ url('/nft-detail') }}" class="sub-menu-item">Single NFT</a></li>
                            </ul> 
                        </li>
                        <li><a href="{{ url('/food-recipe') }}" class="sub-menu-item">Food Recipe </a></li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> eCommerce </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{ url('/shop-grid') }}" class="sub-menu-item">Product Grid</a></li>
                                <li><a href="{{ url('/shop-grid-two') }}" class="sub-menu-item">Product Grid Two</a></li>
                                <li><a href="{{ url('/shop-item-detail') }}" class="sub-menu-item">Product Detail</a></li>
                                <li><a href="{{ url('/shop-cart') }}" class="sub-menu-item">Shop Cart</a></li>
                                <li><a href="{{ url('/shop-checkout') }}" class="sub-menu-item">Checkout</a></li>
                                <li><a href="{{ url('/shop-account') }}" class="sub-menu-item">My Account</a></li>
                            </ul>  
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Photography </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{ url('/photography-about') }}" class="sub-menu-item">About Us</a></li>
                                <li><a href="{{ url('/photography-portfolio') }}" class="sub-menu-item">Portfolio</a></li>
                            </ul> 
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Job / Careers </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{ url('/page-job-grid') }}" class="sub-menu-item">All Jobs</a></li>
                                <li><a href="{{ url('/page-job-detail') }}" class="sub-menu-item">Job Detail</a></li>
                                <li><a href="{{ url('/page-job-apply') }}" class="sub-menu-item">Job Apply</a></li>
                                <li><a href="{{ url('/page-job-post') }}" class="sub-menu-item">Job Post </a></li>
                                <li><a href="{{ url('/page-job-career') }}" class="sub-menu-item">Job Career </a></li>
                                <li><a href="{{ url('/page-job-candidates') }}" class="sub-menu-item">Job Candidates</a></li>
                                <li><a href="{{ url('/page-job-candidate-detail') }}" class="sub-menu-item">Candidate Detail</a></li>
                                <li><a href="{{ url('/page-job-companies') }}" class="sub-menu-item">All Companies</a></li>
                                <li><a href="{{ url('/page-job-company-detail') }}" class="sub-menu-item">Company Detail</a></li>
                            </ul>  
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Forums </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{ url('/forums-topic') }}" class="sub-menu-item">Forum Topic</a></li>
                                <li><a href="{{ url('/forums-comments') }}" class="sub-menu-item">Forum Comments</a></li>
                            </ul>  
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Helpcenter </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{ url('/helpcenter') }}" class="sub-menu-item">Overview</a></li>
                                <li><a href="{{ url('/helpcenter-faqs') }}" class="sub-menu-item">FAQs</a></li>
                                <li><a href="{{ url('/helpcenter-guides') }}" class="sub-menu-item">Guides</a></li>
                                <li><a href="{{ url('/helpcenter-support') }}" class="sub-menu-item">Support</a></li>
                            </ul>  
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Blog </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{ url('/blog') }}" class="sub-menu-item">Blogs</a></li>
                                <li><a href="{{ url('/blog-sidebar') }}" class="sub-menu-item">Blogs & Sidebar</a></li>
                                <li><a href="{{ url('/blog-detail') }}" class="sub-menu-item">Blog Detail</a></li>
                                <li class="has-submenu child-menu-item"><a href="javascript:void(0)"> Blog Posts </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="{{ url('/blog-standard-post') }}" class="sub-menu-item">Standard Post</a></li>
                                        <li><a href="{{ url('/blog-slider-post') }}" class="sub-menu-item">Slider Post</a></li>
                                        <li><a href="{{ url('/blog-gallery-post') }}" class="sub-menu-item">Gallery Post</a></li>
                                        <li><a href="{{ url('/blog-youtube-post') }}" class="sub-menu-item">Youtube Post</a></li>
                                        <li><a href="{{ url('/blog-vimeo-post') }}" class="sub-menu-item">Vimeo Post</a></li>
                                        <li><a href="{{ url('/blog-audio-post') }}" class="sub-menu-item">Audio Post</a></li>
                                        <li><a href="{{ url('/blog-blockquote-post') }}" class="sub-menu-item">Blockquote</a></li>
                                        <li><a href="{{ url('/blog-left-sidebar-post') }}" class="sub-menu-item">Left Sidebar</a></li>
                                    </ul>  
                                </li>
                            </ul>  
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Email Template</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{ url('/email-confirmation') }}" class="sub-menu-item">Confirmation</a></li>
                                <li><a href="{{ url('/email-password-reset') }}" class="sub-menu-item">Reset Password</a></li>
                                <li><a href="{{ url('/email-alert') }}" class="sub-menu-item">Alert</a></li>
                                <li><a href="{{ url('/email-invoice') }}" class="sub-menu-item">Invoice</a></li>
                            </ul>  
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{ url('/auth-login') }}" class="sub-menu-item">Login</a></li>
                                <li><a href="{{ url('/auth-signup') }}" class="sub-menu-item">Signup</a></li>
                                <li><a href="{{ url('/auth-re-password') }}" class="sub-menu-item">Reset Password</a></li>
                                <li><a href="{{ url('/auth-lock-screen') }}" class="sub-menu-item">Lock Screen</a></li>
                            </ul>  
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Utility </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{ url('/page-terms') }}" class="sub-menu-item">Terms of Services</a></li>
                                <li><a href="{{ url('/page-privacy') }}" class="sub-menu-item">Privacy Policy</a></li>
                            </ul>  
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{ url('/page-comingsoon') }}" class="sub-menu-item">Coming Soon</a></li>
                                <li><a href="{{ url('/page-maintenance') }}" class="sub-menu-item">Maintenance</a></li>
                                <li><a href="{{ url('/page-error') }}" class="sub-menu-item">Error</a></li>
                                <li><a href="{{ url('/page-thankyou') }}" class="sub-menu-item">Thank you</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Contact </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{ url('/contact-detail') }}" class="sub-menu-item">Contact Detail</a></li>
                                <li><a href="{{ url('/contact-one') }}" class="sub-menu-item">Contact One</a></li>
                                <li><a href="{{ url('/contact-two') }}" class="sub-menu-item">Contact Two</a></li>
                            </ul>  
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Multi Level Menu</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="javascript:void(0)" class="sub-menu-item">Level 1.0</a></li>
                                <li class="has-submenu child-menu-item"><a href="javascript:void(0)"> Level 2.0 </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="javascript:void(0)" class="sub-menu-item">Level 2.1</a></li>
                                        <li><a href="javascript:void(0)" class="sub-menu-item">Level 2.2</a></li>
                                    </ul>  
                                </li>
                            </ul>  
                        </li>
                    </ul>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Portfolio</a><span class="menu-arrow"></span>
                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li class="megamenu-head">Modern Portfolio</li>
                                <li><a href="{{ url('/portfolio-modern-two') }}" class="sub-menu-item">Two Column</a></li>
                                <li><a href="{{ url('/portfolio-modern-three') }}" class="sub-menu-item">Three Column</a></li>
                                <li><a href="{{ url('/portfolio-modern-four') }}" class="sub-menu-item">Four Column</a></li>
                                <li><a href="{{ url('/portfolio-modern-five') }}" class="sub-menu-item">Five Column</a></li>
                                <li><a href="{{ url('/portfolio-modern-six') }}" class="sub-menu-item">Six Column</a></li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li class="megamenu-head">Classic Portfolio</li>
                                <li><a href="{{ url('/portfolio-classic-two') }}" class="sub-menu-item">Two Column</a></li>
                                <li><a href="{{ url('/portfolio-classic-three') }}" class="sub-menu-item">Three Column</a></li>
                                <li><a href="{{ url('/portfolio-classic-four') }}" class="sub-menu-item">Four Column</a></li>
                                <li><a href="{{ url('/portfolio-classic-five') }}" class="sub-menu-item">Five Column</a></li>
                                <li><a href="{{ url('/portfolio-classic-six') }}" class="sub-menu-item">Six Column</a></li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li class="megamenu-head">Creative Portfolio</li>
                                <li><a href="{{ url('/portfolio-creative-two') }}" class="sub-menu-item">Two Column</a></li>
                                <li><a href="{{ url('/portfolio-creative-three') }}" class="sub-menu-item">Three Column</a></li>
                                <li><a href="{{ url('/portfolio-creative-four') }}" class="sub-menu-item">Four Column</a></li>
                                <li><a href="{{ url('/portfolio-creative-five') }}" class="sub-menu-item">Five Column</a></li>
                                <li><a href="{{ url('/portfolio-creative-six') }}" class="sub-menu-item">Six Column</a></li>
                            </ul>
                        </li>
                
                        <li>
                            <ul>
                                <li class="megamenu-head">Masonry Portfolio</li>
                                <li><a href="{{ url('/portfolio-masonry-two') }}" class="sub-menu-item">Two Column</a></li>
                                <li><a href="{{ url('/portfolio-masonry-three') }}" class="sub-menu-item">Three Column</a></li>
                                <li><a href="{{ url('/portfolio-masonry-four') }}" class="sub-menu-item">Four Column</a></li>
                                <li><a href="{{ url('/portfolio-masonry-five') }}" class="sub-menu-item">Five Column</a></li>
                                <li><a href="{{ url('/portfolio-masonry-six') }}" class="sub-menu-item">Six Column</a></li>
                            </ul>
                        </li>
                
                        <li>
                            <ul>
                                <li class="megamenu-head">Portfolio Detail</li>
                                <li><a href="{{ url('/portfolio-detail-one') }}" class="sub-menu-item">Portfolio One</a></li>
                                <li><a href="{{ url('/portfolio-detail-two') }}" class="sub-menu-item">Portfolio Two</a></li>
                                <li><a href="{{ url('/portfolio-detail-three') }}" class="sub-menu-item">Portfolio Three</a></li>
                                <li><a href="{{ url('/portfolio-detail-four') }}" class="sub-menu-item">Portfolio Four</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li><a href="{{ url('/ui-components') }}" class="sub-menu-item">Components</a></li>

                <li><a href="{{ url('/contact-one') }}" class="sub-menu-item">Contact</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</nav><!--end header-->
<!-- End Navbar -->