@php
$destinations = [
    [
        'img' => 'assets/images/travel/1.jpg',
        'title' => 'Thailand',
        'price' => "$59/night",
        'groups' => '["beach"]',
    ],
    [
        'img' => 'assets/images/travel/2.jpg',
        'title' => 'Bali',
        'price' => "$59/night",
        'groups' => '["park"]',
    ],
    [
        'img' => 'assets/images/travel/3.jpg',
        'title' => 'Bangkok',
        'price' => "$59/night",
        'groups' => '["nature"]',
    ],
    [
        'img' => 'assets/images/travel/4.jpg',
        'title' => 'Pataya',
        'price' => "$59/night",
        'groups' => '["mountain"]',
    ],
    [
        'img' => 'assets/images/travel/5.jpg',
        'title' => 'Europe',
        'price' => "$59/night",
        'groups' => '["beach"]',
    ],
    [
        'img' => 'assets/images/travel/6.jpg',
        'title' => 'Maldivas',
        'price' => "$59/night",
        'groups' => '["park"]',
    ],
    [
        'img' => 'assets/images/travel/7.jpg',
        'title' => 'Dubai',
        'price' => "$59/night",
        'groups' => '["nature"]',
    ],
    [
        'img' => 'assets/images/travel/8.jpg',
        'title' => 'India',
        'price' => "$59/night",
        'groups' => '["mountain"]',
    ]
];
@endphp

@foreach ($destinations as $item)
    <div class="lg:w-1/4 md:w-1/2 p-4 picture-item" data-groups='{{ $item['groups'] }}'>
        <div class="group relative overflow-hidden rounded-md">
            <div class="relative overflow-hidden">
                <img src="{{ asset($item['img']) }}" class="roubded-md" alt="">
                <div class="absolute inset-0 bg-gradient-to-b to-slate-900 from-transparent"></div>
            </div>

            <div class="absolute bottom-0 start-0 end-0 flex justify-between p-6">
                <div>
                    <a href="" class="text-white/80 hover:text-white text-lg font-semibold block">{{ $item['title'] }}</a>

                    <ul class="list-none mb-0 text-amber-400">
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                    </ul>
                </div>
                
                <h5 class="text-white/70">{{ $item['price'] }}</h5>
            </div>

            <div class="absolute end-0 top-0 m-6 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
                <a href="#!" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center text-lg bg-white dark:bg-slate-900 border-0 shadow-sm dark:shadow-gray-800 rounded-full text-red-600/20 hover:text-red-600 focus:text-red-600"><i class="mdi mdi-heart"></i></a>
            </div>
        </div>
    </div>
@endforeach