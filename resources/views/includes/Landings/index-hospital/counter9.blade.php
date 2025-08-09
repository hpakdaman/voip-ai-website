@php
$counters = [
    [
        'name' => 'Positive feedback',
        'title' => 'From Doctors',
        'target' => '99',
        'number' => '10',
        'symbol' => '%',
    ],
    [
        'name' => 'Experienced Clinics',
        'title' => 'High Qualified',
        'target' => '25',
        'number' => '2',
        'symbol' => '+',
    ],
    [
        'name' => 'Questions & Answers',
        'title' => 'Your Questions',
        'target' => '1251',
        'number' => '95',
        'symbol' => '+',
    ]
];
@endphp

@foreach ($counters as $item)
    <div class="counter-box text-center">
        <h1 class="text-white text-4xl font-semibold mb-2"><span class="counter-value" data-target="{{ $item['target'] }}">{{ $item['number'] }}</span>{{ $item['symbol'] }}</h1>
        <h5 class="counter-head text-white text-lg font-semibold mb-2">{{ $item['name'] }}</h5>
        <p class="text-white/50">{{ $item['title'] }}</p>
    </div>
@endforeach