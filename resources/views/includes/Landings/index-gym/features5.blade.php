@php
$features = [
    [
        'img' => 'assets/images/gym/icon/scale.png',
        'img1' => 'assets/images/gym/fea01.jpg',
        'title' => 'Progression',
        'desc' => "After you decide to start training we will make sure you get the best fitness program. Our sport experts and latest sports equipment are the winning combination.",
    ],
    [
        'img' => 'assets/images/gym/icon/kettlebell.png',
        'img1' => 'assets/images/gym/fea02.jpg',
        'title' => 'Workouts',
        'desc' => "After you decide to start training we will make sure you get the best fitness program. Our sport experts and latest sports equipment are the winning combination.",
    ],
    [
        'img' => 'assets/images/gym/icon/water-bottle.png',
        'img1' => 'assets/images/gym/fea03.jpg',
        'title' => 'Nutrition',
        'desc' => "After you decide to start training we will make sure you get the best fitness program. Our sport experts and latest sports equipment are the winning combination.",
    ]
];
@endphp

@foreach ($features as $item)
    <div class="group relative overflow-hidden p-6 rounded-lg shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 bg-white dark:bg-slate-900 text-center duration-500 border-t-8 border-indigo-600/50">
        <img src="{{ asset($item['img']) }}" class="size-16 mx-auto" alt="">

        <div class="content mt-7">
            <h2 class="title text-xl font-semibold">{{ $item['title'] }}</h2>
            <p class="text-slate-400 mt-3">{{ $item['desc'] }}</p>
        </div>

        <div class="hidden group-hover:block">
            <div class="absolute inset-0">
                <img src="{{ asset($item['img1']) }}" alt="">
                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-slate-900"></div>
            </div>

            <div class="absolute bottom-0 start-0 end-0 mb-6">
                <a href="" class="text-white text-xl font-bold">{{ $item['title'] }}</a>
            </div>
        </div>
    </div>
@endforeach