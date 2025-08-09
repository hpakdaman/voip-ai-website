@php
$moderns = [
    [
        'id' => 1,
        'img' => 'assets/images/portfolio/1.jpg',
        'title' => 'Mockup Collection',
        'name' => 'Abstract',
        'groups' => '["branding"]',
    ],
    [
        'id' => 2,
        'img' => 'assets/images/portfolio/2.jpg',
        'title' => 'The Landscape House',
        'name' => 'Abstract',
        'groups' => '["designing"]',
    ],
    [
        'id' => 3,
        'img' => 'assets/images/portfolio/3.jpg',
        'title' => 'New Build Family Home',
        'name' => 'Abstract',
        'groups' => '["photography"]',
    ],
    [
        'id' => 4,
        'img' => 'assets/images/portfolio/4.jpg',
        'title' => 'Private and Social Apartments',
        'name' => 'Abstract',
        'groups' => '["development"]',
    ],
    [
        'id' => 5,
        'img' => 'assets/images/portfolio/5.jpg',
        'title' => 'Apartment Complex',
        'name' => 'Abstract',
        'groups' => '["branding"]',
    ],
    [
        'id' => 6,
        'img' => 'assets/images/portfolio/6.jpg',
        'title' => 'Construction Engineering',
        'name' => 'Abstract',
        'groups' => '["branding"]',
    ],
    [
        'id' => 7,
        'img' => 'assets/images/portfolio/7.jpg',
        'title' => 'The Blue Canton',
        'name' => 'Abstract',
        'groups' => '["designing"]',
    ],
    [
        'id' => 8,
        'img' => 'assets/images/portfolio/8.jpg',
        'title' => 'The Chrysler',
        'name' => 'Abstract',
        'groups' => '["development"]',
    ],
    [
        'id' => 9,
        'img' => 'assets/images/portfolio/20.jpg',
        'title' => 'Purple Flatiron',
        'name' => 'Abstract',
        'groups' => '["photography"]',
    ],
    [
        'id' => 10,
        'img' => 'assets/images/portfolio/21.jpg',
        'title' => 'Rustic Reunion',
        'name' => 'Abstract',
        'groups' => '["photography"]',
    ],
    [
        'id' => 11,
        'img' => 'assets/images/portfolio/22.jpg',
        'title' => 'The Donald',
        'name' => 'Abstract',
        'groups' => '["branding"]',
    ],
    [
        'id' => 12,
        'img' => 'assets/images/portfolio/23.jpg',
        'title' => 'Red Tiny Hearst',
        'name' => 'Abstract',
        'groups' => '["branding"]',
    ]
];
@endphp

@foreach ($moderns as $item)
    <div class="lg:w-1/6 md:w-1/2 p-4 picture-item" data-groups='{{ $item['groups'] }}'>
        <div class="group relative block overflow-hidden rounded-md duration-500">
            <img src="{{ asset($item['img']) }}" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 duration-500" alt="">
            <div class="absolute inset-2 group-hover:bg-white/90 dark:group-hover:bg-slate-900/90 duration-500 z-0 rounded-md"></div>

            <div class="content duration-500">
                <div class="icon absolute z-10 opacity-0 group-hover:opacity-100 top-6 end-6 duration-500">
                    <a href="{{ asset($item['img']) }}" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full lightbox"><i class="uil uil-camera"></i></a>
                </div>

                <div class="absolute z-10 opacity-0 group-hover:opacity-100 bottom-6 start-6 duration-500">
                    <a href="{{ route('portfolio-detail-three', ['title' => Str::slug($item['title'])]) }}" class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">{{ $item['title'] }}</a>
                    <p class="text-slate-400 mb-0">{{ $item['name'] }}</p>
                </div>
            </div>
        </div>
    </div>
@endforeach