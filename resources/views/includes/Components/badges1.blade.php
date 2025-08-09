@php
$badges = [
    [
        'title' => 'Indigo',
        'style' => 'bg-indigo-600 text-white',
    ],
    [
        'title' => 'Emerald',
        'style' => 'bg-emerald-600 text-white',
    ],
    [
        'title' => 'Red',
        'style' => 'bg-red-600 text-white',
    ],
    [
        'title' => 'Yellow',
        'style' => 'bg-yellow-500 text-white',
    ],
    [
        'title' => 'Blue',
        'style' => 'bg-blue-600 text-white',
    ],
    [
        'title' => 'Sky',
        'style' => 'bg-sky-500 text-white',
    ],
    [
        'title' => 'Cyan',
        'style' => 'bg-cyan-500 text-white',
    ],
    [
        'title' => 'Orange',
        'style' => 'bg-orange-600 text-white',
    ],
    [
        'title' => 'Purple',
        'style' => 'bg-purple-600 text-white',
    ],
    [
        'title' => 'Dark',
        'style' => 'bg-gray-800 text-white',
    ],
    [
        'title' => 'Secondary',
        'style' => 'bg-gray-500 text-white',
    ],
    [
        'title' => 'Light',
        'style' => 'bg-gray-50 text-slate-900',
    ]
];
@endphp

@foreach ($badges as $item)
    <li class="inline-block">
        <span class="{{ $item['style'] }} text-[12px] font-semibold px-2.5 py-0.5 rounded-full h-5">{{ $item['title'] }}</span>
    </li>
@endforeach