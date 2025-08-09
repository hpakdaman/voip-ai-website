@php
$candidates = [
    [
        'id' => 1,
        'img' => 'assets/images/client/01.jpg',
        'title' => 'Calvin Carlo',
        'name' => 'Web Designer',
        'location' => 'India',
        'price' => '3300/mo',
    ],
    [
        'id' => 2,
        'img' => 'assets/images/client/02.jpg',
        'title' => 'Steven Townsend',
        'name' => 'Web Designer',
        'location' => 'London',
        'price' => '3300/mo',
    ],
    [
        'id' => 3,
        'img' => 'assets/images/client/03.jpg',
        'title' => 'Tiffany Betancourt',
        'name' => 'Web Designer',
        'location' => 'India',
        'price' => '3300/mo',
    ],
    [
        'id' => 4,
        'img' => 'assets/images/client/04.jpg',
        'title' => 'Jacqueline Burns',
        'name' => 'Web Designer',
        'location' => 'London',
        'price' => '3300/mo',
    ],
    [
        'id' => 5,
        'img' => 'assets/images/client/05.jpg',
        'title' => 'Mari Harrington',
        'name' => 'Web Designer',
        'location' => 'India',
        'price' => '3300/mo',
    ],
    [
        'id' => 6,
        'img' => 'assets/images/client/06.jpg',
        'title' => 'Floyd Glasgow',
        'name' => 'Web Designer',
        'location' => 'London',
        'price' => '3300/mo',
    ],
    [
        'id' => 7,
        'img' => 'assets/images/client/07.jpg',
        'title' => 'Donna Schultz',
        'name' => 'Web Designer',
        'location' => 'India',
        'price' => '3300/mo',
    ],
    [
        'id' => 8,
        'img' => 'assets/images/client/08.jpg',
        'title' => 'Joshua Morris',
        'name' => 'Web Designer',
        'location' => 'London',
        'price' => '3300/mo',
    ]
];
@endphp

@foreach ($candidates as $item)
    <div class="group relative p-6 rounded-md shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 bg-white dark:bg-slate-900 duration-500 text-center">
        <div class="mt-8">
            <img src="{{ asset($item['img']) }}" class="rounded-full shadow-md size-20 mx-auto block" alt="">

            <div class="mt-3">
                <a href="{{ route('page-job-candidate-detail', ['title' => Str::slug($item['title'])]) }}" class="text-lg font-medium hover:text-indigo-600 duration-500 block">{{ $item['title'] }}</a>
                <span class="block text-sm text-slate-400">{{ $item['name'] }}</span>
            </div>
        </div>

        <div class="flex items-center justify-around my-4">
            <span class="text-slate-400"><i class="uil uil-map-marker text-indigo-600 me-1"></i>{{ $item['location'] }}</span>
            <span class="text-slate-400"><i class="uil uil-dollar-sign text-indigo-600 me-1"></i>{{ $item['price'] }}</span>
        </div>

        <a href="" class="bg-gray-100 dark:bg-gray-800 text-slate-400 text-xs font-medium px-3 py-1 rounded-lg h-[24px] inline-block m-1">PHP</a>
        <a href="" class="bg-gray-100 dark:bg-gray-800 text-slate-400 text-xs font-medium px-3 py-1 rounded-lg h-[24px] inline-block m-1">HTML</a>
        <a href="" class="bg-gray-100 dark:bg-gray-800 text-slate-400 text-xs font-medium px-3 py-1 rounded-lg h-[24px] inline-block m-1">CSS</a>
        <a href="" class="bg-gray-100 dark:bg-gray-800 text-slate-400 text-xs font-medium px-3 py-1 rounded-lg h-[24px] inline-block m-1">WordPress</a>

        <div class="mt-4">
            <a href="{{ route('page-job-candidate-detail', ['title' => Str::slug($item['title'])]) }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white rounded-md w-full">View Profile</a>
        </div>

        <div class="absolute top-6 start-6">
            <span class="bg-indigo-600/5 text-indigo-600 text-sm font-medium px-4 py-1 rounded-full h-[28px]">Featured</span>
        </div>
        <div class="absolute top-6 end-6">
            <a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 border border-gray-200 hover:border-gray-100 dark:border-gray-800 dark:hover:border-gray-700 rounded-full"><i class="uil uil-bookmark"></i></a>
        </div>
    </div>
@endforeach