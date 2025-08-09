@php
$groups = [
    [
        'title' => 'All',
        'group' => 'all',
        'style' => 'inline-block text-sm uppercase font-semibold mb-3 cursor-pointer relative border-b border-transparent text-slate-400 duration-500 active',
    ],
    [
        'title' => 'Breakfast',
        'group' => 'break',
        'style' => 'inline-block text-sm uppercase font-semibold mb-3 cursor-pointer relative border-b border-transparent text-slate-400 duration-500',
    ],
    [
        'title' => 'Lunch',
        'group' => 'lunch',
        'style' => 'inline-block text-sm uppercase font-semibold mb-3 cursor-pointer relative border-b border-transparent text-slate-400 duration-500',
    ],
    [
        'title' => 'Dinner',
        'group' => 'dinner',
        'style' => 'inline-block text-sm uppercase font-semibold mb-3 cursor-pointer relative border-b border-transparent text-slate-400 duration-500',
    ],
    [
        'title' => 'Tea & Coffee',
        'group' => 'tea',
        'style' => 'inline-block text-sm uppercase font-semibold mb-3 cursor-pointer relative border-b border-transparent text-slate-400 duration-500',
    ]
];
@endphp

<ul class="mb-0 list-none container-filter-border-bottom filter-options space-x-3">

    @foreach ($groups as $item)
        <li class="{{ $item['style'] }}" data-group="{{ $item['group'] }}">{{ $item['title'] }}</li>
    @endforeach

</ul>