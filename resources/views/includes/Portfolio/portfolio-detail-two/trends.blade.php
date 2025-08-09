@php
$trends = [
    [
        'img' => 'assets/images/portfolio/2.jpg',
        'groups' => '["designing"]',
    ],
    [
        'img' => 'assets/images/portfolio/11.jpg',
        'groups' => '["photography"]',
    ],
    [
        'img' => 'assets/images/portfolio/13.jpg',
        'groups' => '["branding"]',
    ],
    [
        'img' => 'assets/images/portfolio/6.jpg',
        'groups' => '["branding"]',
    ],
    [
        'img' => 'assets/images/portfolio/7.jpg',
        'groups' => '["designing"]',
    ],
    [
        'img' => 'assets/images/portfolio/14.jpg',
        'groups' => '["development"]',
    ],
    [
        'img' => 'assets/images/portfolio/12.jpg',
        'groups' => '["development"]',
    ],
    [
        'img' => 'assets/images/portfolio/8.jpg',
        'groups' => '["development"]',
    ],
    [
        'img' => 'assets/images/portfolio/9.jpg',
        'groups' => '["development"]',
    ],
    [
        'img' => 'assets/images/portfolio/1.jpg',
        'groups' => '["branding"]',
    ],
    [
        'img' => 'assets/images/portfolio/15.jpg',
        'groups' => '["designing"]',
    ],
    [
        'img' => 'assets/images/portfolio/16.jpg',
        'groups' => '["development"]',
    ]
];
@endphp

@foreach ($trends as $item)
    <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='{{ $item['groups'] }}'>
        <div class="group relative block overflow-hidden rounded-md duration-500">
            <a href="{{ asset($item['img']) }}" class="lightbox duration-500 group-hover:scale-105" title="">
                <img src="{{ asset($item['img']) }}" class="" alt="work-image">
            </a>
        </div>
    </div>
@endforeach