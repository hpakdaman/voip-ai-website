@php
$services = [
    [
        'icon' => 'uil uil-arrow',
        'title' => 'SEO',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
        'style' => "p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 duration-500 rounded-2xl mt-6",
    ],
    [
        'icon' => 'uil uil-pen',
        'title' => 'Content Marketing',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
        'style' => "p-6 shadow-xl shadow-gray-100 dark:shadow-gray-800 duration-500 rounded-2xl mt-6",
    ],
    [
        'icon' => 'uil uil-circle-layer',
        'title' => 'Branding',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
        'style' => "p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 duration-500 rounded-2xl mt-6",
    ],
    [
        'icon' => 'uil uil-chart-line',
        'title' => 'Analytics',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
        'style' => "p-6 shadow-xl shadow-gray-100 dark:shadow-gray-800 duration-500 rounded-2xl mt-6",
    ],
    [
        'icon' => 'uil uil-users-alt',
        'title' => 'Management',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
        'style' => "p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 duration-500 rounded-2xl mt-6",
    ],
    [
        'icon' => 'uil uil-comments',
        'title' => 'Email Marketing',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
        'style' => "p-6 shadow-xl shadow-gray-100 dark:shadow-gray-800 duration-500 rounded-2xl mt-6",
    ]
];
@endphp

@foreach ($services as $item)
    <div class="{{ $item['style'] }}">
        <div class="size-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800">
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