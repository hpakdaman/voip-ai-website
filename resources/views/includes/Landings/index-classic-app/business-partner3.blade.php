@php
$partners = [
    [
        'img' => 'assets/images/client/9.png',
    ],
    [
        'img' => 'assets/images/client/10.png',
    ],
    [
        'img' => 'assets/images/client/11.png',
    ],
    [
        'img' => 'assets/images/client/12.png',
    ],
    [
        'img' => 'assets/images/client/13.png',
    ],
    [
        'img' => 'assets/images/client/14.png',
    ]
];
@endphp

@foreach ($partners as $item)
    <div class="mx-auto py-4">
        <img src="{{ asset($item['img']) }}" class="h-20" alt="">
    </div>
@endforeach