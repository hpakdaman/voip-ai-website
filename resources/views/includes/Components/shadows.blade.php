@php
$shadows = [
    [
        'title' => '.shadow-sm',
        'style' => 'shadow-sm',
    ],
    [
        'title' => '.shadow-xs',
        'style' => 'shadow-xs',
    ],
    [
        'title' => '.shadow-md',
        'style' => 'shadow-md',
    ],
    [
        'title' => '.shadow-lg',
        'style' => 'shadow-lg',
    ],
    [
        'title' => '.shadow-xl',
        'style' => 'shadow-xl',
    ],
    [
        'title' => '.shadow-2xl',
        'style' => 'shadow-2xl',
    ],
    [
        'title' => '.shadow-none',
        'style' => 'shadow-none',
    ]
];
@endphp

@foreach ($shadows as $item)
    <li class="{{ $item['style'] }} dark:shadow-gray-800 py-2 px-3 m-0.5 bg-white dark:bg-slate-900 text-slate-400">{{ $item['title'] }}</li>
@endforeach