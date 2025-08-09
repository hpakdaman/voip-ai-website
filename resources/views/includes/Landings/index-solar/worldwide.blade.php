@php
$worldwides = [
    [
        'title' => 'Worldwide Customer',
        'target' => '24',
        'number' => '1',
        'symbol' => 'K+',
        'style' => 'md:w-1/3',
    ],
    [
        'title' => 'Solar Panels',
        'target' => '2840',
        'number' => '2012',
        'symbol' => '+',
        'style' => 'md:w-1/3 mt-8 md:mt-0',
    ],
    [
        'title' => 'Customer Satisfaction',
        'target' => '99',
        'number' => '1',
        'symbol' => '%',
        'style' => 'md:w-1/3 mt-8 md:mt-0',
    ]
];
@endphp

@foreach ($worldwides as $item)
    <div class="{{ $item['style'] }}">
        <div class="text-center">
            <h6 class="text-slate-400 mb-0">{{ $item['title'] }}</h6>
            <h2 class="mb-0 text-4xl mt-3 font-bold"><span class="counter-value" data-target="{{ $item['target'] }}">{{ $item['number'] }}</span>{{ $item['symbol'] }}</h2>
        </div>
    </div>
@endforeach