@php
$counters = [
    [
        'title' => 'Happy Clients',
        'target' => '1548',
        'number' => '1010',
        'symbol' => '+',
    ],
    [
        'title' => '24/7 Support',
        'target' => '100',
        'number' => '0',
        'symbol' => '%',
    ],
    [
        'title' => 'Courses',
        'target' => '9',
        'number' => '0',
        'symbol' => '+',
    ],
    [
        'title' => 'Satisfaction',
        'target' => '100',
        'number' => '0',
        'symbol' => '%',
    ]
];
@endphp

@foreach ($counters as $item)
    <div class="counter-box text-center">
        <h1 class="lg:text-5xl text-4xl font-medium mb-2 text-white"><span class="counter-value" data-target="{{ $item['target'] }}">{{ $item['number'] }}</span>{{ $item['symbol'] }}</h1>
        <h5 class="counter-head text-white/70 font-semibold">{{ $item['title'] }}</h5>
    </div>
@endforeach