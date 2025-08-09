@php
$news = [
    [
        'id' => 38,
        'img' => 'assets/images/blog/02.jpg',
        'title' => 'Take a break through the countryside',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'id' => 39,
        'img' => 'assets/images/blog/03.jpg',
        'title' => 'These 10 sea destinations are surprises',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'id' => 40,
        'img' => 'assets/images/blog/04.jpg',
        'title' => 'A photographer perfect day in Colorado',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'id' => 41,
        'img' => 'assets/images/blog/05.jpg',
        'title' => 'This is the world most beautiful beach',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'id' => 42,
        'img' => 'assets/images/blog/06.jpg',
        'title' => 'Travel will change you for the better',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'id' => 43,
        'img' => 'assets/images/blog/07.jpg',
        'title' => 'Greek beyond Athene: Where to go next',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'id' => 44,
        'img' => 'assets/images/blog/08.jpg',
        'title' => 'This mountain will make you reborn',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ]
];
@endphp

@foreach ($news as $item)
    <div class="blog relative rounded-md shadow-sm dark:shadow-gray-800 overflow-hidden">
        <div class="lg:flex relative">
            <div class="relative md:shrink-0">
                <img class="h-full w-full object-cover lg:w-52 lg:h-56" src="{{ asset($item['img']) }}" alt="">
            </div>
            <div class="p-6 flex flex-col lg:h-56 justify-center">
                <a href="{{ route('blog-detail', ['title' => Str::slug($item['title'])]) }}" class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">{{ $item['title'] }}</a>
                <div class="my-auto">
                    <p class="text-slate-400 mt-3">{{ $item['desc'] }}</p>
                </div>
                
                <div class="mt-4">
                    <a href="{{ route('blog-detail', ['title' => Str::slug($item['title'])]) }}" class="relative inline-block tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
@endforeach