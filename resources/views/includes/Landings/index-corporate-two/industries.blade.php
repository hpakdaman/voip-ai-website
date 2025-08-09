@php
$industries = [
    [
        'icon' => 'uil uil-university text-3xl text-indigo-600',
        'title' => 'Banking & Finance',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'icon' => 'uil uil-pizza-slice text-3xl text-indigo-600',
        'title' => 'Food & Commodities',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'icon' => 'uil uil-building text-3xl text-indigo-600',
        'title' => 'Real estate',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ]
];
@endphp

@foreach ($industries as $item)
    <div class="group px-6 py-8 bg-white dark:bg-slate-900 shadow-sm hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out border-t-[3px] border-gray-100 dark:border-gray-800 hover:border-indigo-600 dark:hover:border-indigo-600">
        <i class="{{ $item['icon'] }}"></i>

        <div class="content mt-6">
            <a href="" class="text-xl font-semibold hover:text-indigo-600 duration-500 ease-in-out">{{ $item['title'] }}</a>
            <p class="text-slate-400 mt-4">{{ $item['desc'] }}</p>
            
            <div class="mt-5">
                <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
            </div>
        </div>
    </div>
@endforeach