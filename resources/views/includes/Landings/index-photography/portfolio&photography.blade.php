@php
$photographys = [
    [
        'img' => 'assets/images/photography/p1.jpg',
        'groups' => '["branding"]',
    ],
    [
        'img' => 'assets/images/photography/p2.jpg',
        'groups' => '["designing"]',
    ],
    [
        'img' => 'assets/images/photography/p3.jpg',
        'groups' => '["photography"]',
    ],
    [
        'img' => 'assets/images/photography/p4.jpg',
        'groups' => '["branding"]',
    ],
    [
        'img' => 'assets/images/photography/p5.jpg',
        'groups' => '["branding"]',
    ],
    [
        'img' => 'assets/images/photography/p7.jpg',
        'groups' => '["designing"]',
    ],
    [
        'img' => 'assets/images/photography/p11.jpg',
        'groups' => '["development"]',
    ],
    [
        'img' => 'assets/images/photography/p10.jpg',
        'groups' => '["development"]',
    ]
];
@endphp

@foreach ($photographys as $item)
    <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='{{ $item['groups'] }}'>
        <div class="group relative block overflow-hidden rounded-md duration-500">
            <img src="{{ asset($item['img']) }}" class="" alt="work-image">
            <div class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                <a href="{{ asset($item['img']) }}" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i class="uil uil-camera"></i></a>
            </div>
        </div>
    </div>
@endforeach