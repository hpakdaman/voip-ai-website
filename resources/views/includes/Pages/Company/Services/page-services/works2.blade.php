@php
$works = [
    [
        'id' => 11,
        'img' => 'assets/images/portfolio/1.jpg',
        'title' => 'says about',
        'name' => 'Branding',
    ],
    [
        'id' => 2,
        'img' => 'assets/images/portfolio/2.jpg',
        'title' => 'The Blue Canton',
        'name' => 'Branding',
    ],
    [
        'id' => 14,
        'img' => 'assets/images/portfolio/3.jpg',
        'title' => 'The Blue Cantons',
        'name' => 'Branding',
    ],
    [
        'id' => 15,
        'img' => 'assets/images/portfolio/4.jpg',
        'title' => 'The Projects',
        'name' => 'Branding',
    ],
    [
        'id' => 16,
        'img' => 'assets/images/portfolio/5.jpg',
        'title' => 'The Brand',
        'name' => 'Branding',
    ],
    [
        'id' => 5,
        'img' => 'assets/images/portfolio/6.jpg',
        'title' => 'Rustic Reunion',
        'name' => 'Branding',
    ],
    [
        'id' => 6,
        'img' => 'assets/images/portfolio/7.jpg',
        'title' => 'The Red Freedom',
        'name' => 'Branding',
    ],
    [
        'id' => 9,
        'img' => 'assets/images/portfolio/8.jpg',
        'title' => 'List of benifits',
        'name' => 'Branding',
    ],
    [
        'id' => 10,
        'img' => 'assets/images/portfolio/9.jpg',
        'title' => 'listio properties',
        'name' => 'Branding',
    ],
    [
        'id' => 17,
        'img' => 'assets/images/portfolio/20.jpg',
        'title' => 'Latest Projects',
        'name' => 'Branding',
    ],
    [
        'id' => 18,
        'img' => 'assets/images/portfolio/21.jpg',
        'title' => 'The Book',
        'name' => 'Branding',
    ],
    [
        'id' => 19,
        'img' => 'assets/images/portfolio/22.jpg',
        'title' => 'coffee',
        'name' => 'Branding',
    ],
    [
        'id' => 20,
        'img' => 'assets/images/portfolio/23.jpg',
        'title' => 'The Leafs',
        'name' => 'Branding',
    ]
];
@endphp

@foreach ($works as $item)
    <div class="tiny-slide">
        <div class="group relative block overflow-hidden rounded-md duration-500 mx-2">
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