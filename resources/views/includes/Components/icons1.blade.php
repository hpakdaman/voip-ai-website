@php
$icons = [
    [
        'icon' => 'mdi mdi-home text-lg me-2',
    ],
    [
        'icon' => 'mdi mdi-facebook text-lg me-2',
    ],
    [
        'icon' => 'mdi mdi-chevron-tight text-lg me-2',
    ],
    [
        'icon' => 'mdi mdi-camera-image text-lg me-2',
    ],
    [
        'icon' => 'mdi mdi-car-light-high text-lg me-2',
    ],
    [
        'icon' => 'mdi mdi-silverware-fork-knife text-lg me-2',
    ]
];
@endphp

@foreach ($icons as $item)
    <i class="{{ $item['icon'] }}"></i>
@endforeach