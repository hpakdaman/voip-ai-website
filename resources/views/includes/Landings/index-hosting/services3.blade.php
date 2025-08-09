@php
$services = [
    [
        'icon' => 'uil uil-server',
        'title' => 'Web Hosting',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ],
    [
        'icon' => 'uil uil-cloud-heart',
        'title' => 'Domains',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ],
    [
        'icon' => 'uil uil-envelope-check',
        'title' => 'Emails',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ],
    [
        'icon' => 'uil uil-users-alt',
        'title' => 'Supported',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ],
    [
        'icon' => 'uil uil-tachometer-fast-alt',
        'title' => 'Speedy',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ],
    [
        'icon' => 'uil uil-compact-disc',
        'title' => 'Reliable',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ],
    [
        'icon' => 'uil uil-weight',
        'title' => 'Scalable',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ],
    [
        'icon' => 'uil uil-invoice',
        'title' => 'Easy Upgrade',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ]
];
@endphp

@foreach ($services as $item)
    <div class="group relative p-6 shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-indigo-600 dark:hover:bg-indigo-600 duration-500 rounded-xl bg-white dark:bg-slate-900 overflow-hidden">
        <div class="relative overflow-hidden text-transparent -m-3">
            <i data-feather="hexagon" class="size-24 fill-indigo-600/5 group-hover:fill-white/10"></i>
            <div class="absolute top-2/4 -translate-y-2/4 start-8 text-indigo-600 rounded-xl group-hover:text-white duration-500 text-3xl flex align-middle justify-center items-center">
                <i class="{{ $item['icon'] }}"></i>
            </div>
        </div>

        <div class="mt-6">
            <a href="" class="text-lg font-medium group-hover:text-white duration-500">{{ $item['title'] }}</a>
            <p class="text-slate-400 group-hover:text-white/50 duration-500 mt-3">{{ $item['desc'] }}</p>
        </div>
    </div><!--end feature-->
@endforeach