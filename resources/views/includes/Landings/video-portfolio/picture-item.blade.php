@php
$items = [
    [
        'img' => 'assets/images/portfolio/01.jpg',
        'videos' => 'assets/images/video/bg.png',
        'groups' => '["branding"]',
    ],
    [
        'img' => 'assets/images/portfolio/02.jpg',
        'videos' => 'assets/images/video/bg.png',
        'groups' => '["designing"]',
    ],
    [
        'img' => 'assets/images/portfolio/03.jpg',
        'videos' => 'assets/images/video/bg.png',
        'groups' => '["photography"]',
    ],
    [
        'img' => 'assets/images/portfolio/04.jpg',
        'videos' => 'assets/images/video/bg.png',
        'groups' => '["development"]',
    ],
    [
        'img' => 'assets/images/portfolio/05.jpg',
        'videos' => 'assets/images/video/bg.png',
        'groups' => '["branding"]',
    ],
    [
        'img' => 'assets/images/portfolio/06.jpg',
        'videos' => 'assets/images/video/bg.png',
        'groups' => '["branding"]',
    ]
];
@endphp

@foreach ($items as $item)
    <div class="picture-item" data-groups='{{ $item['groups'] }}'>
        <div class="group relative block overflow-hidden rounded-md duration-500">
            <a href="#!" data-type="youtube" data-id="S_CGed6E610" class="lightbox max-w-full max-h-full">
                <span class="relative">
                    <img src="{{ asset($item['img']) }}" class="rounded-md" alt="">
                    <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 duration-500">
                        <img src="{{ asset($item['videos']) }}" class="rounded-md absolute top-1/2 -translate-y-1/2 start-0 end-0 p-4" alt="">
                    </div>
                </span>
            </a>
        </div>
    </div>
@endforeach