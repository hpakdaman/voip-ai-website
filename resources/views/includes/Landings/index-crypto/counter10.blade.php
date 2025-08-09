@php
$counters = [
    [
        'title' => 'Founded in',
        'target' => '2021',
        'number' => '1990',
        'symbol' => '',
    ],
    [
        'title' => 'Team Member',
        'target' => '1000',
        'number' => '551',
        'symbol' => '+',
    ],
    [
        'title' => 'Users',
        'target' => '10',
        'number' => '1',
        'symbol' => 'M',
    ],
    [
        'title' => 'Insurance Cover',
        'target' => '410',
        'number' => '210',
        'symbol' => 'M',
    ]
];
@endphp

@foreach ($counters as $item)
    <div class="text-center">
        <h6 class="text-white mb-0">{{ $item['title'] }}</h6>
        <h2 class="mb-0 text-4xl mt-3 font-bold text-indigo-600"><span class="counter-value" data-target="{{ $item['target'] }}">{{ $item['number'] }}</span>{{ $item['symbol'] }}</h2>
    </div>
@endforeach