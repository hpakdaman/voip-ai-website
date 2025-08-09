@php
$posts = [
    [
        'img' => 'assets/images/food/1.jpg',
    ],
    [
        'img' => 'assets/images/food/2.jpg',
    ],
    [
        'img' => 'assets/images/food/3.jpg',
    ],
    [
        'img' => 'assets/images/food/4.jpg',
    ],
    [
        'img' => 'assets/images/food/5.jpg',
    ],
    [
        'img' => 'assets/images/food/6.jpg',
    ],
    [
        'img' => 'assets/images/food/7.jpg',
    ],
    [
        'img' => 'assets/images/food/8.jpg',
    ],
    [
        'img' => 'assets/images/food/9.jpg',
    ],
    [
        'img' => 'assets/images/food/10.jpg',
    ],
    [
        'img' => 'assets/images/food/11.jpg',
    ],
    [
        'img' => 'assets/images/food/12.jpg',
    ],
    [
        'img' => 'assets/images/food/13.jpg',
    ],
    [
        'img' => 'assets/images/food/14.jpg',
    ],
    [
        'img' => 'assets/images/food/15.jpg',
    ]
];
@endphp

@foreach ($posts as $item)
    <div class="tiny-slide">
        <div class="card border-0 rounded-0">
            <div class="card-body p-0">
                <a href="{{ asset($item['img']) }}" class="lightbox d-inline-block" title="">
                    <img src="{{ asset($item['img']) }}" class="" alt="Insta Post">
                    <div class="overlay bg-slate-900"></div>
                </a>
            </div>
        </div>
    </div>
@endforeach