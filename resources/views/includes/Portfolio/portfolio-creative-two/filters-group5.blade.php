@php
$groups = [
    [
        'title' => 'All',
        'group' => 'all',
        'style' => 'inline-block font-medium text-base mb-3 text-slate-400 cursor-pointer relative duration-500 active',
    ],
    [
        'title' => 'Branding',
        'group' => 'branding',
        'style' => 'inline-block font-medium text-base mb-3 text-slate-400 cursor-pointer relative duration-500',
    ],
    [
        'title' => 'Designing',
        'group' => 'designing',
        'style' => 'inline-block font-medium text-base mb-3 text-slate-400 cursor-pointer relative duration-500',
    ],
    [
        'title' => 'Photography',
        'group' => 'photography',
        'style' => 'inline-block font-medium text-base mb-3 text-slate-400 cursor-pointer relative duration-500',
    ],
    [
        'title' => 'Development',
        'group' => 'development',
        'style' => 'inline-block font-medium text-base mb-3 text-slate-400 cursor-pointer relative duration-500',
    ]
];
@endphp

<ul class="mb-0 list-none container-creative filter-options space-x-3">

    @foreach ($groups as $item)
        <li class="{{ $item['style'] }}" data-group="{{ $item['group'] }}">{{ $item['title'] }}</li>
    @endforeach
    
</ul>