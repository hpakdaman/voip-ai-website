@php
$groups = [
    [
        'title' => 'All',
        'group' => 'all',
        'style' => 'inline-block text-lg font-semibold mb-3 cursor-pointer relative border-b border-transparent text-white/70 duration-500 active',
    ],
    [
        'title' => 'Business',
        'group' => 'business',
        'style' => 'inline-block text-lg font-semibold mb-3 cursor-pointer relative border-b border-transparent text-white/70 duration-500',
    ],
    [
        'title' => 'Technology',
        'group' => 'tech',
        'style' => 'inline-block text-lg font-semibold mb-3 cursor-pointer relative border-b border-transparent text-white/70 duration-500',
    ],
    [
        'title' => 'Lifestyle',
        'group' => 'lifestyle',
        'style' => 'inline-block text-lg font-semibold mb-3 cursor-pointer relative border-b border-transparent text-white/70 duration-500',
    ],
    [
        'title' => 'Food',
        'group' => 'food',
        'style' => 'inline-block text-lg font-semibold mb-3 cursor-pointer relative border-b border-transparent text-white/70 duration-500',
    ]
];
@endphp

<ul class="mb-0 list-none container-filter-white filter-options space-x-3 text-center">
    
    @foreach ($groups as $item)
        <li class="{{ $item['style'] }}" data-group="{{ $item['group'] }}">{{ $item['title'] }}</li>
    @endforeach

</ul>