@php
$products = [
    [
        'img' => 'assets/images/furniture/i1.jpg',
        'title' => 'Item name is #1',
        'price' => '$145.00',
    ],
    [
        'img' => 'assets/images/furniture/i2.jpg',
        'title' => 'Item name is #2',
        'price' => '$145.00',
    ],
    [
        'img' => 'assets/images/furniture/i3.jpg',
        'title' => 'Item name is #3',
        'price' => '$145.00',
    ],
    [
        'img' => 'assets/images/furniture/i4.jpg',
        'title' => 'Item name is #4',
        'price' => '$145.00',
    ],
    [
        'img' => 'assets/images/furniture/i5.jpg',
        'title' => 'Item name is #5',
        'price' => '$145.00',
    ],
    [
        'img' => 'assets/images/furniture/i6.jpg',
        'title' => 'Item name is #6',
        'price' => '$145.00',
    ],
    [
        'img' => 'assets/images/furniture/i7.jpg',
        'title' => 'Item name is #7',
        'price' => '$145.00',
    ],
    [
        'img' => 'assets/images/furniture/i8.jpg',
        'title' => 'Item name is #8',
        'price' => '$145.00',
    ]
];
@endphp

@foreach ($products as $item)
    <div class="group">
        <div class="relative overflow-hidden shadow-sm dark:shadow-gray-800">
            <img src="{{ asset($item['img']) }}" class="group-hover:scale-105 duration-500" alt="">

            <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-slate-900 border-slate-900 text-white w-full">Add to Cart</a>
            </div>

            <span class="absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500">
                <a href="javascript:void(0)" class="text-slate-900 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600 text-2xl"><i class="mdi mdi-heart"></i></a>
            </span>
        </div>

        <div class="p-4 pb-0 text-center">
            <a href="" class="text-lg font-semibold hover:text-indigo-600">{{ $item['title'] }}</a>

            <p class="text-slate-400 font-semibold">{{ $item['price'] }}</p>
        </div>
    </div>
@endforeach