@php
$offices = [
    [
        'img' => 'assets/images/cowork/1.jpg',
        'title' => 'Private Office',
        'name' => 'Co-space',
    ],
    [
        'img' => 'assets/images/cowork/2.jpg',
        'title' => 'Dedicated Space',
        'name' => 'Co-space',
    ],
    [
        'img' => 'assets/images/cowork/3.jpg',
        'title' => 'Small Office',
        'name' => 'Co-space',
    ],
    [
        'img' => 'assets/images/cowork/4.jpg',
        'title' => 'Floating Seat',
        'name' => 'Co-space',
    ],
    [
        'img' => 'assets/images/cowork/5.jpg',
        'title' => 'Startups Desk',
        'name' => 'Co-space',
    ],
    [
        'img' => 'assets/images/cowork/6.jpg',
        'title' => 'Retail Space',
        'name' => 'Co-space',
    ]
];
@endphp

@foreach ($offices as $item)
    <div class="tiny-slide">
        <div class="group relative rounded-md shadow-sm dark:shadow-gray-800 overflow-hidden mx-2">
            <div class="relative">
                <img src="{{ asset($item['img']) }}" class="group-hover:rotate-3 group-hover:scale-110 duration-500 ease-in-out" alt="">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900"></div>
            </div>

            <div class="absolute bottom-6 start-6 end-6">
                <a href="" class="text-white/70 hover:text-white text-lg block font-semibold duration-500 ease-in-out">{{ $item['title'] }}</a>
                <span class="text-white/60 block">{{ $item['name'] }}</span>
            </div>
        </div>
    </div>
@endforeach