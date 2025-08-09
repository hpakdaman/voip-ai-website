@php
$backlinks = [
    [
        'style' => 'md:w-1/3',
        'title' => 'External Backlinks',
        'target' => '2021',
        'number' => '1990',
        'symbol' => 'K+',
    ],
    [
        'style' => 'md:w-1/3 mt-8 md:mt-0',
        'title' => 'Pages Crawled Daily',
        'target' => '210',
        'number' => '2',
        'symbol' => 'B+',
    ],
    [
        'style' => 'md:w-1/3 mt-8 md:mt-0',
        'title' => 'Domain Indexed',
        'target' => '18',
        'number' => '1',
        'symbol' => 'M+',
    ]
];
@endphp

@foreach ($backlinks as $item)
    <div class="{{ $item['style'] }}">
        <div class="text-center">
            <h6 class="text-slate-400 mb-0">{{ $item['title'] }}</h6>
            <h2 class="mb-0 text-4xl mt-3 font-bold"><span class="counter-value" data-target="{{ $item['target'] }}">{{ $item['number'] }}</span>{{ $item['symbol'] }}</h2>
        </div>
    </div>
@endforeach