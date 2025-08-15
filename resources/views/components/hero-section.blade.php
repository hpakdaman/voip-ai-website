<!-- Start Hero -->
<section class="relative table w-full lg:py-40 md:py-36 pt-36 pb-24 overflow-hidden min-h-screen" style="background-color: var(--voip-dark-bg);">
    <div class="absolute inset-0 bg-[url('../../assets/images/overlay.png')] bg-repeat opacity-10 dark:opacity-60"></div>
    <div class="container relative z-1">
        <div class="relative grid lg:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
            <div class="lg:col-span-7">
                <div class="lg:me-6 lg:text-start text-center">
                    <h1 class="font-bold lg:leading-normal leading-normal text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl mb-5 text-white overflow-hidden hero-heading-fixed">
                        Access powerful AI <br>For 
                        <span class="typewrite bg-gradient-to-tl to-indigo-600 from-red-600 text-transparent bg-clip-text" data-period="2000" data-type='[ "VoIP Solutions", "Customer Service", "Business Growth" ]'> 
                            <span class="wrap"></span> 
                        </span>
                    </h1>

                    <p class="text-lg max-w-xl lg:ms-0 mx-auto text-slate-300">Transform your business communications with AI-powered VoIP solutions designed for the modern enterprise.</p>
                
                    <div class="mt-8 lg:text-start text-center">
                        <a href="{{ url('/contact-us') }}" class="py-3 px-8 inline-block font-semibold tracking-wide align-middle duration-500 text-lg text-center text-white rounded-full hover-voip-button transition-all hover:scale-105 hover:shadow-lg" style="background-color: var(--voip-primary);">
                            Request Demo
                        </a>
                    </div>

                    {{-- <div class="subcribe-form mt-6 mb-3">
                        <form class="relative max-w-md mx-auto lg:ms-0">
                            <div class="relative">
                                <i class="uil uil-envelope text-xl absolute top-3 left-5 text-slate-400"></i>
                                <input type="email" id="aiemail" name="email" class="py-4 pe-40 ps-12 w-full h-[50px] outline-none text-white rounded-md shadow-sm" style="background-color: rgba(22, 47, 58, 0.6);" placeholder="Enter your email">
                            </div>
                            <button type="submit" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center absolute top-[2px] end-[3px] h-[46px] text-white rounded-md hover-voip-button" style="background-color: var(--voip-primary);">Get Started</button>
                        </form>
                    </div> --}}
                </div>
            </div>

            <div class="lg:col-span-5">
                <div class="relative flex items-center justify-center min-h-[400px] overflow-visible">
                    <!-- Spinning circles - behind the image -->
                    <div class="absolute size-[26rem] sm:size-96 md:size-[30rem] lg:size-[32rem] xl:size-[36rem] border border-dashed rounded-full animate-[spin_120s_linear_infinite] -z-10 spinning-circle" style="border-color: rgba(30, 192, 141, 0.3);"></div>
                    <div class="absolute size-[30rem] sm:size-[30rem] md:size-[36rem] lg:size-[40rem] xl:size-[48rem] border border-dashed rounded-full animate-[spin_240s_linear_infinite] -z-10 spinning-circle outer" style="border-color: rgba(29, 120, 97, 0.2);"></div>
                    
                    <!-- Gradient box background -->
                    <div class="absolute size-80 sm:size-80 md:size-96 lg:size-[28rem] xl:size-[32rem] blur-[200px] rounded-full dark:after:to-indigo-600/50 -z-20" style="background: linear-gradient(135deg, var(--voip-primary), var(--voip-link)); opacity: 0.3;"></div>
                    
                    <!-- Circular container with VoIP color background - perfectly centered -->
                    <div class="relative w-100 h-100 sm:w-80 sm:h-80 md:w-100 md:h-100 lg:w-[28rem] lg:h-[28rem] xl:w-[32rem] xl:h-[32rem] rounded-full overflow-hidden flex items-center justify-center flex-shrink-0" style="background-color: #122a34; aspect-ratio: 1/1;">
                        <img src="{{ asset('assets/images/personal/a-professional-middle-eastern-woman-without-a-head.png') }}" alt="Professional Customer Service Representative" class="w-[110%] h-[110%] object-cover object-center">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->