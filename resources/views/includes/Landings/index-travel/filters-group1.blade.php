@php
$groups = [
    [
        'title' => 'All',
        'group' => 'all',
        'style' => 'inline-block text-lg font-semibold mb-3 cursor-pointer relative border-b border-transparent text-slate-400 duration-500 active',
    ],
    [
        'title' => 'Beach',
        'group' => 'beach',
        'style' => 'inline-block text-lg font-semibold mb-3 cursor-pointer relative border-b border-transparent text-slate-400 duration-500',
    ],
    [
        'title' => 'Park',
        'group' => 'park',
        'style' => 'inline-block text-lg font-semibold mb-3 cursor-pointer relative border-b border-transparent text-slate-400 duration-500',
    ],
    [
        'title' => 'Nature',
        'group' => 'nature',
        'style' => 'inline-block text-lg font-semibold mb-3 cursor-pointer relative border-b border-transparent text-slate-400 duration-500',
    ],
    [
        'title' => 'Mountain',
        'group' => 'mountain',
        'style' => 'inline-block text-lg font-semibold mb-3 cursor-pointer relative border-b border-transparent text-slate-400 duration-500',
    ]
];
@endphp

<ul class="mb-0 list-none container-filter-border-bottom filter-options space-x-3">

    @foreach ($groups as $item)
        <li class="{{ $item['style'] }}" data-group="{{ $item['group'] }}">{{ $item['title'] }}</li>
    @endforeach

</ul>