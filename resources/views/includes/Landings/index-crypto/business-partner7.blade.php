@php
$partners = [
    [
        'img' => 'assets/images/client/amazon.svg',
    ],
    [
        'img' => 'assets/images/client/google.svg',
    ],
    [
        'img' => 'assets/images/client/lenovo.svg',
    ],
    [
        'img' => 'assets/images/client/paypal.svg',
    ],
    [
        'img' => 'assets/images/client/shopify.svg',
    ],
    [
        'img' => 'assets/images/client/spotify.svg',
    ]
];
@endphp

@foreach ($partners as $item)
    <div class="mx-auto">
        <img src="{{ asset($item['img']) }}" class="h-6" alt="">
    </div>
@endforeach