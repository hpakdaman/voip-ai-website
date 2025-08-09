@php
$gallerys = [
    [
        'img' => 'assets/images/gym/01.jpg',
    ],
    [
        'img' => 'assets/images/gym/02.jpg',
    ],
    [
        'img' => 'assets/images/gym/03.jpg',
    ],
    [
        'img' => 'assets/images/gym/04.jpg',
    ],
    [
        'img' => 'assets/images/gym/05.jpg',
    ],
    [
        'img' => 'assets/images/gym/06.jpg',
    ],
    [
        'img' => 'assets/images/gym/07.jpg',
    ],
    [
        'img' => 'assets/images/gym/08.jpg',
    ],
    [
        'img' => 'assets/images/gym/09.jpg',
    ],
    [
        'img' => 'assets/images/gym/10.jpg',
    ]
];
@endphp

@foreach ($gallerys as $item)
    <div class="group relative block overflow-hidden duration-500">
        <a href="{{ asset($item['img']) }}" class="lightbox duration-500 group-hover:scale-105" title="">
            <img src="{{ asset($item['img']) }}" class="" alt="Gym Images">
        </a>
    </div>
@endforeach