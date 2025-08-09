<div class="grid md:grid-cols-12 grid-cols-1 items-center md:gap-[30px] gap-12">
    <div class="md:col-span-5">
        <div class="relative">
            <div class="shadow-md dark:shadow-gray-800 rounded-t-full border-8 border-gray-200 dark:border-gray-900">
                <img src="{{ asset('assets/images/podcast/ab.jpg') }}" class="shadow-md rounded-t-full" alt="">
            </div>

            <div class="absolute -bottom-6 -end-2">
                <div class="bg-white dark:bg-slate-800 w- rounded-xl shadow-md dark:shadow-gray-800 w-[300px] border-b border-gray-100 dark:border-gray-600">
                    <div class="p-6 space-y-6">
                        <div class="flex items-center space-x-3">
                            <img src="{{ asset('assets/images/logo-icon-30.png') }}" alt="">
                            <h5 class="text-xl font-semibold">Techwind Podcast</h5>
                        </div>
                        <div class="space-y-2">
                            <div class="relative">
                                <div class="bg-gray-100 dark:bg-slate-700 rounded-full overflow-hidden">
                                    <div class="bg-indigo-600 w-1/2 h-1.5" role="progressbar" aria-label="music progress"></div>
                                </div>
                                <div class="ring-indigo-600 ring-2 absolute left-1/2 top-1/2 size-4 -mt-2 -ml-2 flex items-center justify-center bg-white rounded-full shadow-sm">
                                    <div class="w-1.5 h-1.5 bg-indigo-600 rounded-full ring-1 ring-inset ring-slate-900/5"></div>
                                </div>
                            </div>
                            <div class="flex justify-between text-sm leading-6 font-medium tabular-nums">
                                <div class="text-indigo-600">24:16</div>
                                <div class="text-slate-400">75:50</div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 dark:bg-slate-700 flex items-center rounded-b-xl">
                        <div class="flex-auto flex items-center justify-evenly">
                            <button type="button" aria-label="Add to favorites">
                                <i class="uil uil-bookmark text-xl text-slate-400 hover:text-indigo-600"></i>
                            </button>
                            <button type="button" class="hidden sm:block lg:hidden xl:block" aria-label="Previous">
                                <i class="uil uil-previous text-2xl text-slate-400 hover:text-indigo-600"></i>
                            </button>
                        </div>
                        <button type="button" class="bg-white dark:bg-slate-800 flex-none -my-2 mx-auto size-20 rounded-full border border-gray-100 dark:border-gray-600 shadow-md flex items-center justify-center" aria-label="Pause">
                            <i class="uil uil-pause text-4xl text-slate-400 hover:text-indigo-600"></i>
                        </button>
                        <div class="flex-auto flex items-center justify-evenly">
                            <button type="button" class="hidden sm:block lg:hidden xl:block" aria-label="Next">
                                <i class="uil uil-step-forward text-2xl text-slate-400 hover:text-indigo-600"></i>
                            </button>
                            <button type="button" class="text-slate-400 hover:text-indigo-600">1x</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end col-->

    <div class="md:col-span-7">
        <div class="lg:ms-4">
            <h4 class="mb-6 md:text-4xl text-3xl lg:leading-normal leading-normal font-bold">Listen podcast anytime <br> and anyware you want</h4>
            <p class="text-slate-400 max-w-xl mb-2">Techwind Homes developed a platform for the Real Estate marketplace that allows buyers and sellers to easily execute a transaction on their own.</p>
            <p class="text-slate-400 max-w-xl">The platform drives efficiency, cost transparency and control into the hands of the consumers. Techwind Homes is Real Estate Redefined.</p>
            
            <div class="mt-4">
                <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-3">Learn More </a>
            </div>
        </div>
    </div><!--end col-->
</div><!--end grid-->