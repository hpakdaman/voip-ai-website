@php
$portfolios = [
    [
        'id' => 7,
        'img' => 'assets/images/portfolio/1.jpg',
        'title' => 'Mockup Collection',
        'name' => "Abstract",
    ],
    [
        'id' => 8,
        'img' => 'assets/images/portfolio/2.jpg',
        'title' => 'The Blue Canton',
        'name' => "Abstract",
    ],
    [
        'id' => 9,
        'img' => 'assets/images/portfolio/3.jpg',
        'title' => 'The Chrysler',
        'name' => "Abstract",
    ],
    [
        'id' => 10,
        'img' => 'assets/images/portfolio/4.jpg',
        'title' => 'Purple Flatiron',
        'name' => "Abstract",
    ],
    [
        'id' => 11,
        'img' => 'assets/images/portfolio/5.jpg',
        'title' => 'Rustic Reunion',
        'name' => "Abstract",
    ],
    [
        'id' => 12,
        'img' => 'assets/images/portfolio/6.jpg',
        'title' => 'The Red Freedom',
        'name' => "Abstract",
    ],
    [
        'id' => 13,
        'img' => 'assets/images/portfolio/7.jpg',
        'title' => 'The Donald',
        'name' => "Abstract",
    ],
    [
        'id' => 14,
        'img' => 'assets/images/portfolio/8.jpg',
        'title' => 'Red Tiny Hearst',
        'name' => "Abstract",
    ]
];
@endphp

@foreach ($portfolios as $item)
    <div class="group relative block overflow-hidden rounded-md duration-500">
        <img src="{{ asset($item['img']) }}" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 duration-500" alt="">
        <div class="absolute inset-0 group-hover:bg-slate-900 opacity-50 duration-500 z-0"></div>

        <div class="content">
            <div class="icon absolute z-10 opacity-0 group-hover:opacity-100 top-4 end-4 duration-500">
                <a href="{{ asset($item['img']) }}" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full lightbox"><i class="uil uil-camera"></i></a>
            </div>

            <div class="title absolute z-10 opacity-0 group-hover:opacity-100 bottom-4 start-4 duration-500">
                <a href="{{ route('portfolio-detail-one', ['title' => Str::slug($item['title'])]) }}" class="h6 text-md font-medium text-white hover:text-indigo-600 duration-500 ease-in-out">{{ $item['title'] }}</a>
                <p class="text-slate-100 tag mb-0">{{ $item['name'] }}</p>
            </div>
        </div>
    </div>
@endforeach