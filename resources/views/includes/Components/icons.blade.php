@php
$icons = [
    [
        'icon' => 'user',
    ],
    [
        'icon' => 'facebook',
    ],
    [
        'icon' => 'map-pin',
    ],
    [
        'icon' => 'linkedin',
    ],
    [
        'icon' => 'camera',
    ],
    [
        'icon' => 'mail',
    ]
];
@endphp

@foreach ($icons as $item)
    <li class="inline-block"><i data-feather="{{ $item['icon'] }}" class="size-8 me-2"></i></li>
@endforeach