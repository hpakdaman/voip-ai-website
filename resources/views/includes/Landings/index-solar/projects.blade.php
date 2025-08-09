@php
$projects = [
    [
        'img' => 'assets/images/solar/project/4.jpg',
        'name' => 'Solar Revolution',
        'title' => 'Solar Transformation',
    ],
    [
        'img' => 'assets/images/solar/project/5.jpg',
        'name' => 'Sunwave Energy',
        'title' => 'Solar Solutions',
    ],
    [
        'img' => 'assets/images/solar/project/6.jpg',
        'name' => 'Solar Sync',
        'title' => 'indigo Energy',
    ],
    [
        'img' => 'assets/images/solar/project/7.jpg',
        'name' => 'Solstice Systems',
        'title' => 'Eco Future',
    ],
    [
        'img' => 'assets/images/solar/project/8.jpg',
        'name' => 'Solar Spark',
        'title' => 'Clean Energy',
    ],
    [
        'img' => 'assets/images/solar/project/9.jpg',
        'name' => 'Sun Power',
        'title' => 'Bright Future',
    ]
];
@endphp

@foreach ($projects as $item)
    <div class="group relative overflow-hidden rounded shadow-sm shadow-slate-100 dark:shadow-slate-800">
        <div class="relative md:shrink-0">
            <img class="object-cover md:w-96 w-full h-96 group-hover:scale-105 duration-500" src="{{ asset($item['img']) }}" alt="">
        </div>

        <div class="p-6 absolute bottom-0 -start-72 group-hover:start-0 duration-500">
            <div class="bg-white dark:bg-slate-900 py-3 px-4 w-fit rounded">
                <a href="" class="hover:text-indigo-600 text-lg font-semibold">{{ $item['name'] }}</a>
                
                <p class="text-slate-400">{{ $item['title'] }}</p>
            </div>
        </div>
    </div>
@endforeach