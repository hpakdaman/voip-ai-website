@php
$images = [
    [
        'img' => 'assets/images/studio/01.jpg',
    ],
    [
        'img' => 'assets/images/studio/02.jpg',
    ],
    [
        'img' => 'assets/images/studio/03.jpg',
    ]
];
@endphp

@foreach ($images as $item)
    <div class="tiny-slide">
        <div class="m-2 mx-3">
            <img src="{{ asset($item['img']) }}" class="rounded-lg" alt="">
        </div>
    </div>
@endforeach