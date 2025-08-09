@php
$protections = [
    [
        'img' => 'assets/images/insurance/1.jpg',
        'title' => 'Health Insurance',
    ],
    [
        'img' => 'assets/images/insurance/2.jpg',
        'title' => 'Life Insurance',
    ],
    [
        'img' => 'assets/images/insurance/3.jpg',
        'title' => 'Property Insurance',
    ],
    [
        'img' => 'assets/images/insurance/4.jpg',
        'title' => 'Term Insurance',
    ],
    [
        'img' => 'assets/images/insurance/5.jpg',
        'title' => 'General Insurance',
    ],
    [
        'img' => 'assets/images/insurance/6.jpg',
        'title' => 'Vehicle Insurance',
    ],
    [
        'img' => 'assets/images/insurance/7.jpg',
        'title' => 'Retirement Plans',
    ]
];
@endphp

@foreach ($protections as $item)
    <div class="tiny-slide">
        <div class="mx-2">
            <div class="group relative block overflow-hidden rounded-md duration-500">
                <a href="" title="">
                    <img src="{{ asset($item['img']) }}" class="duration-500 group-hover:scale-105" alt="work-image">
                    <div class="absolute inset-0 group-hover:bg-indigo-600 opacity-0 group-hover:opacity-70 duration-500"></div>
                </a>
            </div>
            <div class="p-4 pb-0">
                <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 hover:text-indigo-600 after:bg-indigo-600 text-xl duration-500 ease-in-out">{{ $item['title'] }}</a>
            </div>
        </div>
    </div>
@endforeach