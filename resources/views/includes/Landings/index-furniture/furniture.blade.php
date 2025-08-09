@php
$furnitures = [
    [
        'img' => 'assets/images/furniture/insta-1.jpg',
    ],
    [
        'img' => 'assets/images/furniture/insta-2.jpg',
    ],
    [
        'img' => 'assets/images/furniture/insta-3.jpg',
    ],
    [
        'img' => 'assets/images/furniture/insta-4.jpg',
    ],
    [
        'img' => 'assets/images/furniture/insta-5.jpg',
    ],
    [
        'img' => 'assets/images/furniture/insta-6.jpg',
    ],
    [
        'img' => 'assets/images/furniture/insta-7.jpg',
    ],
    [
        'img' => 'assets/images/furniture/insta-8.jpg',
    ],
    [
        'img' => 'assets/images/furniture/insta-9.jpg',
    ],
    [
        'img' => 'assets/images/furniture/insta-10.jpg',
    ],
    [
        'img' => 'assets/images/furniture/insta-11.jpg',
    ],
    [
        'img' => 'assets/images/furniture/insta-12.jpg',
    ]
];
@endphp

@foreach ($furnitures as $item)
    <div class="tiny-slide">
        <div class="card border-0 rounded-0">
            <div class="card-body p-0">
                <a href="{{ asset($item['img']) }}" class="lightbox d-inline-block" title="">
                    <img src="{{ asset($item['img']) }}" class="" alt="Furniture">
                    <div class="overlay bg-slate-900"></div>
                </a>
            </div>
        </div>
    </div>
@endforeach