@php
$categorys = [
    [
        'img' => 'assets/images/food/blog/f1.jpg',
        'title' => 'Food',
    ],
    [
        'img' => 'assets/images/food/blog/f2.jpg',
        'title' => 'Healthy',
    ],
    [
        'img' => 'assets/images/food/blog/f3.jpg',
        'title' => 'Dinner',
    ],
    [
        'img' => 'assets/images/food/blog/f4.jpg',
        'title' => 'Holiday',
    ],
    [
        'img' => 'assets/images/food/blog/f5.jpg',
        'title' => 'Coffee',
    ]
];
@endphp

@foreach ($categorys as $item)
    <div class="group relative rounded-md shadow-md dark:shadow-gray-800 overflow-hidden">
        <img src="{{ asset($item['img']) }}" class="group-hover:scale-105 duration-500 ease-in-out" alt="">
        <div class="absolute inset-0 bg-slate-900/60"></div>

        <div class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center">
            <a href="#!" class="text-white font-semibold text-xl mb-0">{{ $item['title'] }}</a>
        </div>
    </div>
@endforeach