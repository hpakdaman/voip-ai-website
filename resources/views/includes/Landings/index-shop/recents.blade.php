@php
$recents = [
    [
        'id' => 13,
        'img' => 'assets/images/shop/items/s13.jpg',
        'title' => 'Wooden Chair',
        'price' => '$16.00',
    ],
    [
        'id' => 14,
        'img' => 'assets/images/shop/items/s14.jpg',
        'title' => 'Women Block Heels',
        'price' => '$16.00',
    ],
    [
        'id' => 15,
        'img' => 'assets/images/shop/items/s15.jpg',
        'title' => 'Shorts',
        'price' => '$16.00',
    ],
    [
        'id' => 16,
        'img' => 'assets/images/shop/items/s16.jpg',
        'title' => 'Masks',
        'price' => '$16.00',
    ]
];
@endphp

@foreach ($recents as $item)
    <div class="group">
        <div class="relative overflow-hidden shadow-sm dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
            <img src="{{ asset($item['img']) }}" alt="">

            <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                <a href="{{ url('/shop-cart') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-slate-900 border-slate-900 text-white w-full rounded-md">Add to Cart</a>
            </div>

            <ul class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500">
                <li><a href="javascript:void(0)" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-heart"></i></a></li>
                <li class="mt-1"><a href="{{ route('shop-item-detail', ['title' => Str::slug($item['title'])]) }}" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-eye-outline"></i></a></li>
                <li class="mt-1"><a href="javascript:void(0)" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-bookmark-outline"></i></a></li>
            </ul>
        </div>

        <div class="mt-4">
            <a href="{{ route('shop-item-detail', ['title' => Str::slug($item['title'])]) }}" class="hover:text-indigo-600 text-lg font-semibold">{{ $item['title'] }}</a>
            <div class="flex justify-between items-center mt-1">
                <p class="text-green-600">{{ $item['price'] }} <del class="text-red-600">$21.00</del></p>
                <ul class="font-medium text-amber-400 list-none">
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                </ul>
            </div>
        </div>
    </div>
@endforeach