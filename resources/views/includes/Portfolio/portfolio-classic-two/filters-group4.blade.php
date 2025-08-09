@php
$groups = [
    [
        'title' => 'All',
        'group' => 'all',
        'style' => 'inline-block font-medium text-base mb-3 py-1 px-3 cursor-pointer relative text-slate-400 border border-gray-100 dark:border-gray-800 rounded-md duration-500 active',
    ],
    [
        'title' => 'Branding',
        'group' => 'branding',
        'style' => 'inline-block font-medium text-base mb-3 py-1 px-3 cursor-pointer relative text-slate-400 border border-gray-100 dark:border-gray-800 rounded-md duration-500',
    ],
    [
        'title' => 'Designing',
        'group' => 'designing',
        'style' => 'inline-block font-medium text-base mb-3 py-1 px-3 cursor-pointer relative text-slate-400 border border-gray-100 dark:border-gray-800 rounded-md duration-500',
    ],
    [
        'title' => 'Photography',
        'group' => 'photography',
        'style' => 'inline-block font-medium text-base mb-3 py-1 px-3 cursor-pointer relative text-slate-400 border border-gray-100 dark:border-gray-800 rounded-md duration-500',
    ],
    [
        'title' => 'Development',
        'group' => 'development',
        'style' => 'inline-block font-medium text-base mb-3 py-1 px-3 cursor-pointer relative text-slate-400 border border-gray-100 dark:border-gray-800 rounded-md duration-500',
    ]
];
@endphp

<ul class="mb-0 list-none container-filter-box filter-options space-x-3">

    @foreach ($groups as $item)
        <li class="{{ $item['style'] }}" data-group="{{ $item['group'] }}">{{ $item['title'] }}</li>
    @endforeach

</ul>