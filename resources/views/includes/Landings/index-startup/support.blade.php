@php
$supports = [
    [
        'icon' => 'uil uil-water',
        'title' => '24/7 Support',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'icon' => 'uil uil-dropbox',
        'title' => 'Take Ownership',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'icon' => 'uil uil-focus-target',
        'title' => 'Team Work',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ]
];
@endphp

@foreach ($supports as $item)
    <div class="flex">
        <div class="flex align-middle justify-center items-center min-w-[56px] h-[56px] bg-indigo-600/5 border-2 border-indigo-600/20 text-indigo-600 rounded-lg text-xl shadow-xs dark:shadow-gray-800">
            <i class="{{ $item['icon'] }}"></i>
        </div>

        <div class="content ms-6">
            <a href="" class="text-lg font-medium hover:text-indigo-600">{{ $item['title'] }}</a>
            <p class="text-slate-400 mt-3">{{ $item['desc'] }}</p>
        </div>
    </div>
@endforeach