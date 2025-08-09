@php
$creators = [
    [
        'img' => 'assets/images/client/01.jpg',
        'name' => 'Calvin Carlo',
        'title' => '@calvin_carlo',
        'style' => 'py-10 bg-gradient-to-r to-orange-600/70 from-indigo-600/70',
    ],
    [
        'img' => 'assets/images/client/02.jpg',
        'name' => 'Tiffany Betancourt',
        'title' => '@cutiegirl',
        'style' => 'py-10 bg-gradient-to-r to-red-600/70 from-indigo-600/70',
    ],
    [
        'img' => 'assets/images/client/03.jpg',
        'name' => 'Mari Harrington',
        'title' => '@norse_queen',
        'style' => 'py-10 bg-gradient-to-r to-fuchsia-600/70 from-green-600/70',
    ],
    [
        'img' => 'assets/images/client/04.jpg',
        'name' => 'Floyd Glasgow',
        'title' => '@bigbull',
        'style' => 'py-10 bg-gradient-to-r to-pink-600/70 from-purple-600/70',
    ],
    [
        'img' => 'assets/images/client/05.jpg',
        'name' => 'Donna Schultz',
        'title' => '@angel',
        'style' => 'py-10 bg-gradient-to-r to-indigo-600/70 from-blue-600/70',
    ],
    [
        'img' => 'assets/images/client/06.jpg',
        'name' => 'Joshua Morris',
        'title' => '@crazyanyone',
        'style' => 'py-10 bg-gradient-to-r to-orange-600/70 from-indigo-600/70',
    ],
    [
        'img' => 'assets/images/client/07.jpg',
        'name' => 'Carl Williams',
        'title' => '@looserbad',
        'style' => 'py-10 bg-gradient-to-r to-sky-600/70 from-yellow-600/70',
    ],
    [
        'img' => 'assets/images/client/08.jpg',
        'name' => 'Eugene Green',
        'title' => '@kristyhoney',
        'style' => 'py-10 bg-gradient-to-r to-lime-600/70 from-rose-600/70',
    ]
];
@endphp

@foreach ($creators as $item)
    <div class="tiny-slide">
        <div class="group relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-800 hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out m-2 mb-5">
            <div class="{{ $item['style'] }}"></div>
            <div class="p-6 pt-0 -mt-10 text-center">
                <img src="{{ asset($item['img']) }}" class="size-20 rounded-full shadow-lg dark:shadow-gray-800 mx-auto" alt="">

                <div class="mt-4">
                    <a href="{{ url('/nft-creator-profile') }}" class="text-lg font-semibold hover:text-indigo-600 duration-500 ease-in-out block">{{ $item['name'] }}</a>
                    <span class="text-slate-400">{{ $item['title'] }}</span>
                </div>
            </div>
        </div>
    </div>
@endforeach