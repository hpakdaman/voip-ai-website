@php
$posts = [
    [
        'img' => 'assets/images/cafe/coffee-cup/01.jpg',
    ],
    [
        'img' => 'assets/images/cafe/coffee-cup/02.jpg',
    ],
    [
        'img' => 'assets/images/cafe/coffee-cup/03.jpg',
    ],
    [
        'img' => 'assets/images/cafe/coffee-cup/04.jpg',
    ],
    [
        'img' => 'assets/images/cafe/coffee-cup/05.jpg',
    ],
    [
        'img' => 'assets/images/cafe/coffee-cup/06.jpg',
    ],
    [
        'img' => 'assets/images/cafe/coffee-cup/01.jpg',
    ],
    [
        'img' => 'assets/images/cafe/coffee-cup/02.jpg',
    ],
    [
        'img' => 'assets/images/cafe/coffee-cup/03.jpg',
    ],
    [
        'img' => 'assets/images/cafe/coffee-cup/04.jpg',
    ],
    [
        'img' => 'assets/images/cafe/coffee-cup/05.jpg',
    ],
    [
        'img' => 'assets/images/cafe/coffee-cup/06.jpg',
    ],
    [
        'img' => 'assets/images/cafe/coffee-cup/05.jpg',
    ],
    [
        'img' => 'assets/images/cafe/coffee-cup/06.jpg',
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