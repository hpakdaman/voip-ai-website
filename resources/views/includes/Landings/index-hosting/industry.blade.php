@php
$industrys = [
    [
        'img' => 'assets/images/hosting/com.jpg',
        'name' => '.com',
        'title' => 'best price in the industry',
        'title1' => 'Sale',
        'symbol' => '$',
        'price' => '3.99',
        'year' => '/year',
        'style' => 'text-xl font-medium group-hover:text-indigo-600 duration-500',
        'style1' => 'p-4 block bg-indigo-600 text-center',
    ],
    [
        'img' => 'assets/images/hosting/biz.jpg',
        'name' => '.biz',
        'title' => 'best price in the industry',
        'title1' => 'Sale',
        'symbol' => '$',
        'price' => '3.99',
        'year' => '/year',
        'style' => 'text-xl font-medium group-hover:text-emerald-600 duration-500',
        'style1' => 'p-4 block bg-emerald-600 text-center',
    ],
    [
        'img' => 'assets/images/hosting/me.jpg',
        'name' => '.me',
        'title' => 'best price in the industry',
        'title1' => 'Sale',
        'symbol' => '$',
        'price' => '3.99',
        'year' => '/year',
        'style' => 'text-xl font-medium group-hover:text-red-600 duration-500',
        'style1' => 'p-4 block bg-red-600 text-center',
    ],
    [
        'img' => 'assets/images/hosting/mobi.jpg',
        'name' => '.mobi',
        'title' => 'best price in the industry',
        'title1' => 'Sale',
        'symbol' => '$',
        'price' => '3.99',
        'year' => '/year',
        'style' => 'text-xl font-medium group-hover:text-sky-600 duration-500',
        'style1' => 'p-4 block bg-sky-600 text-center',
    ],
    [
        'img' => 'assets/images/hosting/net.jpg',
        'name' => '.net',
        'title' => 'best price in the industry',
        'title1' => 'Sale',
        'symbol' => '$',
        'price' => '3.99',
        'year' => '/year',
        'style' => 'text-xl font-medium group-hover:text-amber-500 duration-500',
        'style1' => 'p-4 block bg-amber-500 text-center',
    ],
    [
        'img' => 'assets/images/hosting/org.jpg',
        'name' => '.org',
        'title' => 'best price in the industry',
        'title1' => 'Sale',
        'symbol' => '$',
        'price' => '3.99',
        'year' => '/year',
        'style' => 'text-xl font-medium group-hover:text-emerald-600 duration-500',
        'style1' => 'p-4 block bg-emerald-600 text-center',
    ],
    [
        'img' => 'assets/images/hosting/tv.jpg',
        'name' => '.tv',
        'title' => 'best price in the industry',
        'title1' => 'Sale',
        'symbol' => '$',
        'price' => '3.99',
        'year' => '/year',
        'style' => 'text-xl font-medium group-hover:text-red-600 duration-500',
        'style1' => 'p-4 block bg-red-600 text-center',
    ],
    [
        'img' => 'assets/images/hosting/us.jpg',
        'name' => '.us',
        'title' => 'best price in the industry',
        'title1' => 'Sale',
        'symbol' => '$',
        'price' => '3.99',
        'year' => '/year',
        'style' => 'text-xl font-medium group-hover:text-sky-600 duration-500',
        'style1' => 'p-4 block bg-sky-600 text-center',
    ]
];
@endphp

@foreach ($industrys as $item)
    <div class="tiny-slide">
        <a href="" class="group bg-white dark:bg-slate-900 block rounded-md overflow-hidden relative shadow-sm dark:shadow-gray-800 m-2">
            <span class="p-4 block bg-white dark:bg-slate-900 text-center">
                <img src="{{ asset($item['img']) }}" class="rounded-full shadow-md mx-auto size-16 mb-3" alt="">

                <span class="{{ $item['style'] }}">{{ $item['name'] }}</span>
                <span class="text-slate-400 block">{{ $item['title'] }}</span>
            </span>

            <span class="{{ $item['style1'] }}">
                <span class="text-white font-medium uppercase block">{{ $item['title1'] }}</span>
                <span class="flex justify-center mt-2">
                    <span class="text-base text-white/70 font-semibold">{{ $item['symbol'] }}</span>
                    <span class="text-lg text-white font-semibold mx-1">{{ $item['price'] }}</span>
                    <span class="text-base text-white/70 font-semibold self-end">{{ $item['year'] }}</span>
                </span>
            </span>
        </a>
    </div>
@endforeach