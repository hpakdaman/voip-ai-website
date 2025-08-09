@php
$bids = [
    [
        'img' => 'assets/images/client/01.jpg',
        'name' => '2 WETH',
        'by' => 'by',
        'title' => '0xe849fa28a...ea14',
        'time' => '6 hours ago',
        'style' => 'flex items-center',
    ],
    [
        'img' => 'assets/images/client/02.jpg',
        'name' => '0.001 WETH',
        'by' => 'by',
        'title' => 'VOTwear',
        'time' => '6 hours ago',
        'style' => 'flex items-center mt-4',
    ],
    [
        'img' => 'assets/images/client/03.jpg',
        'name' => '1.225 WETH',
        'by' => 'by',
        'title' => 'PandaOne',
        'time' => '6 hours ago',
        'style' => 'flex items-center mt-4',
    ]
];
@endphp

@foreach ($bids as $item)
    <div class="{{ $item['style'] }}">
        <div class="relative">
            <img src="{{ asset($item['img']) }}" class="size-16 rounded-full shadow-md dark:shadow-gray-800" alt="">
        </div>

        <div class="ms-3">
            <h6 class="text-lg font-semibold">{{ $item['name'] }} <span class="text-slate-400">{{ $item['by'] }}</span> <a href="" class="hover:text-indigo-600 duration-500 ease-in-out">{{ $item['title'] }}</a></h6>
            <span class="text-slate-400">{{ $item['time'] }}</span>
        </div>
    </div>
@endforeach