@php
$foods = [
    [
        'icon' => 'uil uil-pizza-slice',
        'title' => 'Food Meets Style',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ],
    [
        'icon' => 'uil uil-restaurant',
        'title' => 'Quality Check',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ],
    [
        'icon' => 'uil uil-swiggy',
        'title' => 'Home Delivery',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ]
];
@endphp

@foreach ($foods as $item)
    <div class="md:px-6 duration-500 rounded-2xl text-center">
        <div class="size-20 bg-indigo-600/5 mx-auto text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800">
            <i class="{{ $item['icon'] }}"></i>
        </div>

        <div class="content mt-7">
            <a href="{{ url('/page-services') }}" class="title h5 text-lg font-medium hover:text-indigo-600">{{ $item['title'] }}</a>
            <p class="text-slate-400 mt-3">{{ $item['desc'] }}</p>
            
            <div class="mt-5">
                <a href="{{ url('/page-services') }}" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
            </div>
        </div>
    </div>
@endforeach