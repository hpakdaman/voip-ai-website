@php
$portfolios = [
    [
        'id' => 1,
        'img' => 'assets/images/portfolio/10.jpg',
        'title' => 'Iphone mockup',
        'name' => 'Branding',
        'groups' => '["branding"]',
    ],
    [
        'id' => 2,
        'img' => 'assets/images/portfolio/2.jpg',
        'title' => 'The Blue Canton',
        'name' => 'Branding',
        'groups' => '["designing"]',
    ],
    [
        'id' => 3,
        'img' => 'assets/images/portfolio/11.jpg',
        'title' => 'The Chrysler',
        'name' => 'Branding',
        'groups' => '["photography"]',
    ],
    [
        'id' => 4,
        'img' => 'assets/images/portfolio/13.jpg',
        'title' => 'Purple Flatiron',
        'name' => 'Branding',
        'groups' => '["branding"]',
    ],
    [
        'id' => 5,
        'img' => 'assets/images/portfolio/6.jpg',
        'title' => 'Rustic Reunion',
        'name' => 'Branding',
        'groups' => '["branding"]',
    ],
    [
        'id' => 6,
        'img' => 'assets/images/portfolio/7.jpg',
        'title' => 'The Red Freedom',
        'name' => 'Branding',
        'groups' => '["designing"]',
    ],
    [
        'id' => 7,
        'img' => 'assets/images/portfolio/14.jpg',
        'title' => 'The Donald',
        'name' => 'Branding',
        'groups' => '["development"]',
    ],
    [
        'id' => 8,
        'img' => 'assets/images/portfolio/12.jpg',
        'title' => 'Red Tiny Hearst',
        'name' => 'Branding',
        'groups' => '["development"]',
    ],
    [
        'id' => 9,
        'img' => 'assets/images/portfolio/8.jpg',
        'title' => 'List of benifits',
        'name' => 'Branding',
        'groups' => '["development"]',
    ],
    [
        'id' => 10,
        'img' => 'assets/images/portfolio/9.jpg',
        'title' => 'listio properties',
        'name' => 'Branding',
        'groups' => '["development"]',
    ],
    [
        'id' => 11,
        'img' => 'assets/images/portfolio/1.jpg',
        'title' => 'says about',
        'name' => 'Branding',
        'groups' => '["branding"]',
    ],
    [
        'id' => 12,
        'img' => 'assets/images/portfolio/15.jpg',
        'title' => 'listio propertie',
        'name' => 'Branding',
        'groups' => '["designing"]',
    ],
    [
        'id' => 13,
        'img' => 'assets/images/portfolio/16.jpg',
        'title' => 'say abouts',
        'name' => 'Branding',
        'groups' => '["development"]',
    ]
];
@endphp

@foreach ($portfolios as $item)
    <div class="lg:w-1/5 md:w-1/3 p-1 picture-item" data-groups='{{ $item['groups'] }}'>
        <div class="group relative block overflow-hidden rounded-md duration-500">
            <a href="{{ asset($item['img']) }}" class="lightbox duration-500 group-hover:scale-105" title="">
                <img src="{{ asset($item['img']) }}" class="" alt="work-image">
            </a>
            <div class="absolute -bottom-52 group-hover:bottom-2 start-2 end-2 duration-500 bg-white dark:bg-slate-900 p-4 rounded shadow-sm dark:shadow-gray-800">
                <a href="{{ route('portfolio-detail-two', ['title' => Str::slug($item['title'])]) }}" class="hover:text-indigo-600 text-lg duration-500 font-medium">{{ $item['title'] }}</a>
                <h6 class="text-slate-400">{{ $item['name'] }}</h6>
            </div>
        </div>
    </div>
@endforeach