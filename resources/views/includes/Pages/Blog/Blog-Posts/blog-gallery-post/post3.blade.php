@php
$posts = [
    [
        'img' => 'assets/images/portfolio/1.jpg',
        'groups' => '["branding"]',
    ],
    [
        'img' => 'assets/images/portfolio/10.jpg',
        'groups' => '["designing"]',
    ],
    [
        'img' => 'assets/images/portfolio/2.jpg',
        'groups' => '["photography"]',
    ],
    [
        'img' => 'assets/images/portfolio/13.jpg',
        'groups' => '["branding"]',
    ],
    [
        'img' => 'assets/images/portfolio/11.jpg',
        'groups' => '["branding"]',
    ],
    [
        'img' => 'assets/images/portfolio/12.jpg',
        'groups' => '["designing"]',
    ],
    [
        'img' => 'assets/images/portfolio/4.jpg',
        'groups' => '["development"]',
    ],
    [
        'img' => 'assets/images/portfolio/3.jpg',
        'groups' => '["development"]',
    ]
];
@endphp

@foreach ($posts as $item)
    <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='{{ $item['groups'] }}'>
        <div class="group relative block overflow-hidden rounded-md shadow-sm dark:shadow-gray-800 duration-500">
            <a href="{{ asset($item['img']) }}" class="lightbox duration-500 group-hover:scale-105" title="">
                <img src="{{ asset($item['img']) }}" class="shadow-sm dark:shadow-gray-800" alt="work-image">
            </a>
        </div>
    </div>
@endforeach