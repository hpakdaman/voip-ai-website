@php
$posts = [
    [
        'img' => 'assets/images/food/blog/1.jpg',
        'title' => 'Giant Multi-Stuffed Soft Pretzel',
        'tag' => 'Salad',
        'date' => '14th July 2025',
    ],
    [
        'img' => 'assets/images/food/blog/5.jpg',
        'title' => 'Romantic Breakfast for Two',
        'tag' => 'Breakfast',
        'date' => '14th July 2025',
    ],
    [
        'img' => 'assets/images/food/blog/f1.jpg',
        'title' => 'Macchiato Pumpkin Soup',
        'tag' => 'Breads',
        'date' => '14th July 2025',
    ],
    [
        'img' => 'assets/images/food/blog/m1.jpg',
        'title' => 'Braised Pork Belly Adobo By Chef Leah Cohen',
        'tag' => 'Chef',
        'date' => '14th July 2025',
    ],
    [
        'img' => 'assets/images/food/blog/2.jpg',
        'title' => 'Cinnamon Buns for Two',
        'tag' => 'Breads',
        'date' => '14th July 2025',
    ],
    [
        'img' => 'assets/images/food/blog/6.jpg',
        'title' => 'Slow Cooker Coconut Curry',
        'tag' => 'Cooker',
        'date' => '14th July 2025',
    ],
    [
        'img' => 'assets/images/food/blog/m2.jpg',
        'title' => 'Perfect for a Birthday Party',
        'tag' => 'Birthday',
        'date' => '14th July 2025',
    ],
    [
        'img' => 'assets/images/food/blog/f2.jpg',
        'title' => '5 Recipes Almost Too Cute To Eat',
        'tag' => 'Eat',
        'date' => '14th July 2025',
    ],
    [
        'img' => 'assets/images/food/blog/3.jpg',
        'title' => 'Vegetarian Breakfast for You',
        'tag' => 'Vegetarian',
        'date' => '14th July 2025',
    ],
    [
        'img' => 'assets/images/food/blog/m3.jpg',
        'title' => 'Meal Prep Breakfast For The Week',
        'tag' => 'Breads',
        'date' => '14th July 2025',
    ],
    [
        'img' => 'assets/images/food/blog/7.jpg',
        'title' => 'Lactose Free Homemade Cheese',
        'tag' => 'Cheese',
        'date' => '14th July 2025',
    ],
    [
        'img' => 'assets/images/food/blog/f3.jpg',
        'title' => 'Mint-Pomegranate Salad',
        'tag' => 'Salad',
        'date' => '14th July 2025',
    ],
    [
        'img' => 'assets/images/food/blog/f4.jpg',
        'title' => 'Tiny Apple Pies with Cinnamon',
        'tag' => 'Apple',
        'date' => '14th July 2025',
    ]
];
@endphp

@foreach ($posts as $item)
    <div class="lg:w-1/4 md:w-1/3 picture-item p-2 pb-5">
        <div class="group relative">
            <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-800">
                <img src="{{ asset($item['img']) }}" class="group-hover:scale-105 duration-500 ease-in-out" alt="">
                <div class="absolute top-0 start-0 pt-3 ps-3">
                    <a href="" class="bg-indigo-600 text-white text-xs font-semibold px-2.5 py-0.5 rounded w-fit mx-auto h-5">{{ $item['tag'] }}</a>
                </div>
            </div>

            <div class="p-3">
                <a href="{{ url('/food-recipe') }}" class="block hover:text-indigo-600 text-lg font-semibold">{{ $item['title'] }}</a>

                <ul class="list-none flex items-center justify-between mt-2">
                    <li>
                        <span class="text-slate-400 block"><i class="uil uil-calendar-alt"></i> {{ $item['date'] }}</span>
                    </li>

                    <li class="">
                        <a href="#!" class="text-red-600/20 hover:text-red-600 focus:text-red-600"><i class="mdi mdi-heart"></i></a> <span class="text-slate-400">22</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endforeach