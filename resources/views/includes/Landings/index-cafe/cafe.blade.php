@php
$cafes = [
    [
        'img' => 'assets/images/cafe/icons/coffee-time.svg',
        'title' => 'High Quality',
        'desc' => "Composed in a pseudo-Latin language which more or less pseudo-Latin.",
    ],
    [
        'img' => 'assets/images/cafe/icons/pot.svg',
        'title' => 'Pure Grades',
        'desc' => "Composed in a pseudo-Latin language which more or less pseudo-Latin.",
    ],
    [
        'img' => 'assets/images/cafe/icons/coffee-beans.svg',
        'title' => 'Proper Roasting',
        'desc' => "Composed in a pseudo-Latin language which more or less pseudo-Latin.",
    ]
];

$cafes1 = [
    [
        'img' => 'assets/images/cafe/icons/coffee.svg',
        'title' => 'The Perfect Cup',
        'desc' => "Composed in a pseudo-Latin language which more or less pseudo-Latin.",
    ],
    [
        'img' => 'assets/images/cafe/icons/drip-glass.svg',
        'title' => 'Coffee Machine',
        'desc' => "Composed in a pseudo-Latin language which more or less pseudo-Latin.",
    ],
    [
        'img' => 'assets/images/cafe/icons/coffee-cup.svg',
        'title' => 'Coffee to Go',
        'desc' => "Composed in a pseudo-Latin language which more or less pseudo-Latin.",
    ]
];
@endphp

<div class="grid lg:grid-cols-12 md:grid-cols-12 grid-cols-1 mt-8 gap-[30px] items-center">
    <div class="lg:col-span-4 md:col-span-6 lg:order-1 order-2">
        <div class="grid grid-cols-1 gap-[30px]">

        @foreach ($cafes as $item)
            <div class="group duration-500 md:text-end text-start">
                <img src="{{ asset($item['img']) }}" class="size-16 md:ms-auto p-3 rounded-full shadow-md dark:shadow-gray-800 bg-white" alt="">
                <div class="mt-2 md:order-1 order-2">
                    <a href="" class="text-xl font-semibold !font-ebgaramond hover:text-indigo-600">{{ $item['title'] }}</a>
                    <p class="text-slate-400 mt-3">{{ $item['desc'] }}</p>
                </div>
            </div>
        @endforeach
            
        </div>
    </div>

    <div class="lg:col-span-4 md:col-span-12 lg:order-2 order-1">
        <img src="{{ asset('assets/images/cafe/cafe-services.png') }}" class="lg:w-auto md:w-80 mx-auto" alt="">
    </div>

    <div class="lg:col-span-4 md:col-span-6 order-3">
        <div class="grid grid-cols-1 gap-[30px]">

        @foreach ($cafes1 as $item)
            <div class="group duration-500">
                <img src="{{ asset($item['img']) }}" class="size-16 p-3 rounded-full shadow-md dark:shadow-gray-800 bg-white" alt="">
                <div class="mt-2">
                    <a href="" class="text-xl font-semibold !font-ebgaramond hover:text-indigo-600">{{ $item['title'] }}</a>
                    <p class="text-slate-400 mt-3">{{ $item['desc'] }}</p>
                </div>
            </div>
        @endforeach 
            
        </div>
    </div>
</div>