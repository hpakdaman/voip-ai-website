@php
$services = [
    [
        'icon' => 'uil uil-chart-line',
        'title' => 'Hign Performance',
        'desc' => 'The phrasal sequence of the Lorem Ipsum text is now so that many',
    ],
    [
        'icon' => 'uil uil-crosshairs',
        'title' => 'Best Securities',
        'desc' => 'The phrasal sequence of the Lorem Ipsum text is now so that many',
    ],
    [
        'icon' => 'uil uil-airplay',
        'title' => 'Trusted Service',
        'desc' => 'The phrasal sequence of the Lorem Ipsum text is now so that many',
    ],
    [
        'icon' => 'uil uil-rocket',
        'title' => 'Info Technology',
        'desc' => 'The phrasal sequence of the Lorem Ipsum text is now so that many',
    ],
    [
        'icon' => 'uil uil-clock',
        'title' => '24/7 Support',
        'desc' => 'The phrasal sequence of the Lorem Ipsum text is now so that many',
    ],
    [
        'icon' => 'uil uil-users-alt',
        'title' => 'IT Management',
        'desc' => 'The phrasal sequence of the Lorem Ipsum text is now so that many',
    ],
    [
        'icon' => 'uil uil-file-alt',
        'title' => 'Certified Company',
        'desc' => 'The phrasal sequence of the Lorem Ipsum text is now so that many',
    ],
    [
        'icon' => 'uil uil-search',
        'title' => 'Data Analytics',
        'desc' => 'The phrasal sequence of the Lorem Ipsum text is now so that many',
    ]
];
@endphp

@foreach ($services as $item)
    <div class="text-center md:px-3">
        <div class="size-24 bg-indigo-600/5 text-indigo-600 rounded-3xl text-4xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800 mx-auto">
            <i class="{{ $item['icon'] }}"></i>
        </div>

        <div class="content mt-7">
            <a href="{{ url('/page-services') }}" class="title h5 text-lg font-medium hover:text-indigo-600">{{ $item['title'] }}</a>
            <p class="text-slate-400 mt-3">{{ $item['desc'] }}</p>
        </div>
    </div>
@endforeach