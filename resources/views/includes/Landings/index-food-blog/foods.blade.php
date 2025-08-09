@php
$foods = [
    [
        'img' => 'assets/images/food/blog/m1.jpg',
        'img1' => 'assets/images/client/01.jpg',
        'tag' => 'Eggs',
        'name' => 'Calvin Carlo',
        'title' => 'Spicy Cauliflower Burgers and Salad Recipe',
    ],
    [
        'img' => 'assets/images/food/blog/m6.jpg',
        'img1' => 'assets/images/client/01.jpg',
        'tag' => 'Rice and Tomatos',
        'name' => 'Calvin Carlo',
        'title' => 'Awesome Cake with Cream Cheese Frosting',
    ],
    [
        'img' => 'assets/images/food/blog/m3.jpg',
        'img1' => 'assets/images/client/01.jpg',
        'tag' => 'Veg',
        'name' => 'Calvin Carlo',
        'title' => 'Make Asian-Style Recipe ( Video and Gallery )',
    ],
    [
        'img' => 'assets/images/food/blog/m4.jpg',
        'img1' => 'assets/images/client/01.jpg',
        'tag' => 'Pizzas',
        'name' => 'Calvin Carlo',
        'title' => 'Chocolate Mint Dessert Brownies Recipe',
    ],
    [
        'img' => 'assets/images/food/blog/m5.jpg',
        'img1' => 'assets/images/client/01.jpg',
        'tag' => 'Noodles',
        'name' => 'Calvin Carlo',
        'title' => 'Healthy Homemade Pizza with a glass of wine',
    ],
    [
        'img' => 'assets/images/food/blog/m2.jpg',
        'img1' => 'assets/images/client/01.jpg',
        'tag' => 'Breads',
        'name' => 'Calvin Carlo',
        'title' => 'Strawberry, Kiwi and Spinach Salad Recipe',
    ]
];
@endphp

@foreach ($foods as $item)
    <div class="tiny-slide">
        <div class="group relative overflow-hidden">
            <img src="{{ asset($item['img']) }}" class="group-hover:scale-105 duration-500 ease-in-out" alt="">
            <div class="absolute inset-0 bg-gradient-to-b to-slate-900 via-slate-900/50 from-transparent opacity-0 group-hover:opacity-100 duration-500 ease-in-out"></div>

            <div class="absolute bottom-0 start-0 end-0 p-6 -mb-96 group-hover:mb-0 duration-500 ease-in-out">
                <div class="text-center">
                    <a href="" class="bg-indigo-600 text-white text-xs font-semibold px-2.5 py-0.5 rounded w-fit mx-auto h-5">{{ $item['tag'] }}</a>
                    <a href="{{ url('/food-recipe') }}" class="text-white font-semibold hover:text-indigo-600 block text-lg mt-4 duration-500 ease-in-out">{{ $item['title'] }}</a>

                    <div class="flex items-center justify-center mt-4">
                        <img src="{{ asset($item['img1']) }}" class="size-10 rounded-full shadow-md dark:shadow-gray-800" alt="">
                        <a href="" class="font-medium text-white block ms-2">{{ $item['name'] }}</a>
                    </div>
                </div>
            </div>

            <div class="absolute end-0 top-0 p-4 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
                <a href="#!" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center text-lg bg-white dark:bg-slate-900 border-0 shadow-sm dark:shadow-gray-800 rounded-full text-red-600/20 hover:text-red-600 focus:text-red-600"><i class="mdi mdi-heart"></i></a>
            </div>
        </div>
    </div>
@endforeach