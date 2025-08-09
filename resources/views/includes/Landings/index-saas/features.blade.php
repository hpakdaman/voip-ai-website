@php
$features = [
    [
        'icon' => 'monitor',
        'title' => 'Fully Responsive',
        'data' => '.1s',
    ],
    [
        'icon' => 'heart',
        'title' => 'Browser Compatibility',
        'data' => '.3s',
    ],
    [
        'icon' => 'eye',
        'title' => 'Retina Ready',
        'data' => '.5s',
    ],
    [
        'icon' => 'layout',
        'title' => 'Based On Tailwindcss 4',
        'data' => '.7s',
    ],
    [
        'icon' => 'feather',
        'title' => 'Feather Icons',
        'data' => '.9s',
    ],
    [
        'icon' => 'code',
        'title' => 'Built With SASS',
        'data' => '1.1s',
    ],
    [
        'icon' => 'user-check',
        'title' => 'W3c Valid Code',
        'data' => '1.3s',
    ],
    [
        'icon' => 'globe',
        'title' => 'Browsers Compatible',
        'data' => '1.5s',
    ],
    [
        'icon' => 'settings',
        'title' => 'Easy to customize',
        'data' => '1.7s',
    ]
];
@endphp

@foreach ($features as $item)
    <div class="lg:col-span-4 md:col-span-6 wow animate__animated animate__fadeInUp" data-wow-delay="{{ $item['data'] }}">
        <div class="flex duration-500 hover:scale-105 shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
            <div class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full me-3">
                <i data-feather="{{ $item['icon'] }}" class="size-5 rotate-45"></i>
            </div>
            <div class="flex-1">
                <h4 class="mb-0 text-lg font-medium">{{ $item['title'] }}</h4>
            </div>
        </div>
    </div>
@endforeach