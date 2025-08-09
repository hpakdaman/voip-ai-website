@php
$weights = [
    [
        'title' => '.font-thin',
        'name' => ': The quick brown fox jumps over the lazy dog.',
        'style' => 'font-thin',
        'class' => '',
    ],
    [
        'title' => '.font-extralight',
        'name' => ': The quick brown fox jumps over the lazy dog.',
        'style' => 'font-extralight',
        'class' => 'mt-2',
    ],
    [
        'title' => '.font-light',
        'name' => ': The quick brown fox jumps over the lazy dog.',
        'style' => 'font-light',
        'class' => 'mt-2',
    ],
    [
        'title' => '.font-normal',
        'name' => ': The quick brown fox jumps over the lazy dog.',
        'style' => 'font-normal',
        'class' => 'mt-2',
    ],
    [
        'title' => '.font-medium',
        'name' => ': The quick brown fox jumps over the lazy dog.',
        'style' => 'font-medium',
        'class' => 'mt-2',
    ],
    [
        'title' => '.font-semibold',
        'name' => ': The quick brown fox jumps over the lazy dog.',
        'style' => 'font-semibold',
        'class' => 'mt-2',
    ],
    [
        'title' => '.font-bold',
        'name' => ': The quick brown fox jumps over the lazy dog.',
        'style' => 'font-bold',
        'class' => 'mt-2',
    ],
    [
        'title' => '.font-extrabold',
        'name' => ': The quick brown fox jumps over the lazy dog.',
        'style' => 'font-extrabold',
        'class' => 'mt-2',
    ]
];
@endphp

@foreach ($weights as $item)
    <p class="text-lg text-red-600 {{ $item['class'] }}">{{ $item['title'] }} <span class="{{ $item['style'] }} text-slate-400">{{ $item['name'] }}</span></p>
@endforeach