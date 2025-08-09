@php
$collections = [
    [
        'img' => 'assets/images/nft/items/16.jpg',
        'img1' => 'assets/images/nft/items/1.jpg',
        'img2' => 'assets/images/nft/items/2.jpg',
        'img3' => 'assets/images/nft/items/3.jpg',
        'img4' => 'assets/images/client/01.jpg',
        'title' => 'Digital Arts',
    ],
    [
        'img' => 'assets/images/nft/items/17.jpg',
        'img1' => 'assets/images/nft/items/4.jpg',
        'img2' => 'assets/images/nft/items/5.jpg',
        'img3' => 'assets/images/nft/items/6.jpg',
        'img4' => 'assets/images/client/02.jpg',
        'title' => 'Sports',
    ],
    [
        'img' => 'assets/images/nft/items/18.jpg',
        'img1' => 'assets/images/nft/items/7.jpg',
        'img2' => 'assets/images/nft/items/8.jpg',
        'img3' => 'assets/images/nft/items/9.jpg',
        'img4' => 'assets/images/client/03.jpg',
        'title' => 'Photography',
    ],
    [
        'img' => 'assets/images/nft/items/19.jpg',
        'img1' => 'assets/images/nft/items/10.jpg',
        'img2' => 'assets/images/nft/items/11.jpg',
        'img3' => 'assets/images/nft/items/12.jpg',
        'img4' => 'assets/images/client/04.jpg',
        'title' => 'Illustrations',
    ],
    [
        'img' => 'assets/images/nft/items/20.jpg',
        'img1' => 'assets/images/nft/items/13.jpg',
        'img2' => 'assets/images/nft/items/14.jpg',
        'img3' => 'assets/images/nft/items/15.jpg',
        'img4' => 'assets/images/client/05.jpg',
        'title' => 'Animations',
    ],
    [
        'img' => 'assets/images/nft/items/21.jpg',
        'img1' => 'assets/images/nft/items/5.jpg',
        'img2' => 'assets/images/nft/items/8.jpg',
        'img3' => 'assets/images/nft/items/11.jpg',
        'img4' => 'assets/images/client/06.jpg',
        'title' => 'Virtual Reality',
    ],
    [
        'img' => 'assets/images/nft/items/22.jpg',
        'img1' => 'assets/images/nft/items/2.jpg',
        'img2' => 'assets/images/nft/items/3.jpg',
        'img3' => 'assets/images/nft/items/4.jpg',
        'img4' => 'assets/images/client/07.jpg',
        'title' => 'Sports',
    ],
    [
        'img' => 'assets/images/nft/items/23.jpg',
        'img1' => 'assets/images/nft/items/6.jpg',
        'img2' => 'assets/images/nft/items/7.jpg',
        'img3' => 'assets/images/nft/items/9.jpg',
        'img4' => 'assets/images/client/08.jpg',
        'title' => 'Digital Arts',
    ],
    [
        'img' => 'assets/images/nft/items/24.jpg',
        'img1' => 'assets/images/nft/items/11.jpg',
        'img2' => 'assets/images/nft/items/12.jpg',
        'img3' => 'assets/images/nft/items/13.jpg',
        'img4' => 'assets/images/client/01.jpg',
        'title' => 'Photography',
    ]
];
@endphp

@foreach ($collections as $item)
    <div class="group relative overflow-hidden bg-gray-50 dark:bg-slate-800 rounded-md shadow-sm dark:shadow-gray-800">
        <div class="p-2 rounded-md shadow-sm dark:shadow-gray-800 bg-gradient-to-br to-orange-600/20 via-fuchsia-600/20 from-indigo-600/20">
            <div class="flex items-center">
                <div class="w-full p-1">
                    <img src="{{ asset($item['img']) }}" class="rounded-md" alt="">
                </div>
            </div>

            <div class="flex items-center">
                <div class="w-1/3 p-1">
                    <img src="{{ asset($item['img1']) }}" class="rounded-md" alt="">
                </div>

                <div class="w-1/3 p-1">
                    <img src="{{ asset($item['img2']) }}" class="rounded-md" alt="">
                </div>

                <div class="w-1/3 p-1">
                    <img src="{{ asset($item['img3']) }}" class="rounded-md" alt="">
                </div>
            </div>
        </div>

        <div class="p-6 pt-0 -mt-10 text-center">
            <img src="{{ asset($item['img4']) }}" class="size-20 rounded-full shadow-lg dark:shadow-gray-800 mx-auto" alt="">

            <div class="mt-4">
                <a href="" class="text-xl leading-none font-semibold hover:text-indigo-600 duration-500 ease-in-out block">{{ $item['title'] }}</a>
            </div>
        </div>
    </div>
@endforeach