@php
$brands = [
    [
        'img' => 'assets/images/client/amazon-prime-video-logo.svg',
    ],
    [
        'img' => 'assets/images/client/angular-3.svg',
    ],
    [
        'img' => 'assets/images/client/huawei-2.svg',
    ],
    [
        'img' => 'assets/images/client/bosch.svg',
    ],
    [
        'img' => 'assets/images/client/coinbase.svg',
    ],
    [
        'img' => 'assets/images/client/husd-3.svg',
    ],
    [
        'img' => 'assets/images/client/intercom-1.svg',
    ],
    [
        'img' => 'assets/images/client/linkedin-logo-2013-1.svg',
    ],
    [
        'img' => 'assets/images/client/yamaha-2-1.svg',
    ],
    [
        'img' => 'assets/images/client/logo-donington-park.svg',
    ],
    [
        'img' => 'assets/images/client/microsoft-office-2013.svg',
    ],
    [
        'img' => 'assets/images/client/netflix-3.svg',
    ],
    [
        'img' => 'assets/images/client/python-3.svg',
    ],
    [
        'img' => 'assets/images/client/redbull-1.svg',
    ],
    [
        'img' => 'assets/images/client/zoom-communications-logo.svg',
    ],
    [
        'img' => 'assets/images/client/suntech-power-logo.svg',
    ],
    [
        'img' => 'assets/images/client/v-power-1.svg',
    ]
];
@endphp

@foreach ($brands as $item)
<div class="mx-auto">
    <img src="{{ asset($item['img']) }}" class="size-[110px] grayscale hover:grayscale-0 duration-500 ease-in-out" alt="">
</div>
@endforeach