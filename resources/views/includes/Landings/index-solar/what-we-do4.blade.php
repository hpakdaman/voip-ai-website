@php
$whats = [
    [
        'icon' => 'uil uil-chart-line',
        'title' => 'Installation',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit.",
    ],
    [
        'icon' => 'uil uil-crosshairs',
        'title' => 'Maintenance',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit.",
    ],
    [
        'icon' => 'uil uil-airplay',
        'title' => 'System Design',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit.",
    ],
    [
        'icon' => 'uil uil-rocket',
        'title' => 'Energy Consulting',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit.",
    ],
    [
        'icon' => 'uil uil-clock',
        'title' => 'Financing',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit.",
    ],
    [
        'icon' => 'uil uil-users-alt',
        'title' => 'Feasibility Analysis',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit.",
    ]
];
@endphp

@foreach ($whats as $item)
<div class="group relative p-6 shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-indigo-600 dark:hover:bg-indigo-600 duration-500 rounded bg-white dark:bg-slate-900 overflow-hidden text-center">
    <div class="relative overflow-hidden text-transparent -m-3">
        <i data-feather="hexagon" class="size-24 fill-indigo-600/5 group-hover:fill-white/10 mx-auto"></i>
        <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-indigo-600 rounded group-hover:text-white duration-500 text-3xl flex align-middle justify-center items-center">
            <i class="{{ $item['icon'] }}"></i>
        </div>
    </div>

    <div class="mt-6">
        <a href="" class="text-xl font-medium group-hover:text-white duration-500">{{ $item['title'] }}</a>
        <p class="text-slate-400 group-hover:text-white/50 duration-500 mt-3">{{ $item['desc'] }}</p>

        <div class="mt-3">
            <a href="" class="font-medium group-hover:text-white/80 group-hover:hover:text-white duration-500">Read More <i class="uil uil-arrow-right"></i></a>
        </div>
    </div>
</div>
@endforeach