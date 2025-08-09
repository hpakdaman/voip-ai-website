@php
$views = [
    [
        'img' => 'assets/images/solar/1.jpg',
    ],
    [
        'img' => 'assets/images/solar/2.jpg',
    ],
    [
        'img' => 'assets/images/solar/4.jpg',
    ]
];
@endphp

@foreach ($views as $item)
    <div class="tiny-slide">
        <div class="m-2">
            <img src="{{ asset($item['img']) }}" class="rounded" alt="">
        </div>
    </div>
@endforeach