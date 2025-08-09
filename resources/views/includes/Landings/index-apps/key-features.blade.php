@php
$features = [
    [
        'icon' => 'monitor',
        'title' => 'Use On Any Device',
        'desc' => "One disadvantage of Lorum Ipsum is that in Latin frequently than others",
    ],
    [
        'icon' => 'feather',
        'title' => 'Feather Icons',
        'desc' => "One disadvantage of Lorum Ipsum is that in Latin frequently than others",
    ],
    [
        'icon' => 'eye',
        'title' => 'Retina Ready',
        'desc' => "One disadvantage of Lorum Ipsum is that in Latin frequently than others",
    ]
];

$features2 = [
    [
        'icon' => 'user-check',
        'title' => 'W3c Valid Code',
        'desc' => "One disadvantage of Lorum Ipsum is that in Latin frequently than others",
    ],
    [
        'icon' => 'smartphone',
        'title' => 'Fully Responsive',
        'desc' => "One disadvantage of Lorum Ipsum is that in Latin frequently than others",
    ],
    [
        'icon' => 'heart',
        'title' => 'Browser Compatibility',
        'desc' => "One disadvantage of Lorum Ipsum is that in Latin frequently than others",
    ]
];
@endphp

<div class="grid lg:grid-cols-12 md:grid-cols-12 grid-cols-1 mt-8 gap-[30px] items-center">
    <div class="lg:col-span-4 md:col-span-6 lg:order-1 order-2">
        <div class="grid grid-cols-1 gap-[30px]">

        @foreach ($features as $item)
            <div class="group flex duration-500 xl:p-3">
                <div class="flex md:order-2 order-1 align-middle justify-center items-center size-14 mt-1 bg-indigo-600/5 group-hover:bg-indigo-600 group-hover:text-white text-indigo-600 rounded-full text-2xl shadow-xs dark:shadow-gray-800 duration-500">
                    <i data-feather="{{ $item['icon'] }}" class="size-5"></i>
                </div>
                <div class="flex-1 md:order-1 order-2 md:text-end md:me-4 md:ms-0 ms-4">
                    <h4 class="mb-0 text-lg font-medium">{{ $item['title'] }}</h4>
                    <p class="text-slate-400 mt-3">{{ $item['desc'] }}</p>
                </div>
            </div>
        @endforeach
            
        </div>
    </div>

    <div class="lg:col-span-4 md:col-span-12 lg:mx-8 lg:order-2 order-1">
        <img src="{{ asset('assets/images/feature.png') }}" class="mx-auto md:max-w-[300px]" alt="">
    </div>

    <div class="lg:col-span-4 md:col-span-6 order-3">
        <div class="grid grid-cols-1 gap-[30px]">

        @foreach ($features2 as $item)
            <div class="group flex duration-500 xl:p-3">
                <div class="flex align-middle justify-center items-center size-14 mt-1 bg-indigo-600/5 group-hover:bg-indigo-600 group-hover:text-white text-indigo-600 rounded-full text-2xl shadow-xs dark:shadow-gray-800 duration-500">
                    <i data-feather="{{ $item['icon'] }}" class="size-5"></i>
                </div>
                <div class="flex-1 ms-4">
                    <h4 class="mb-0 text-lg font-medium">{{ $item['title'] }}</h4>
                    <p class="text-slate-400 mt-3">{{ $item['desc'] }}</p>
                </div>
            </div>
        @endforeach
            
        </div>
    </div>
</div><!--end grid-->