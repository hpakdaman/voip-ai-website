@php
$categories = [
    [
        'img' => 'assets/images/shop/categories/electronics.jpg',
        'title' => 'Electronics',
    ],
    [
        'img' => 'assets/images/shop/categories/fashion.jpg',
        'title' => 'Fashion',
    ],
    [
        'img' => 'assets/images/shop/categories/furniture.jpg',
        'title' => 'Furniture',
    ],
    [
        'img' => 'assets/images/shop/categories/mobile.jpg',
        'title' => 'Mobile',
    ],
    [
        'img' => 'assets/images/shop/categories/music.jpg',
        'title' => 'Music',
    ],
    [
        'img' => 'assets/images/shop/categories/sports.jpg',
        'title' => 'Sports',
    ]
];
@endphp

@foreach ($categories as $item)
<div class="group relative overflow-hidden hover:shadow-lg hover:dark:shadow-gray-800 rounded-md duration-500 p-6 text-center">
    <img src="{{ asset($item['img']) }}" class="rounded-full shadow-md dark:shadow-gray-800 size-20 block mx-auto mb-2" alt="">

    <a href="" class="font-semibold hover:text-indigo-600 text-lg">{{ $item['title'] }}</a>
</div>
@endforeach