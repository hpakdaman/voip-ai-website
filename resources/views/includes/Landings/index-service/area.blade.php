@php
$areas = [
    [
        'icon' => 'uil uil-chart-line',
        'title' => 'Business Service',
        'desc' => 'One advantage everything you need to generate',
    ],
    [
        'icon' => 'uil uil-dribbble',
        'title' => 'Social Service',
        'desc' => 'One advantage everything you need to generate',
    ],
    [
        'icon' => 'uil uil-airplay',
        'title' => 'Personal Service',
        'desc' => 'One advantage everything you need to generate',
    ],
    [
        'icon' => 'uil uil-university',
        'title' => 'Banking Service',
        'desc' => 'One advantage everything you need to generate',
    ],
    [
        'icon' => 'uil uil-money-bill',
        'title' => 'Insurance Service',
        'desc' => 'One advantage everything you need to generate',
    ],
    [
        'icon' => 'uil uil-truck',
        'title' => 'Transportation Service',
        'desc' => 'One advantage everything you need to generate',
    ],
    [
        'icon' => 'uil uil-docker',
        'title' => 'Warehousing Service',
        'desc' => 'One advantage everything you need to generate',
    ],
    [
        'icon' => 'uil uil-comments',
        'title' => 'Communication Service',
        'desc' => 'One advantage everything you need to generate',
    ]
];
@endphp

@foreach ($areas as $item)
    <div class="group duration-500 text-center">
        <div class="flex align-middle mx-auto justify-center items-center size-14 mt-1 bg-indigo-600/5 group-hover:bg-indigo-600 group-hover:text-white border-2 border-indigo-600/20 text-indigo-600 rounded-lg text-2xl shadow-xs dark:shadow-gray-800 duration-500">
            <i class="{{ $item['icon'] }}"></i>
        </div>
        <div class="mt-4">
            <a href="" class="text-xl font-medium hover:text-indigo-600 duration-500 ease-in-out">{{ $item['title'] }}</a>
            <p class="text-slate-400 mt-2">{{ $item['desc'] }}</p>
        </div>
    </div>
@endforeach