@php
$friendlys = [
    [
        'icon' => 'codesandbox',
        'title' => 'User Friendly',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'icon' => 'send',
        'title' => 'Super Fast',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'icon' => 'star',
        'title' => 'Insightful Analytics',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'icon' => 'bookmark',
        'title' => 'Highly Rated',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ]
];
@endphp

@foreach ($friendlys as $item)
    <div class="group px-6 py-8 hover:bg-indigo-700 duration-500 ease-in-out">
        <i data-feather="{{ $item['icon'] }}" class="size-10 stroke-1 text-white"></i>

        <div class="content mt-6">
            <a href="" class="text-lg font-semibold text-white/80 hover:text-white">{{ $item['title'] }}</a>
            <p class="text-white/50 mt-4">{{ $item['desc'] }}</p>
            
            <div class="mt-5">
                <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-white hover:text-white after:bg-white duration-500 ease-in-out">Learn More <i class="uil uil-arrow-right"></i></a>
            </div>
        </div>
    </div>
@endforeach