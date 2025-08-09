@php
$counters = [
    [
        'title' => 'Happy',
        'title1' => 'Customer',
        'target' => '100',
        'number' => '1',
        'symbol' => 'k+',
    ],
    [
        'title' => 'Years of',
        'title1' => 'experiences',
        'target' => '15',
        'number' => '1',
        'symbol' => '',
    ],
    [
        'title' => 'Best',
        'title1' => 'Destinations',
        'target' => '4',
        'number' => '1',
        'symbol' => 'k+',
    ],
    [
        'title' => 'Reviews or',
        'title1' => 'Ratings',
        'target' => '4.9',
        'number' => '1',
        'symbol' => '',
    ]
];
@endphp

@foreach ($counters as $item)
    <div class="counter-box flex items-center justify-center">
        <h1 class="text-4xl font-bold text-white"><span class="counter-value" data-target="{{ $item['target'] }}">{{ $item['number'] }}</span>{{ $item['symbol'] }}</h1>
        <h5 class="counter-head text-xs font-semibold text-white/40 ms-2">{{ $item['title'] }} <br> {{ $item['title1'] }}</h5>
    </div>
@endforeach