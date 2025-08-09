@php
$properties = [
    [
        'id' => 1,
        'img' => 'assets/images/real/property/1.jpg',
        'title' => '10765 Hillshire Ave, Baton Rouge, LA 70810, USA',
        'sqf' => '8000sqf',
        'beds' => '4 Beds',
        'baths' => '4 Baths',
        'price' => '$5000',
        'rating' => '5.0(30)',
    ],
    [
        'id' => 2,
        'img' => 'assets/images/real/property/2.jpg',
        'title' => '59345 STONEWALL DR, Plaquemine, LA 70764, USA',
        'sqf' => '8000sqf',
        'beds' => '4 Beds',
        'baths' => '4 Baths',
        'price' => '$5000',
        'rating' => '5.0(30)',
    ],
    [
        'id' => 3,
        'img' => 'assets/images/real/property/3.jpg',
        'title' => '3723 SANDBAR DR, Addis, LA 70710, USA',
        'sqf' => '8000sqf',
        'beds' => '4 Beds',
        'baths' => '4 Baths',
        'price' => '$5000',
        'rating' => '5.0(30)',
    ],
    [
        'id' => 4,
        'img' => 'assets/images/real/property/4.jpg',
        'title' => 'Lot 21 ROYAL OAK DR, Prairieville, LA 70769, USA',
        'sqf' => '8000sqf',
        'beds' => '4 Beds',
        'baths' => '4 Baths',
        'price' => '$5000',
        'rating' => '5.0(30)',
    ],
    [
        'id' => 5,
        'img' => 'assets/images/real/property/5.jpg',
        'title' => '710 BOYD DR, Unit #1102, Baton Rouge, LA 70808, USA',
        'sqf' => '8000sqf',
        'beds' => '4 Beds',
        'baths' => '4 Baths',
        'price' => '$5000',
        'rating' => '5.0(30)',
    ],
    [
        'id' => 6,
        'img' => 'assets/images/real/property/6.jpg',
        'title' => '5133 MCLAIN WAY, Baton Rouge, LA 70809, USA',
        'sqf' => '8000sqf',
        'beds' => '4 Beds',
        'baths' => '4 Baths',
        'price' => '$5000',
        'rating' => '5.0(30)',
    ]
];
@endphp

@foreach ($properties as $item)
    <div class="group rounded-md bg-white dark:bg-slate-900 shadow-sm hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-800 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
        <div class="relative">
            <img src="{{ asset($item['img']) }}" alt="">

            <div class="absolute top-6 end-6">
                <a href="" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-lg text-center bg-white dark:bg-slate-900 border-0 shadow-sm dark:shadow-gray-800 rounded-full text-red-600"><i class="mdi mdi-heart"></i></a>
            </div>
        </div>

        <div class="p-6">
            <div class="pb-6">
                <a href="{{ route('property-detail', ['title' => Str::slug($item['title'])]) }}" class="text-lg hover:text-indigo-600 font-medium ease-in-out duration-500">{{ $item['title'] }}</a>
            </div>

            <ul class="py-6 border-y border-gray-100 dark:border-gray-800 flex items-center list-none">
                <li class="flex items-center me-4">
                    <i class="uil uil-compress-arrows text-2xl me-2 text-indigo-600"></i>
                    <span>{{ $item['sqf'] }}</span>
                </li>

                <li class="flex items-center me-4">
                    <i class="uil uil-bed-double text-2xl me-2 text-indigo-600"></i>
                    <span>{{ $item['beds'] }}</span>
                </li>

                <li class="flex items-center">
                    <i class="uil uil-bath text-2xl me-2 text-indigo-600"></i>
                    <span>{{ $item['baths'] }}</span>
                </li>
            </ul>

            <ul class="pt-6 flex justify-between items-center list-none">
                <li>
                    <span class="text-slate-400">Price</span>
                    <p class="text-lg font-medium">{{ $item['price'] }}</p>
                </li>

                <li>
                    <span class="text-slate-400">Rating</span>
                    <ul class="text-lg font-medium text-amber-400 list-none">
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                        <li class="inline text-slate-900 dark:text-white">{{ $item['rating'] }}</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
@endforeach