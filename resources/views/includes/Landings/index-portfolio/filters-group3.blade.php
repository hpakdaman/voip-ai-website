@php
$groups = [
    [
        'title' => 'All',
        'group' => 'all',
        'style' => 'inline-block font-medium text-lg mb-3 cursor-pointer relative text-slate-400 duration-500 active',
    ],
    [
        'title' => 'Branding',
        'group' => 'branding',
        'style' => 'inline-block font-medium text-lg mb-3 cursor-pointer relative text-slate-400 duration-500',
    ],
    [
        'title' => 'Designing',
        'group' => 'designing',
        'style' => 'inline-block font-medium text-lg mb-3 cursor-pointer relative text-slate-400 duration-500',
    ],
    [
        'title' => 'Photography',
        'group' => 'photography',
        'style' => 'inline-block font-medium text-lg mb-3 cursor-pointer relative text-slate-400 duration-500',
    ],
    [
        'title' => 'Development',
        'group' => 'development',
        'style' => 'inline-block font-medium text-lg mb-3 cursor-pointer relative text-slate-400 duration-500',
    ]
];
@endphp

<div class="filters-group">
    <ul class="mb-0 list-none container-filter filter-options space-x-3">

        @foreach ($groups as $item)
            <li class="{{ $item['style'] }}" data-group="{{ $item['group'] }}">{{ $item['title'] }}</li>
        @endforeach

    </ul>
</div>