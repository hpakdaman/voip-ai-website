@php
$clothes = [
    [
        'img' => 'assets/images/shop/hoodie.jpg',
        'title' => 'Hoodies',
    ],
    [
        'img' => 'assets/images/shop/beanie.jpg',
        'title' => 'Beanies for Man & Women',
    ],
    [
        'img' => 'assets/images/shop/glasses.jpg',
        'title' => 'Glasses',
    ]
];
@endphp

@foreach ($clothes as $item)
    <div class="md:w-1/2 p-3 picture-item">
        <div class="group relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-800">
            <img src="{{ asset($item['img']) }}" class="group-hover:scale-110 duration-500" alt="">
            <div class="absolute bottom-4 start-4">
                <a href="" class="text-xl font-semibold hover:text-indigo-600 duration-500">{{ $item['title'] }}</a>
            </div>
        </div>
    </div>
@endforeach