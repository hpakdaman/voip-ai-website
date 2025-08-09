@php
$whats = [
    [
        'icon' => 'uil uil-presentation-line',
        'title' => 'Design & Branding',
        'desc' => "The most well-known which is said to have originated",
    ],
    [
        'icon' => 'uil uil-bill',
        'title' => 'Fully Secured',
        'desc' => "The most well-known which is said to have originated",
    ],
    [
        'icon' => 'uil uil-money-withdrawal',
        'title' => 'High Performance',
        'desc' => "The most well-known which is said to have originated",
    ]
];
@endphp

@foreach ($whats as $item)
    <div class="group p-6 md:px-4 rounded-lg shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 bg-white dark:bg-slate-900 text-center duration-500">
        <div
            class="size-16 bg-indigo-600/5 text-indigo-600 rounded-lg text-2xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800 mx-auto">
            <i class="{{ $item['icon'] }}"></i>
        </div>

        <div class="content mt-7">
            <a href="{{ url('/page-services') }}" class="title h5 text-lg font-medium hover:text-indigo-600">{{ $item['title'] }}</a>
            <p class="text-slate-400 mt-3">{{ $item['desc'] }}</p>

            <div class="mt-5">
                <a href=""
                    class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read
                    More <i class="uil uil-arrow-right"></i></a>
            </div>
        </div>
    </div>
@endforeach