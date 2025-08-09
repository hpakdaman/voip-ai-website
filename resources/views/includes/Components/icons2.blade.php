@php
$icons = [
    [
        'icon' => 'uil uil-0-plus',
        'style' => 'text-lg text-indigo-600 me-2',
    ],
    [
        'icon' => 'uil uil-android',
        'style' => 'text-lg text-indigo-600 me-2',
    ],
    [
        'icon' => 'uil uil-bitcoin',
        'style' => 'text-lg text-indigo-600 me-2',
    ],
    [
        'icon' => 'uil uil-calendar-alt',
        'style' => 'text-lg text-indigo-600 me-2',
    ],
    [
        'icon' => 'uil uil-chart-pie-alt',
        'style' => 'text-lg text-indigo-600',
    ]
];
@endphp

@foreach ($icons as $item)
    <span class="{{ $item['style'] }}"><i class="{{ $item['icon'] }}"></i></span>
@endforeach