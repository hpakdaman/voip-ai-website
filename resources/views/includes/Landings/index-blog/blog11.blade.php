@php
$blogs = [
    [
        'id' => 1,
        'img' => 'assets/images/blog/01.jpg',
        'title' => 'Design your apps in your own way',
        'groups' => '["business"]',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'id' => 30,
        'img' => 'assets/images/blog/09.jpg',
        'title' => 'How app is changing the IT worlds',
        'groups' => '["tech"]',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'id' => 31,
        'img' => 'assets/images/blog/10.jpg',
        'title' => 'Smartest Application for Busines',
        'groups' => '["tech"]',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'id' => 32,
        'img' => 'assets/images/blog/11.jpg',
        'title' => 'Stop Worrying Abouts Deadlines! We Got You Covered',
        'groups' => '["tech"]',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'id' => 33,
        'img' => 'assets/images/blog/12.jpg',
        'title' => 'Change Your Strategy: Find a Business Consultants',
        'groups' => '["lifestyle"]',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'id' => 34,
        'img' => 'assets/images/food/blog/1.jpg',
        'title' => 'Everything About Financial Modelings',
        'groups' => '["food"]',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'id' => 35,
        'img' => 'assets/images/blog/13.jpg',
        'title' => 'On the other hand we provide denounces',
        'groups' => '["lifestyle"]',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'id' => 36,
        'img' => 'assets/images/blog/14.jpg',
        'title' => 'Design your apps in yours own way',
        'groups' => '["business"]',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'id' => 37,
        'img' => 'assets/images/food/blog/2.jpg',
        'title' => 'How apps is changings the IT world',
        'groups' => '["food"]',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ]
];
@endphp

@foreach ($blogs as $item)
    <div class="lg:w-1/3 md:w-1/2 p-3 picture-item" data-groups='{{ $item['groups'] }}'>
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
    </div>
@endforeach