@php
$services = [
    [
        'icon' => 'uil uil-chart-line',
        'title' => 'Software Development',
        'desc' => "It is a long established fact that a reader.",
    ],
    [
        'icon' => 'uil uil-crosshairs',
        'title' => 'Mobile App Development',
        'desc' => "It is a long established fact that a reader.",
    ],
    [
        'icon' => 'uil uil-airplay',
        'title' => 'Web Development',
        'desc' => "It is a long established fact that a reader.",
    ],
    [
        'icon' => 'uil uil-rocket',
        'title' => 'Game Development',
        'desc' => "It is a long established fact that a reader.",
    ]
];
@endphp

@foreach ($services as $item)
    <div class="group relative p-6 shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-indigo-600 dark:hover:bg-indigo-600 duration-500 rounded-xl bg-white dark:bg-slate-900 overflow-hidden text-center">
        <div class="relative overflow-hidden text-transparent -m-3">
            <i data-feather="hexagon" class="size-24 fill-indigo-600/5 group-hover:fill-white/10 mx-auto"></i>
            <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-indigo-600 rounded-xl group-hover:text-white duration-500 text-3xl flex align-middle justify-center items-center">
                <i class="{{ $item['icon'] }}"></i>
            </div>
        </div>

        <div class="mt-6">
            <a href="" class="text-lg font-medium group-hover:text-white duration-500">{{ $item['title'] }}</a>
            <p class="text-slate-400 group-hover:text-white/50 duration-500 mt-3">{{ $item['desc'] }}</p>
        </div>
    </div>
@endforeach