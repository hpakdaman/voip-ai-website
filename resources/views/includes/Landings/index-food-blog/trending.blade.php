@php
$trendings = [
    [
        'img' => 'assets/images/food/blog/1.jpg',
        'title' => 'Change Your Strategy: Find a Business Consultant',
        'tag' => 'Food',
        'date' => '14th July 2025',
    ],
    [
        'img' => 'assets/images/food/blog/5.jpg',
        'title' => 'Creamy Garlic Parmesan Chicken Salad',
        'tag' => 'Food',
        'date' => '14th July 2025',
    ],
    [
        'img' => 'assets/images/food/blog/4.jpg',
        'title' => 'Bourbon Street Rib-Eye Steak With Cheese',
        'tag' => 'Food',
        'date' => '14th July 2025',
    ]
];
@endphp

@foreach ($trendings as $item)
    <div class="group md:flex items-center relative overflow-hidden">
        <div class="md:w-[40%] relative overflow-hidden rounded-md">
            <img src="{{ asset($item['img']) }}" class="group-hover:scale-105 duration-500 ease-in-out" alt="">
            <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 duration-500 ease-in-out"></div>
            <div class="absolute end-0 top-0 p-4 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
                <a href="#!" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center text-lg bg-white dark:bg-slate-900 border-0 shadow-sm dark:shadow-gray-800 rounded-full text-red-600/20 hover:text-red-600 focus:text-red-600"><i class="mdi mdi-heart"></i></a>
            </div>
        </div>

        <div class="md:w-[60%] md:ps-4 pt-4 md:pt-0">
            <a href="" class="bg-indigo-600 text-white text-xs font-semibold px-2.5 py-0.5 rounded w-fit mx-auto h-5">{{ $item['tag'] }}</a>
            <a href="{{ url('/food-recipe') }}" class="block hover:text-indigo-600 text-lg font-semibold mt-3">{{ $item['title'] }}</a>

            <span class="text-slate-400 block mt-3"><i class="uil uil-calendar-alt"></i> {{ $item['date'] }}</span>
        </div>
    </div>
@endforeach