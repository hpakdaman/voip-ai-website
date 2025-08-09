@php

use Illuminate\Support\Str;

$bids = [
    [
        'id' => 1,
        'img' => 'assets/images/nft/items/1.jpg',
        'title' => 'Deep Sea Phantasy',
        'name' => 'Place Bid',
        'ETH' => '20.5 ETH',
        'like' => '22',
        'span' => 'true',
        'small' => 'auction-item-1',
    ],
    [
        'id' => 2,
        'img' => 'assets/images/nft/items/2.jpg',
        'title' => 'CyberPrimal 042 LAN',
        'name' => 'Place Bid',
        'ETH' => '20.5 ETH',
        'like' => '22',
        'span' => 'false',
        'small' => '',
    ],
    [
        'id' => 3,
        'img' => 'assets/images/nft/items/3.jpg',
        'title' => 'Crypto Egg Stamp #5',
        'name' => 'Place Bid',
        'ETH' => '20.5 ETH',
        'like' => '22',
        'span' => 'false',
        'small' => '',
    ],
    [
        'id' => 4,
        'img' => 'assets/images/nft/items/4.jpg',
        'title' => 'Color Abstract Painting',
        'name' => 'Place Bid',
        'ETH' => '20.5 ETH',
        'like' => '22',
        'span' => 'false',
        'small' => '',
    ],
    [
        'id' => 5,
        'img' => 'assets/images/nft/items/5.jpg',
        'title' => 'Liquid Forest Princess',
        'name' => 'Place Bid',
        'ETH' => '20.5 ETH',
        'like' => '22',
        'span' => 'false',
        'small' => '',
    ],
    [
        'id' => 6,
        'img' => 'assets/images/nft/items/6.jpg',
        'title' => 'Spider Eyes Modern Art',
        'name' => 'Place Bid',
        'ETH' => '20.5 ETH',
        'like' => '22',
        'span' => 'false',
        'small' => '',
    ],
    [
        'id' => 7,
        'img' => 'assets/images/nft/items/7.jpg',
        'title' => 'Synthwave Painting',
        'name' => 'Place Bid',
        'ETH' => '20.5 ETH',
        'like' => '22',
        'span' => 'true',
        'small' => 'auction-item-2',
    ],
    [
        'id' => 8,
        'img' => 'assets/images/nft/items/8.jpg',
        'title' => 'Contemporary Abstract',
        'name' => 'Place Bid',
        'ETH' => '20.5 ETH',
        'like' => '22',
        'span' => 'false',
        'small' => '',
    ],
    [
        'id' => 9,
        'img' => 'assets/images/nft/items/9.jpg',
        'title' => 'CyberPrimal 042 LANS',
        'name' => 'Place Bid',
        'ETH' => '20.5 ETH',
        'like' => '22',
        'span' => 'false',
        'small' => '',
    ],
    [
        'id' => 10,
        'img' => 'assets/images/nft/items/10.jpg',
        'title' => 'Crypto Egg Stamp #6',
        'name' => 'Place Bid',
        'ETH' => '20.5 ETH',
        'like' => '22',
        'span' => 'false',
        'small' => '',
    ],
    [
        'id' => 11,
        'img' => 'assets/images/nft/items/11.jpg',
        'title' => 'Color Abstract Paintings',
        'name' => 'Place Bid',
        'ETH' => '20.5 ETH',
        'like' => '22',
        'span' => 'false',
        'small' => '',
    ],
    [
        'id' => 12,
        'img' => 'assets/images/nft/items/12.jpg',
        'title' => 'Liquid Forest Princes',
        'name' => 'Place Bid',
        'ETH' => '20.5 ETH',
        'like' => '22',
        'span' => 'false',
        'small' => '',
    ]
];
@endphp

@foreach ($bids as $item)
    <div class="group relative overflow-hidden bg-white dark:bg-slate-900 rounded-md shadow-sm dark:shadow-gray-800 hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out">
        <div class="relative">
            <img src="{{ asset($item['img']) }}" alt="">
            <div class="absolute end-0 top-0 mt-6 me-6 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
                <a href="#!" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center text-lg bg-white dark:bg-slate-900 border-0 shadow-sm dark:shadow-gray-800 rounded-full text-red-600/20 hover:text-red-600 focus:text-red-600"><i class="mdi mdi-heart"></i></a>
            </div>

            <div class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center opacity-0 group-hover:opacity-100 scale-0 group-hover:scale-100 duration-500 ease-in-out">
                <a href="{{ route('nft-detail', ['title' => Str::slug($item['title'])]) }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">{{ $item['name'] }}</a>
            </div>

            @if ($item['span'] === 'true')
                <div class="absolute bottom-0 start-0 ms-6 mb-6 text-lg ltr:bg-gradient-to-r rtl:bg-gradient-to-l to-indigo-600 from-fuchsia-600 text-white rounded-full px-3">
                    <i class="uil uil-clock align-middle"></i> <small id="{{ $item['small'] }}" class="font-semibold"></small>
                </div>
            @endif
        </div>

        <div class="p-6 relative">
            <a href="{{ route('nft-detail', ['title' => Str::slug($item['title'])]) }}" class="text-lg font-semibold hover:text-indigo-600 duration-500 ease-in-out">{{ $item['title'] }}</a>

            <div class="flex items-center justify-between mt-2">
                <div class="flex items-center">
                    <i class="mdi mdi-ethereum text-xl leading-none text-indigo-600 me-1"></i>
                    <span class="block font-semibold text-indigo-600">{{ $item['ETH'] }}</span>
                </div>

                <div>
                    <i class="mdi mdi-heart text-red-600"></i> <span class="text-slate-400">{{ $item['like'] }}</span>
                </div>
            </div>
        </div>
    </div>
@endforeach