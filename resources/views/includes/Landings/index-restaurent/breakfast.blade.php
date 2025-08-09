@php
$breakfasts = [
    [
        'img' => 'assets/images/food/1.jpg',
        'title' => 'Black bean dip',
        'desc' => 'A reader will be distracted by the readable',
        'price' => '$25.00',
        'groups' => '["break"]',
    ],
    [
        'img' => 'assets/images/food/2.jpg',
        'title' => 'Onion Pizza',
        'desc' => 'A reader will be distracted by the readable',
        'price' => '$25.00',
        'groups' => '["lunch"]',
    ],
    [
        'img' => 'assets/images/food/3.jpg',
        'title' => 'Chicken Breast',
        'desc' => 'A reader will be distracted by the readable',
        'price' => '$25.00',
        'groups' => '["break"]',
    ],
    [
        'img' => 'assets/images/food/4.jpg',
        'title' => 'Veg Pizza',
        'desc' => 'A reader will be distracted by the readable',
        'price' => '$25.00',
        'groups' => '["dinner"]',
    ],
    [
        'img' => 'assets/images/food/5.jpg',
        'title' => 'Cordon Bleu',
        'desc' => 'A reader will be distracted by the readable',
        'price' => '$25.00',
        'groups' => '["break"]',
    ],
    [
        'img' => 'assets/images/food/6.jpg',
        'title' => 'Boerewors',
        'desc' => 'A reader will be distracted by the readable',
        'price' => '$25.00',
        'groups' => '["lunch"]',
    ],
    [
        'img' => 'assets/images/food/7.jpg',
        'title' => 'Tarte Tatin',
        'desc' => 'A reader will be distracted by the readable',
        'price' => '$25.00',
        'groups' => '["break"]',
    ],
    [
        'img' => 'assets/images/food/8.jpg',
        'title' => 'Green Tea',
        'desc' => 'A reader will be distracted by the readable',
        'price' => '$25.00',
        'groups' => '["tea"]',
    ],
    [
        'img' => 'assets/images/food/9.jpg',
        'title' => 'Special Coffee',
        'desc' => 'A reader will be distracted by the readable',
        'price' => '$25.00',
        'groups' => '["lunch"]',
    ],
    [
        'img' => 'assets/images/food/10.jpg',
        'title' => 'Lemon Tea',
        'desc' => 'A reader will be distracted by the readable',
        'price' => '$25.00',
        'groups' => '["dinner"]',
    ],
    [
        'img' => 'assets/images/food/11.jpg',
        'title' => 'Pancakes',
        'desc' => 'A reader will be distracted by the readable',
        'price' => '$25.00',
        'groups' => '["tea"]',
    ],
    [
        'img' => 'assets/images/food/12.jpg',
        'title' => 'American Item',
        'desc' => 'A reader will be distracted by the readable',
        'price' => '$25.00',
        'groups' => '["lunch"]',
    ],
    [
        'img' => 'assets/images/food/13.jpg',
        'title' => 'Country side pizza',
        'desc' => 'A reader will be distracted by the readable',
        'price' => '$25.00',
        'groups' => '["tea"]',
    ],
    [
        'img' => 'assets/images/food/14.jpg',
        'title' => 'Chilly garlic potato',
        'desc' => 'A reader will be distracted by the readable',
        'price' => '$25.00',
        'groups' => '["dinner"]',
    ],
    [
        'img' => 'assets/images/food/15.jpg',
        'title' => 'Brownie with vanilla',
        'desc' => 'A reader will be distracted by the readable',
        'price' => '$25.00',
        'groups' => '["tea"]',
    ]
];
@endphp

@foreach ($breakfasts as $item)
    <div class="group lg:w-1/5 md:w-1/3 picture-item p-3 mt-6" data-groups='{{ $item['groups'] }}'>
        <img src="{{ asset($item['img']) }}" class="rounded-full size-32 mx-auto group-hover:animate-[spin_10s_linear_infinite]" alt="">

        <div class="mt-4 text-center">
            <a href="" class="text-lg font-medium block hover:text-indigo-600 duration-500">{{ $item['title'] }}</a>
            <span class="text-slate-400 mt-2 block">{{ $item['desc'] }}</span>

            <h5 class="text-indigo-600 font-medium mt-4">{{ $item['price'] }}</h5>
        </div>
    </div><!--end col-->
@endforeach