@php
$collections = [
    [
        'img' => 'assets/images/furniture/fea3.jpg',
        'title' => 'Furniture Collection #1',
        'desc' => 'Free delivery + Assembly on most items',
    ],
    [
        'img' => 'assets/images/furniture/fea4.jpg',
        'title' => 'Furniture Collection #2',
        'desc' => 'Free delivery + Assembly on most items',
    ],
    [
        'img' => 'assets/images/furniture/fea5.jpg',
        'title' => 'Furniture Collection #3',
        'desc' => 'Free delivery + Assembly on most items',
    ]
];
@endphp

@foreach ($collections as $item)
    <div class="group relative overflow-hidden shadow-sm dark:shadow-gray-800">
        <img src="{{ asset($item['img']) }}" class="group-hover:scale-105 duration-500" alt="">

        <div class="absolute top-0 start-0 end-0 p-6">
            <a href="" class="font-semibold text-2xl text-slate-950 hover:text-indigo-600 duration-500">{{ $item['title'] }}</a>

            <p class="mt-2 text-slate-950 font-medium">{{ $item['desc'] }}</p>

            <div class="mt-4">
                <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">See Collections <i class="uil uil-arrow-right"></i></a>
            </div>
        </div>
    </div>
@endforeach