@php
$consultings = [
    [
        'img' => 'assets/images/consulting/1.jpg',
        'title' => 'Profitable Marketing',
        'desc' => "We develop digital strategies, products and services appreciated by clients.",
    ],
    [
        'img' => 'assets/images/consulting/2.jpg',
        'title' => 'SEO Specialists',
        'desc' => "We develop digital strategies, products and services appreciated by clients.",
    ],
    [
        'img' => 'assets/images/consulting/3.jpg',
        'title' => 'Audience Analysis',
        'desc' => "We develop digital strategies, products and services appreciated by clients.",
    ]
];
@endphp

@foreach ($consultings as $item)
    <div class="group relative">
        <div class="relative rounded-md shadow-sm dark:shadow-gray-800 overflow-hidden">
            <img src="{{ asset($item['img']) }}" class="" alt="">
            <div class="absolute inset-0 bg-slate-900/30 opacity-0 group-hover:opacity-100 duration-500 ease-in-out"></div>
        </div>

        <div class="mt-6">
            <a href="" class="text-xl font-semibold hover:text-indigo-600 duration-500">{{ $item['title'] }}</a>

            <p class="text-slate-400 mt-4">{{ $item['desc'] }}</p>

            <div class="mt-4">
                <a href="" class="hover:text-indigo-600 duration-500 ease-in-out font-semibold"><span class="hidden group-hover:inline-block">Read More</span> <i class="uil uil-arrow-right align-middle text-lg"></i></a>
            </div>
        </div>
    </div>
@endforeach