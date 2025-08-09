@php
$projects = [
    [
        'img' => 'assets/images/portfolio/1.jpg',
        'title' => 'Mockup Collection',
        'name' => 'Abstract',
    ],
    [
        'img' => 'assets/images/portfolio/2.jpg',
        'title' => 'Mockup Collection',
        'name' => 'Abstract',
    ],
    [
        'img' => 'assets/images/portfolio/3.jpg',
        'title' => 'Mockup Collection',
        'name' => 'Abstract',
    ],
    [
        'img' => 'assets/images/portfolio/4.jpg',
        'title' => 'Mockup Collection',
        'name' => 'Abstract',
    ]
];
@endphp

@foreach ($projects as $item)
    <div class="group relative block overflow-hidden rounded-md duration-500">
        <img src="{{ asset($item['img']) }}" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 duration-500" alt="">
        <div class="absolute inset-0 group-hover:bg-slate-900 opacity-50 duration-500 z-0"></div>

        <div class="content">
            <div class="icon absolute z-10 opacity-0 group-hover:opacity-100 top-4 end-4 duration-500">
                <a href="{{ asset($item['img']) }}" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full lightbox"><i class="uil uil-camera"></i></a>
            </div>

            <div class="title absolute z-10 opacity-0 group-hover:opacity-100 bottom-4 start-4 duration-500">
                <a href="{{ url('/portfolio-detail-one') }}" class="h6 text-md font-medium text-white hover:text-indigo-600 duration-500 ease-in-out">{{ $item['title'] }}</a>
                <p class="text-slate-100 tag mb-0">{{ $item['name'] }}</p>
            </div>
        </div>
    </div>
@endforeach