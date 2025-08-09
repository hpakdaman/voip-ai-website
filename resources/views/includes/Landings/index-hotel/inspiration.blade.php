<div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
    <div class="lg:col-span-5 md:col-span-6">
        <div class="relative">
            <img src="{{ asset('assets/images/hotel/ab1.jpg') }}" class="rounded-full lg:w-[400px] w-[280px]" alt="">
            <div class="absolute -end-5 -bottom-16">
                <img src="{{ asset('assets/images/hotel/ab2.jpg') }}" class="rounded-full lg:w-[280px] w-[200px] border-8 border-white dark:border-slate-900" alt="">
            </div>
        </div>
    </div>

    <div class="lg:col-span-7 md:col-span-6 mt-8 md:mt-0">
        <div class="lg:ms-5">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Get inspiration for future trips weekly</h3>

            <p class="text-slate-400 max-w-xl">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect. Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content.</p>

            <ul class="list-none text-slate-400 mt-4">
                <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Digital Marketing Solutions for Tomorrow</li>
                <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Our Talented & Experienced Marketing Agency</li>
                <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Create your own skin to match your brand</li>
            </ul>
        
            <div class="mt-6">
                <a href="{{ url('/contact-one') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md me-2 mt-2"><i class="uil uil-envelope"></i> Contact us</a>
            </div>
        </div>
    </div>
</div><!--end grid-->