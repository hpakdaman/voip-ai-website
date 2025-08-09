@php
$badges = [
    [
        'title' => 'Indigo',
        'style' => 'border-indigo-600 text-indigo-600',
    ],
    [
        'title' => 'Emerald',
        'style' => 'border-emerald-600 text-emerald-600',
    ],
    [
        'title' => 'Red',
        'style' => 'border-red-600 text-red-600',
    ],
    [
        'title' => 'Yellow',
        'style' => 'border-yellow-500 text-yellow-500',
    ],
    [
        'title' => 'Blue',
        'style' => 'border-blue-600 text-blue-600',
    ],
    [
        'title' => 'Sky',
        'style' => 'border-sky-500 text-sky-500',
    ],
    [
        'title' => 'Cyan',
        'style' => 'border-cyan-500 text-cyan-500',
    ],
    [
        'title' => 'Orange',
        'style' => 'border-orange-600 text-orange-600',
    ],
    [
        'title' => 'Purple',
        'style' => 'border-purple-600 text-purple-600',
    ],
    [
        'title' => 'Dark',
        'style' => 'border-gray-800 text-gray-800 dark:text-gray-500',
    ],
    [
        'title' => 'Secondary',
        'style' => 'border-gray-500 text-gray-500',
    ],
    [
        'title' => 'Light',
        'style' => 'border-gray-200 text-gray-200',
    ]
];
@endphp

@foreach ($badges as $item)
    <li class="inline-block">
        <span class="bg-transparent border {{ $item['style'] }} text-[12px] font-semibold px-2.5 py-0.5 rounded-full h-5">{{ $item['title'] }}</span>
    </li>
@endforeach