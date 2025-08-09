@php
$borders = [
    [
        'title' => '.rounded-none',
        'style' => 'rounded-none',
    ],
    [
        'title' => '.rounded-sm',
        'style' => 'rounded-sm',
    ],
    [
        'title' => '.rounded',
        'style' => 'rounded',
    ],
    [
        'title' => '.rounded-md',
        'style' => 'rounded-md',
    ],
    [
        'title' => '.rounded-lg',
        'style' => 'rounded-lg',
    ],
    [
        'title' => '.rounded-xl',
        'style' => 'rounded-xl',
    ],
    [
        'title' => '.rounded-2xl',
        'style' => 'rounded-2xl',
    ],
    [
        'title' => '.rounded-3xl',
        'style' => 'rounded-3xl',
    ],
    [
        'title' => '.rounded-full',
        'style' => 'rounded-full',
    ]
];
@endphp

@foreach ($borders as $item)
    <li class="inline-block {{ $item['style'] }} shadow-sm dark:shadow-gray-800 py-6 px-3 m-0.5 bg-white dark:bg-slate-900 text-slate-400">{{ $item['title'] }}</li>
@endforeach