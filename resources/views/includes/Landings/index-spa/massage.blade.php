@php
$massages = [
    [
        'img' => 'assets/images/spa/icons/facial-mask.png',
        'title' => 'Facial Mask',
        'price' => '$140',
        'desc' => "Your athletic spa experience and recovery.",
    ],
    [
        'img' => 'assets/images/spa/icons/foot-massage.png',
        'title' => 'Foot Massage',
        'price' => '$140',
        'desc' => "Your athletic spa experience and recovery.",
    ],
    [
        'img' => 'assets/images/spa/icons/massage.png',
        'title' => 'Massage',
        'price' => '$140',
        'desc' => "Your athletic spa experience and recovery.",
    ],
    [
        'img' => 'assets/images/spa/icons/natural-product.png',
        'title' => 'Natural Product',
        'price' => '$140',
        'desc' => "Your athletic spa experience and recovery.",
    ],
    [
        'img' => 'assets/images/spa/icons/relax.png',
        'title' => 'Relax',
        'price' => '$140',
        'desc' => "Your athletic spa experience and recovery.",
    ],
    [
        'img' => 'assets/images/spa/icons/sauna.png',
        'title' => 'Sauna',
        'price' => '$140',
        'desc' => "Your athletic spa experience and recovery.",
    ],
    [
        'img' => 'assets/images/spa/icons/spa-and-relaxation.png',
        'title' => 'Spa & Relaxation',
        'price' => '$140',
        'desc' => "Your athletic spa experience and recovery.",
    ],
    [
        'img' => 'assets/images/spa/icons/spa-candles.png',
        'title' => 'Spa Candles',
        'price' => '$140',
        'desc' => "Your athletic spa experience and recovery.",
    ],
    [
        'img' => 'assets/images/spa/icons/spa.png',
        'title' => 'Spa',
        'price' => '$140',
        'desc' => "Your athletic spa experience and recovery.",
    ],
    [
        'img' => 'assets/images/spa/icons/treatment.png',
        'title' => 'Treatments',
        'price' => '$140',
        'desc' => "Your athletic spa experience and recovery.",
    ]
];
@endphp

@foreach ($massages as $item)
    <div class="flex">
        <img src="{{ asset($item['img']) }}" class="size-16" alt="">

        <div class="ms-2 w-full">
            <div class="flex justify-between pb-2 border-b border-gray-100 dark:border-gray-800">
                <a href="" class="!font-ebgaramond hover:text-indigo-600 text-xl font-semibold">{{ $item['title'] }}</a>
                <h6 class="text-indigo-600">{{ $item['price'] }}</h6>
            </div>

            <p class="text-slate-400 mt-2">{{ $item['desc'] }}</p>
        </div>
    </div>
@endforeach