@php
$counters = [
    [
        'title' => 'Investment Projects',
        'target' => '3452',
        'price' => '3000',
        'symbol' => '+',
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
        'title' => 'Successful Cases',
        'target' => '247',
        'price' => '12',
        'symbol' => '+',
    ]
];
@endphp

@foreach ($counters as $item)
    <div class="counter-box relative text-center">
        <h3 class="font-extrabold lg:text-[72px] text-[50px] text-white opacity-10"><span class="counter-value" data-target="{{ $item['target'] }}">{{ $item['price'] }}</span>{{ $item['symbol'] }}</h3>
        <span class="counter-head font-semibold text-xl text-white absolute top-2/4 start-0 end-0">{{ $item['title'] }}</span>
    </div><!--end counter box-->
@endforeach