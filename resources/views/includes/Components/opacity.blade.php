@php
$opacitys = [
    [
        'title' => '.bg-indigo-600',
        'style' => 'bg-indigo-600',
    ],
    [
        'title' => '.bg-indigo-600 .opacity-95',
        'style' => 'bg-indigo-600/95',
    ],
    [
        'title' => '.bg-indigo-600 .opacity-90',
        'style' => 'bg-indigo-600/90',
    ],
    [
        'title' => '.bg-indigo-600 .opacity-85',
        'style' => 'bg-indigo-600/85',
    ],
    [
        'title' => '.bg-indigo-600 .opacity-80',
        'style' => 'bg-indigo-600/80',
    ],
    [
        'title' => '.bg-indigo-600 .opacity-75',
        'style' => 'bg-indigo-600/75',
    ],
    [
        'title' => '.bg-indigo-600 .opacity-70',
        'style' => 'bg-indigo-600/70',
    ],
    [
        'title' => '.bg-indigo-600 .opacity-65',
        'style' => 'bg-indigo-600/65',
    ],
    [
        'title' => '.bg-indigo-600 .opacity-60',
        'style' => 'bg-indigo-600/60',
    ],
    [
        'title' => '.bg-indigo-600 .opacity-55',
        'style' => 'bg-indigo-600/55',
    ],
    [
        'title' => '.bg-indigo-600 .opacity-50',
        'style' => 'bg-indigo-600/50',
    ],
    [
        'title' => '.bg-indigo-600 .opacity-45',
        'style' => 'bg-indigo-600/45',
    ],
    [
        'title' => '.bg-indigo-600 .opacity-40',
        'style' => 'bg-indigo-600/40',
    ],
    [
        'title' => '.bg-indigo-600 .opacity-35',
        'style' => 'bg-indigo-600/35',
    ],
    [
        'title' => '.bg-indigo-600 .opacity-30',
        'style' => 'bg-indigo-600/30',
    ],
    [
        'title' => '.bg-indigo-600 .opacity-25',
        'style' => 'bg-indigo-600/25',
    ],
    [
        'title' => '.bg-indigo-600 .opacity-20',
        'style' => 'bg-indigo-600/20',
    ],
    [
        'title' => '.bg-indigo-600 .opacity-15',
        'style' => 'bg-indigo-600/15',
    ],
    [
        'title' => '.bg-indigo-600 .opacity-10',
        'style' => 'bg-indigo-600/10',
    ],
    [
        'title' => '.bg-indigo-600 .opacity-5',
        'style' => 'bg-indigo-600/5',
    ],
    [
        'title' => '.bg-indigo-600 .opacity-0',
        'style' => 'bg-indigo-600/0',
    ]
];
@endphp

@foreach ($opacitys as $item)
    <li class="inline-block shadow-sm dark:shadow-gray-800 rounded-md py-2 px-3 m-0.5 {{ $item['style'] }}">{{ $item['title'] }}</li>
@endforeach