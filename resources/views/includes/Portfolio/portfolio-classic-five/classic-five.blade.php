@php
$classics = [
    [
        'id' => 15,
        'img' => 'assets/images/portfolio/01.jpg',
        'title' => 'Iphone mockup',
        'name' => 'Branding',
        'groups' => '["branding"]',
    ],
    [
        'id' => 16,
        'img' => 'assets/images/portfolio/02.jpg',
        'title' => 'Mockup Collections',
        'name' => 'Mockup',
        'groups' => '["designing"]',
    ],
    [
        'id' => 17,
        'img' => 'assets/images/portfolio/03.jpg',
        'title' => 'Abstract images',
        'name' => 'Abstract',
        'groups' => '["photography"]',
    ],
    [
        'id' => 18,
        'img' => 'assets/images/portfolio/04.jpg',
        'title' => 'Yellow bg with Books',
        'name' => 'Books',
        'groups' => '["development"]',
    ],
    [
        'id' => 19,
        'img' => 'assets/images/portfolio/05.jpg',
        'title' => 'Company V-card',
        'name' => 'V-card',
        'groups' => '["branding"]',
    ],
    [
        'id' => 20,
        'img' => 'assets/images/portfolio/06.jpg',
        'title' => 'Mockup box with paints',
        'name' => 'Photography',
        'groups' => '["branding"]',
    ],
    [
        'id' => 21,
        'img' => 'assets/images/portfolio/07.jpg',
        'title' => 'Coffee cup',
        'name' => 'Cups',
        'groups' => '["designing"]',
    ],
    [
        'id' => 22,
        'img' => 'assets/images/portfolio/08.jpg',
        'title' => 'Pen and article',
        'name' => 'Article',
        'groups' => '["development"]',
    ],
    [
        'id' => 23,
        'img' => 'assets/images/portfolio/09.jpg',
        'title' => 'White mockup box',
        'name' => 'Color',
        'groups' => '["photography"]',
    ],
    [
        'id' => 24,
        'img' => 'assets/images/portfolio/010.jpg',
        'title' => 'Logo Vectors',
        'name' => 'Logos',
        'groups' => '["photography"]',
    ]
];
@endphp

@foreach ($classics as $item)
    <div class="lg:w-1/5 md:w-1/3 p-4 picture-item" data-groups='{{ $item['groups'] }}'>
        <div class="group relative block overflow-hidden rounded-md duration-500">
            <a href="{{ route('portfolio-detail-one', ['title' => Str::slug($item['title'])]) }}"><img src="{{ asset($item['img']) }}" class="rounded-md" alt=""></a>
            <div class="content pt-3">
                <h5 class="mb-1"><a href="{{ route('portfolio-detail-one', ['title' => Str::slug($item['title'])]) }}" class="hover:text-indigo-600 duration-500 font-semibold">{{ $item['title'] }}</a></h5>
                <h6 class="text-slate-400">{{ $item['name'] }}</h6>
            </div>
        </div>
    </div>
@endforeach