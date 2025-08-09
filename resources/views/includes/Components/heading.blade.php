@php
$headings = [
    [
        'title' => '(.text-xs)',
        'name' => 'Hello',
        'style' => 'text-xs',
        'class' => '',
    ],
    [
        'title' => '(.text-sm)',
        'name' => 'Hello',
        'style' => 'text-sm',
        'class' => 'mt-2',
    ],
    [
        'title' => '(.text-base)',
        'name' => 'Hello',
        'style' => 'text-base',
        'class' => 'mt-2',
    ],
    [
        'title' => '(.text-lg)',
        'name' => 'Hello',
        'style' => 'text-lg',
        'class' => 'mt-2',
    ],
    [
        'title' => '(.text-xl)',
        'name' => 'Hello',
        'style' => 'text-xl',
        'class' => 'mt-2',
    ],
    [
        'title' => '(.text-2xl)',
        'name' => 'Hello',
        'style' => 'text-2xl',
        'class' => 'mt-2',
    ],
    [
        'title' => '(.text-3xl)',
        'name' => 'Hello',
        'style' => 'text-3xl',
        'class' => 'mt-2',
    ],
    [
        'title' => '(.text-4xl)',
        'name' => 'Hello',
        'style' => 'text-4xl',
        'class' => 'mt-2',
    ],
    [
        'title' => '(.text-5xl)',
        'name' => 'Hello',
        'style' => 'text-5xl',
        'class' => 'mt-2',
    ],
    [
        'title' => '(.text-6xl)',
        'name' => 'Hello',
        'style' => 'text-6xl',
        'class' => 'mt-2',
    ],
    [
        'title' => '(.text-7xl)',
        'name' => 'Hello',
        'style' => 'text-7xl',
        'class' => 'mt-2',
    ],
    [
        'title' => '(.text-8xl)',
        'name' => 'Hello',
        'style' => 'text-8xl',
        'class' => 'mt-2',
    ],
    [
        'title' => '(.text-9xl)',
        'name' => 'Hello',
        'style' => 'text-9xl',
        'class' => 'mt-2',
    ]
];
@endphp

@foreach ($headings as $item)
    <li class="{{ $item['class'] }}"><span class="{{ $item['style'] }} font-semibold text-slate-400">{{ $item['name'] }}</span> {{ $item['title'] }}</li>
@endforeach