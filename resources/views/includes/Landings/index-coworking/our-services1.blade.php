@php
$services = [
    [
        'icon' => 'uil uil-wifi',
        'title' => 'Free Internet',
        'desc' => "If the distribution of letters and 'words' is random, the reader will not be distracted from making.",
    ],
    [
        'icon' => 'uil uil-users-alt',
        'title' => 'Group Events',
        'desc' => "If the distribution of letters and 'words' is random, the reader will not be distracted from making.",
    ],
    [
        'icon' => 'uil uil-crop-alt-rotate-left',
        'title' => 'Meeting Room',
        'desc' => "If the distribution of letters and 'words' is random, the reader will not be distracted from making.",
    ],
    [
        'icon' => 'uil uil-glass-tea',
        'title' => 'Coffee & Tea',
        'desc' => "If the distribution of letters and 'words' is random, the reader will not be distracted from making.",
    ],
    [
        'icon' => 'uil uil-parking-circle',
        'title' => 'Free Parking',
        'desc' => "If the distribution of letters and 'words' is random, the reader will not be distracted from making.",
    ],
    [
        'icon' => 'uil uil-process',
        'title' => 'Relax Room',
        'desc' => "If the distribution of letters and 'words' is random, the reader will not be distracted from making.",
    ]
];
@endphp

@foreach ($services as $item)
    <div class="group relative lg:px-10 mt-4 duration-500 rounded-xl bg-white dark:bg-slate-900 overflow-hidden text-center">
        <div class="relative overflow-hidden text-transparent -m-3">
            <i data-feather="hexagon" class="size-32 fill-indigo-600/5 mx-auto"></i>
            <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-indigo-600 rounded-xl duration-500 text-3xl flex align-middle justify-center items-center">
                <i class="{{ $item['icon'] }}"></i>
            </div>
        </div>

        <div class="mt-6">
            <a href="" class="text-xl font-medium duration-500 hover:text-indigo-600">{{ $item['title'] }}</a>
            <p class="text-slate-400 duration-500 mt-3">{{ $item['desc'] }}</p>
        </div>
    </div>
@endforeach