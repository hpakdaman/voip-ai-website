@php
$colors = [
    [
        'title' => '.bg-indigo-600',
        'style' => 'text-white bg-indigo-600',
    ],
    [
        'title' => '.bg-emerald-600',
        'style' => 'text-white bg-emerald-600',
    ],
    [
        'title' => '.bg-red-600',
        'style' => 'text-white bg-red-600',
    ],
    [
        'title' => '.bg-yellow-500',
        'style' => 'text-white bg-yellow-500',
    ],
    [
        'title' => '.bg-blue-600',
        'style' => 'text-white bg-blue-600',
    ],
    [
        'title' => '.bg-sky-500',
        'style' => 'text-white bg-sky-500',
    ],
    [
        'title' => '.bg-cyan-500',
        'style' => 'text-white bg-cyan-500',
    ],
    [
        'title' => '.bg-orange-600',
        'style' => 'text-white bg-orange-600',
    ],
    [
        'title' => '.bg-purple-600',
        'style' => 'text-white bg-purple-600',
    ],
    [
        'title' => '.bg-slate-800',
        'style' => 'text-white bg-slate-800',
    ],
    [
        'title' => '.bg-slate-900',
        'style' => 'text-white bg-slate-900',
    ],
    [
        'title' => '.bg-gray-50',
        'style' => 'text-slate-900 bg-gray-50',
    ],
    [
        'title' => '.bg-white',
        'style' => 'text-slate-900 bg-white',
    ]
];
@endphp

@foreach ($colors as $item)
    <li class="inline-block shadow-sm dark:shadow-gray-800 rounded-md py-2 px-3 m-0.5 {{ $item['style'] }}">{{ $item['title'] }}</li>
@endforeach