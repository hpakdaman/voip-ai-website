@php

use Illuminate\Support\Str;

$blogs = [
    [
        'id' => 7,
        'img' => 'assets/images/hotel/b1.jpg',
        'title' => 'Design your apps in your own ways',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'id' => 8,
        'img' => 'assets/images/hotel/b2.jpg',
        'title' => 'How apps is changing the IT worlds',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'id' => 9,
        'img' => 'assets/images/hotel/b3.jpg',
        'title' => 'Smartest Applications for Businesss',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ]
];
@endphp

@foreach ($blogs as $item)
    <div class="blog relative rounded-md shadow-sm dark:shadow-gray-800 overflow-hidden">
        <img src="{{ asset($item['img']) }}" alt="">

        <div class="content p-6">
            <a href="{{ route('blog-detail', ['title' => Str::slug($item['title'])]) }}" class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">{{ $item['title'] }}</a>
            <p class="text-slate-400 mt-3">{{ $item['desc'] }}</p>
            
            <div class="mt-4">
                <a href="{{ route('blog-detail', ['title' => Str::slug($item['title'])]) }}" class="relative inline-block tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
            </div>
        </div>
    </div>
@endforeach