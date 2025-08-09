@php
$partners = [
    [
        'img' => 'assets/images/client/amazon.svg',
        'data' => '.1s',
    ],
    [
        'img' => 'assets/images/client/google.svg',
        'data' => '.3s',
    ],
    [
        'img' => 'assets/images/client/lenovo.svg',
        'data' => '.5s',
    ],
    [
        'img' => 'assets/images/client/paypal.svg',
        'data' => '.7s',
    ],
    [
        'img' => 'assets/images/client/shopify.svg',
        'data' => '.9s',
    ],
    [
        'img' => 'assets/images/client/spotify.svg',
        'data' => '1.1s',
    ]
];
@endphp

@foreach ($partners as $item)
    <div class="mx-auto py-4 wow animate__animated animate__fadeInUp" data-wow-delay="{{ $item['data'] }}">
        <img src="{{ asset($item['img']) }}" class="h-6" alt="">
    </div>
@endforeach