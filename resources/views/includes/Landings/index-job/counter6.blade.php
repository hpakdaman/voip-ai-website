@php
$counters = [
    [
        'title' => 'Total User',
        'target' => '200',
        'price' => '3',
        'symbol' => '+K',
    ],
    [
        'title' => 'Years of Experience',
        'target' => '15',
        'price' => '1',
        'symbol' => '+',
    ],
    [
        'title' => 'Offices in the World',
        'target' => '54',
        'price' => '5',
        'symbol' => '',
    ],
    [
        'title' => 'No. of Job Positions',
        'target' => '125',
        'price' => '12',
        'symbol' => 'K',
    ]
];
@endphp

@foreach ($counters as $item)
    <div class="counter-box relative text-center">
        <h3 class="font-extrabold lg:text-[72px] text-[50px] opacity-5"><span class="counter-value" data-target="{{ $item['target'] }}">{{ $item['price'] }}</span>{{ $item['symbol'] }}</h3>
        <span class="counter-head font-semibold text-xl absolute top-2/4 start-0 end-0">{{ $item['title'] }}</span>
    </div>
@endforeach