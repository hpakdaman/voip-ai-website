@php
$counters = [
    [
        'title' => 'Properties Sell',
        'target' => '1548',
        'number' => '1010',
        'symbol' => '+',
    ],
    [
        'title' => 'Award Gained',
        'target' => '25',
        'number' => '2',
        'symbol' => '+',
    ],
    [
        'title' => 'Years Experience',
        'target' => '9',
        'number' => '0',
        'symbol' => '+',
    ]
];
@endphp

@foreach ($counters as $item)
    <div class="counter-box text-center">
        <h1 class="lg:text-5xl text-4xl font-semibold mb-2 text-slate-400 dark:text-white"><span class="counter-value" data-target="{{ $item['target'] }}">{{ $item['number'] }}</span>{{ $item['symbol'] }}</h1>
        <h5 class="counter-head text-lg font-medium">{{ $item['title'] }}</h5>
    </div>
@endforeach