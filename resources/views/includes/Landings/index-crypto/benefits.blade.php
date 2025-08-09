@php
$benefits = [
    [
        'icon' => 'uil uil-file-contract-dollar text-4xl text-white',
        'title' => 'Support',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'icon' => 'uil uil-analytics text-4xl text-white',
        'title' => 'Service Level',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'icon' => 'uil uil-dashboard text-4xl text-white',
        'title' => 'Take profit / Stoploss',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'icon' => 'uil uil-swatchbook text-4xl text-white',
        'title' => 'Trailing Stop',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'icon' => 'uil uil-exchange text-4xl text-white',
        'title' => 'Pending Orders',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'icon' => 'uil uil-lock-alt text-4xl text-white',
        'title' => 'Platform Fees',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ]
];
@endphp

@foreach ($benefits as $item)
    <div class="border border-dashed border-white/30 rounded-md p-6 text-center">
        <i class="{{ $item['icon'] }}"></i>

        <div class="content mt-7">
            <a href="" class="text-lg font-medium text-white">{{ $item['title'] }}</a>
            <p class="text-white/70 mt-3">{{ $item['desc'] }}</p>
            
            <div class="mt-5">
                <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-white hover:text-white after:bg-white duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
            </div>
        </div>
    </div>
@endforeach