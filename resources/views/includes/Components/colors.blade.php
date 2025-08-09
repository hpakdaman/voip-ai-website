@php
$colors = [
    [
        'title' => '.text-indigo-600',
        'style' => 'text-indigo-600 font-semibold',
    ],
    [
        'title' => '.text-emerald-600',
        'style' => 'text-emerald-600 font-semibold',
    ],
    [
        'title' => '.text-red-600',
        'style' => 'text-red-600 font-semibold',
    ],
    [
        'title' => '.text-yellow-500',
        'style' => 'text-yellow-500 font-semibold',
    ],
    [
        'title' => '.text-amber-500',
        'style' => 'text-amber-500 font-semibold',
    ],
    [
        'title' => '.text-blue-600',
        'style' => 'text-blue-600 font-semibold',
    ],
    [
        'title' => '.text-sky-500',
        'style' => 'text-sky-500 font-semibold',
    ],
    [
        'title' => '.text-cyan-500',
        'style' => 'text-cyan-500 font-semibold',
    ],
    [
        'title' => '.text-orange-600',
        'style' => 'text-orange-600 font-semibold',
    ],
    [
        'title' => '.text-purple-600',
        'style' => 'text-purple-600 font-semibold',
    ],
    [
        'title' => '.text-slate-900',
        'style' => 'text-slate-900 font-semibold',
    ]
];
@endphp

@foreach ($colors as $item)
    <li>
        <span class="{{ $item['style'] }}">{{ $item['title'] }}</span>
    </li>
@endforeach