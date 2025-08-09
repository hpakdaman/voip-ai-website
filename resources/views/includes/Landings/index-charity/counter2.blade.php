@php
$counters = [
    [
        'title' => 'PEOPLE FACING FOOD INSECURITY',
        'target' => "100",
        'number' => "1",
        'symbol' => "M",
        'symbol1' => "",
    ],
    [
        'title' => 'PEOPLE WFP AIMS TO REACH IN 2025',
        'target' => "152",
        'number' => "2",
        'symbol' => "M",
        'symbol1' => "",
    ],
    [
        'title' => "WFP'S FUNDING NEEDS IN 2025",
        'target' => "1500",
        'number' => "0",
        'symbol' => "M",
        'symbol1' => "$",
    ],
    [
        'title' => 'MEALS DISTRIBUTED WORLDWIDE',
        'target' => "29",
        'number' => "0",
        'symbol' => "M",
        'symbol1' => "",
    ]
];
@endphp

@foreach ($counters as $item)
    <div class="counter-box text-center">
        <h1 class="text-4xl font-bold mb-4 text-white">{{ $item['symbol1'] }}<span class="counter-value" data-target="{{ $item['target'] }}">{{ $item['number'] }}</span>{{ $item['symbol'] }}</h1>
        <h5 class="counter-head text-xs font-semibold text-white">{{ $item['title'] }}</h5>
    </div>
@endforeach