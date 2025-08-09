@php
$posts = [
    [
        'img' => 'assets/images/blog/01.jpg',
        'title' => 'Consultant Business',
        'date' => '6th Sep 2025',
    ],
    [
        'img' => 'assets/images/blog/02.jpg',
        'title' => 'Grow Your Business',
        'date' => '6th Sep 2025',
    ],
    [
        'img' => 'assets/images/blog/03.jpg',
        'title' => 'Look On The Glorious Balance',
        'date' => '6th Sep 2025',
    ],
    [
        'img' => 'assets/images/blog/04.jpg',
        'title' => '5 incredible city to travel in Italy',
        'date' => '6th Sep 2025',
    ],
    [
        'img' => 'assets/images/blog/05.jpg',
        'title' => '25 essentials for your travel backpack',
        'date' => '6th Sep 2025',
    ],
    [
        'img' => 'assets/images/blog/06.jpg',
        'title' => 'Amazing destination in Portugal',
        'date' => '6th Sep 2025',
    ],
    [
        'img' => 'assets/images/food/blog/1.jpg',
        'title' => 'Free solo travel across North Europe',
        'date' => '6th Sep 2025',
    ],
    [
        'img' => 'assets/images/food/blog/2.jpg',
        'title' => 'Explorer completes historic lakes',
        'date' => '6th Sep 2025',
    ],
    [
        'img' => 'assets/images/food/blog/3.jpg',
        'title' => 'Dont miss these amazing side trips',
        'date' => '6th Sep 2025',
    ]
];
@endphp

@foreach ($posts as $item)
    <div class="flex items-center">
        <img src="{{ asset($item['img']) }}" class="lg:h-20 h-16 rounded-md shadow-sm dark:shadow-gray-800" alt="">

        <div class="ms-3">
            <a href="" class="font-semibold hover:text-indigo-600">{{ $item['title'] }}</a>
            <p class="text-sm text-slate-400 mt-1">{{ $item['date'] }}</p>
        </div>
    </div>
@endforeach