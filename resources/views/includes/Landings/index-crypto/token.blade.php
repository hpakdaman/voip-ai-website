@php
$tokens = [
    [
        'title' => 'Bitcoin',
        'price' => '$ 41245',
        'percentage' => '- 3.5%',
        'color' => 'text-red-600',
    ],
    [
        'title' => 'Litecoin',
        'price' => '$ 216',
        'percentage' => '+ 3.5%',
        'color' => 'text-emerald-600',
    ],
    [
        'title' => 'Ethereum',
        'price' => '$ 451',
        'percentage' => '+ 3.5%',
        'color' => 'text-emerald-600',
    ],
    [
        'title' => 'Blocknet',
        'price' => '$ 845',
        'percentage' => '+ 3.5%',
        'color' => 'text-emerald-600',
    ],
    [
        'title' => 'Monero',
        'price' => '$ 654',
        'percentage' => '- 3.5%',
        'color' => 'text-red-600',
    ]
];
@endphp

@foreach ($tokens as $item)
    <div class="tiny-slide">
        <div class="text-center">
            <h6 class="text-white mb-1">{{ $item['title'] }}</h6>
            <span class="text-white/50 block">{{ $item['price'] }}</span>
            <span class="{{ $item['color'] }}">{{ $item['percentage'] }}</span>
        </div>
    </div>
@endforeach