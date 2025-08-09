@php
$products = [
    [
        'id' => 1,
        'img' => 'assets/images/shop/items/s1.jpg',
        'title' => 'Branded T-Shirt',
        'price' => '$16.00',
        'tag' => 'New',
        'style' => 'bg-orange-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5',
    ],
    [
        'id' => 2,
        'img' => 'assets/images/shop/items/s2.jpg',
        'title' => 'Shopping Bag',
        'price' => '$16.00',
        'tag' => 'Featured',
        'style' => 'bg-green-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5',
    ],
    [
        'id' => 3,
        'img' => 'assets/images/shop/items/s3.jpg',
        'title' => 'Elegent Watch',
        'price' => '$16.00',
        'tag' => 'false',
        'style' => '',
    ],
    [
        'id' => 4,
        'img' => 'assets/images/shop/items/s4.jpg',
        'title' => 'Casual Shoes',
        'price' => '$16.00',
        'tag' => 'false',
        'style' => '',
    ],
    [
        'id' => 5,
        'img' => 'assets/images/shop/items/s5.jpg',
        'title' => 'Earphones',
        'price' => '$16.00',
        'tag' => 'New',
        'style' => 'bg-orange-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5',
    ],
    [
        'id' => 6,
        'img' => 'assets/images/shop/items/s6.jpg',
        'title' => 'Elegent Mug',
        'price' => '$16.00',
        'tag' => 'false',
        'style' => '',
    ],
    [
        'id' => 7,
        'img' => 'assets/images/shop/items/s7.jpg',
        'title' => 'Sony Headphones',
        'price' => '$16.00',
        'tag' => 'false',
        'style' => '',
    ],
    [
        'id' => 8,
        'img' => 'assets/images/shop/items/s8.jpg',
        'title' => 'Wooden Stools',
        'price' => '$16.00',
        'tag' => 'Sale',
        'style' => 'bg-blue-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5',
    ]
];
@endphp

@foreach ($products as $item)
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

            @if ($item['tag'] !== 'false')
                <ul class="list-none absolute top-[10px] start-4">
                    <li><a href="javascript:void(0)" class="{{ $item['style'] }}">{{ $item['tag'] }}</a></li>
                </ul>
            @endif
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