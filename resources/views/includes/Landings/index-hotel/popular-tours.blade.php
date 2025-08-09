@php
$tours = [
    [
        'img' => 'assets/images/hotel/1.jpg',
        'name' => 'Recommend',
        'title' => 'Paradise Beach, Island',
        'price' => '549',
        'days' => '10 Days',
    ],
    [
        'img' => 'assets/images/hotel/2.jpg',
        'name' => 'Recommend',
        'title' => 'Paradise Beach, Island',
        'price' => '549',
        'days' => '10 Days',
    ],
    [
        'img' => 'assets/images/hotel/3.jpg',
        'name' => 'Recommend',
        'title' => 'Paradise Beach, Island',
        'price' => '549',
        'days' => '10 Days',
    ],
    [
        'img' => 'assets/images/hotel/4.jpg',
        'name' => 'Recommend',
        'title' => 'Paradise Beach, Island',
        'price' => '549',
        'days' => '10 Days',
    ],
    [
        'img' => 'assets/images/hotel/5.jpg',
        'name' => 'Recommend',
        'title' => 'Paradise Beach, Island',
        'price' => '549',
        'days' => '10 Days',
    ],
    [
        'img' => 'assets/images/hotel/6.jpg',
        'name' => 'Recommend',
        'title' => 'Paradise Beach, Island',
        'price' => '549',
        'days' => '10 Days',
    ],
    [
        'img' => 'assets/images/hotel/7.jpg',
        'name' => 'Recommend',
        'title' => 'Paradise Beach, Island',
        'price' => '549',
        'days' => '10 Days',
    ],
    [
        'img' => 'assets/images/hotel/8.jpg',
        'name' => 'Recommend',
        'title' => 'Paradise Beach, Island',
        'price' => '549',
        'days' => '10 Days',
    ]
];
@endphp

@foreach ($tours as $item)
    <div class="group relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-800">
        <img src="{{ asset($item['img']) }}" alt="">
        <span class="absolute inset-0 bg-slate-900/20 duration-500"></span>
        <div class="absolute top-0 start-0 p-4 pb-0">
            <span class="bg-orange-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">{{ $item['name'] }}</span>
        </div>

        <div class="absolute bottom-0 start-0 end-0 p-4 pt-0">
            <a href="" class="text-white/80 hover:text-white text-xl font-semibold">{{ $item['title'] }}</a>

            <div class="flex justify-between mt-1">
                <span class="text-gray-100"><i class="uil uil-dollar-sign text-[18px]"></i> {{ $item['price'] }}</span>
                <span class="text-gray-100"><i class="uil uil-plane-fly text-[18px]"></i> {{ $item['days'] }}</span>
            </div>
        </div>
    </div>
@endforeach