@php
$abouts = [
    [
        'title' => 'WordPress',
        'percentage' => '84%',
    ],
    [
        'title' => 'JavaScript',
        'percentage' => '79%',
    ],
    [
        'title' => 'HTML',
        'percentage' => '95%',
    ]
];
@endphp

<div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
    <div class="lg:col-span-5 md:col-span-6">
        <div class="relative">
            <img src="{{ asset('assets/images/personal/hero.jpg') }}" class="rounded-full" alt="">
            <div class="absolute bottom-2/4 translate-y-2/4 start-0 end-0 text-center">
                <a href="#!" data-type="youtube" data-id="S_CGed6E610"
                    class="lightbox size-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600 dark:text-white">
                    <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                </a>
            </div>

            <div class="absolute top-0 start-0 -z-1">
                <img src="{{ asset('assets/images/illustrator/dots.svg') }}" alt="">
            </div>
        </div>
    </div>

    <div class="lg:col-span-7 md:col-span-6">
        <div class="lg:ms-5">
            <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">About us</h6>
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Better Design <br> Better Experience</h3>

            <p class="text-slate-400 max-w-xl">Obviously I'm a Web Designer. Experienced with all stages of the development cycle for dynamic web projects.</p>

            @foreach ($abouts as $item)
                <div class="mt-4">
                    <div class="flex justify-between mb-2">
                        <span class="text-slate-400">{{ $item['title'] }}</span>
                        <span class="text-slate-400">{{ $item['percentage'] }}</span>
                    </div>
                    <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                        <div class="bg-indigo-600 h-[6px] rounded-full" style="width: {{ $item['percentage'] }}"></div>
                    </div>
                </div>
            @endforeach
        
        </div>
    </div>
</div>