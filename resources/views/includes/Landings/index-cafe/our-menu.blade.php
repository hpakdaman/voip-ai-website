@php
$menus = [
    [
        'img' => 'assets/images/cafe/coffee-cup/01.jpg',
        'title' => 'Cafe Latte',
        'price' => "$13.79",
        'desc' => 'A reader will be distracted by the readable',
    ],
    [
        'img' => 'assets/images/cafe/coffee-cup/02.jpg',
        'title' => 'Ice Coffee',
        'price' => "$12.49",
        'desc' => 'A reader will be distracted by the readable',
    ],
    [
        'img' => 'assets/images/cafe/coffee-cup/03.jpg',
        'title' => 'Mocha',
        'price' => "$10.99",
        'desc' => 'A reader will be distracted by the readable',
    ],
    [
        'img' => 'assets/images/cafe/coffee-cup/04.jpg',
        'title' => 'Espresso',
        'price' => "$19.99",
        'desc' => 'A reader will be distracted by the readable',
    ],
    [
        'img' => 'assets/images/cafe/coffee-cup/05.jpg',
        'title' => 'Americano',
        'price' => "$17.79",
        'desc' => 'A reader will be distracted by the readable',
    ],
    [
        'img' => 'assets/images/cafe/coffee-cup/06.jpg',
        'title' => 'Boerewors',
        'price' => "$57.79",
        'desc' => 'A reader will be distracted by the readable',
    ],
    [
        'img' => 'assets/images/cafe/coffee-cup/01.jpg',
        'title' => 'Cafe Latte',
        'price' => "$13.79",
        'desc' => 'A reader will be distracted by the readable',
    ],
    [
        'img' => 'assets/images/cafe/coffee-cup/02.jpg',
        'title' => 'Ice Coffee',
        'price' => "$12.49",
        'desc' => 'A reader will be distracted by the readable',
    ],
    [
        'img' => 'assets/images/cafe/coffee-cup/03.jpg',
        'title' => 'Mocha',
        'price' => "$10.99",
        'desc' => 'A reader will be distracted by the readable',
    ],
    [
        'img' => 'assets/images/cafe/coffee-cup/04.jpg',
        'title' => 'Espresso',
        'price' => "$19.99",
        'desc' => 'A reader will be distracted by the readable',
    ]
];
@endphp

@foreach ($menus as $item)
    <div class="flex ">
        <img src="{{ asset($item['img']) }}" class="size-16 rounded-full shadow-md dark:shadow-gray-800" alt="">

        <div class="ms-3 w-full">
            <div class="flex justify-between pb-2 border-b border-gray-100 dark:border-gray-800">
                <a href="" class="!font-ebgaramond hover:text-indigo-600 text-xl font-semibold">{{ $item['title'] }}</a>
                <h6 class="text-indigo-600 font-semibold">{{ $item['price'] }}</h6>
            </div>

            <p class="text-slate-400 mt-2">{{ $item['desc'] }}</p>
        </div>
    </div>
@endforeach