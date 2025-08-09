@php
$badges = [
    [
        'title' => 'Indigo',
        'style' => 'bg-indigo-600/5 border border-indigo-600/5 text-indigo-600',
    ],
    [
        'title' => 'Emerald',
        'style' => 'bg-emerald-600/5 border border-emerald-600/5 text-emerald-600',
    ],
    [
        'title' => 'Red',
        'style' => 'bg-red-600/5 border border-red-600/5 text-red-600',
    ],
    [
        'title' => 'Yellow',
        'style' => 'bg-yellow-500/5 border border-yellow-500/5 text-yellow-500',
    ],
    [
        'title' => 'Blue',
        'style' => 'bg-blue-600/5 border border-blue-600/5 text-blue-600',
    ],
    [
        'title' => 'Sky',
        'style' => 'bg-sky-500/5 border border-sky-500/5 text-sky-500',
    ],
    [
        'title' => 'Cyan',
        'style' => 'bg-cyan-500/5 border border-cyan-500/5 text-cyan-500',
    ],
    [
        'title' => 'Orange',
        'style' => 'bg-orange-600/5 border border-orange-600/5 text-orange-600',
    ],
    [
        'title' => 'Purple',
        'style' => 'bg-purple-600/5 border border-purple-600/5 text-purple-600',
    ],
    [
        'title' => 'Dark',
        'style' => 'bg-gray-800/5 border border-gray-800/5 text-gray-800 dark:text-gray-500',
    ],
    [
        'title' => 'Secondary',
        'style' => 'bg-gray-500/5 border border-gray-500/5 text-gray-500',
    ],
    [
        'title' => 'Light',
        'style' => 'bg-gray-50/5 border border-gray-50/5 text-gray-900 dark:text-gray-500',
    ]
];
@endphp

@foreach ($badges as $item)
    <li class="inline-block">
        <span class="{{ $item['style'] }} text-[12px] font-semibold px-2.5 py-0.5 rounded-full h-5">{{ $item['title'] }}</span>
    </li>
@endforeach