@php
$trends = [
    [
        'img' => 'assets/images/portfolio/2.jpg',
    ],
    [
        'img' => 'assets/images/portfolio/11.jpg',
    ],
    [
        'img' => 'assets/images/portfolio/13.jpg',
    ],
    [
        'img' => 'assets/images/portfolio/6.jpg',
    ],
    [
        'img' => 'assets/images/portfolio/7.jpg',
    ],
    [
        'img' => 'assets/images/portfolio/14.jpg',
    ],
    [
        'img' => 'assets/images/portfolio/12.jpg',
    ],
    [
        'img' => 'assets/images/portfolio/8.jpg',
    ],
    [
        'img' => 'assets/images/portfolio/9.jpg',
    ],
    [
        'img' => 'assets/images/portfolio/1.jpg',
    ],
    [
        'img' => 'assets/images/portfolio/15.jpg',
    ],
    [
        'img' => 'assets/images/portfolio/16.jpg',
    ]
];
@endphp

@foreach ($trends as $item)
    <div class="lg:w-1/3 md:w-1/2 p-1 picture-item">
        <div class="group relative block overflow-hidden rounded-md duration-500">
            <a href="{{ asset($item['img']) }}" class="lightbox duration-500 group-hover:scale-105" title="">
                <img src="{{ asset($item['img']) }}" class="" alt="work-image">
            </a>
        </div>
    </div>
@endforeach