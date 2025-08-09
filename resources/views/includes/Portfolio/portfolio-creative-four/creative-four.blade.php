@php
$creatives = [
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
        'id' => 12,
        'img' => 'assets/images/portfolio/23.jpg',
        'title' => 'Red Tiny Hearst',
        'name' => 'Abstract',
        'groups' => '["photography"]',
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
        'groups' => '["branding"]',
    ],
    [
        'id' => 11,
        'img' => 'assets/images/portfolio/22.jpg',
        'title' => 'The Donald',
        'name' => 'Abstract',
        'groups' => '["branding"]',
    ]
];
@endphp

@foreach ($creatives as $item)
    <div class="lg:w-1/4 md:w-1/3 p-4 picture-item" data-groups='{{ $item['groups'] }}'>
        <div class="group relative block overflow-hidden rounded-md duration-700 ease-in-out">
            <div class="relative bg-indigo-600 overflow-hidden rounded-md">
                <a href="{{ asset($item['img']) }}" class="lightbox duration-700 ease-in-out group-hover:p-[10px]" title="">
                    <img src="{{ asset($item['img']) }}" class="rounded-md" alt="">
                </a>
            </div>
            <div class="content duration-700 ease-in-out">
                <div class="bg-white dark:bg-slate-900 p-3 rounded-md absolute z-10 bottom-5 start-5 duration-700 ease-in-out scale-0 group-hover:scale-100">
                    <a href="{{ route('portfolio-detail-three', ['title' => Str::slug($item['title'])]) }}" class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">{{ $item['title'] }}</a>
                    <p class="text-slate-400 mb-0">{{ $item['name'] }}</p>
                </div>
            </div>
        </div>
    </div>
@endforeach