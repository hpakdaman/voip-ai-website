<div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
    <div class="lg:col-span-5 md:col-span-6">
        <div class="grid grid-cols-12 gap-6 items-center">
            <div class="col-span-6">
                <div class="grid grid-cols-1 gap-6">
                    <img src="{{ asset('assets/images/about/ab03.jpg') }}" class="shadow-sm rounded-md" alt="">
                    <img src="{{ asset('assets/images/about/ab02.jpg') }}" class="shadow-sm rounded-md" alt="">
                </div>
            </div>

            <div class="col-span-6">
                <div class="grid grid-cols-1 gap-6">
                    <img src="{{ asset('assets/images/about/ab01.jpg') }}" class="shadow-sm rounded-md" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="lg:col-span-7 md:col-span-6">
        <div class="lg:ms-5">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">We are a Big Team</h3>

            <p class="text-slate-400 max-w-xl">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect. Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content.</p>
        
            <div class="mt-6">
                <a href="{{ url('/contact-one') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md me-2 mt-2"><i class="uil uil-envelope"></i> Contact us</a>
            </div>
        </div>
    </div>
</div><!--end grid-->