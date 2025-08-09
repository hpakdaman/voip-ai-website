@php
$groups = [
    [
        'title' => 'All',
        'group' => 'all',
        'style' => "inline-block font-medium text-lg mb-3 cursor-pointer relative text-slate-400 duration-500 active",
    ],
    [
        'title' => 'Monday',
        'group' => 'monday',
        'style' => "inline-block font-medium text-lg mb-3 cursor-pointer relative text-slate-400 duration-500",
    ],
    [
        'title' => 'Tuesday',
        'group' => 'tuesday',
        'style' => "inline-block font-medium text-lg mb-3 cursor-pointer relative text-slate-400 duration-500",
    ],
    [
        'title' => 'Wednesday',
        'group' => 'wednesday',
        'style' => "inline-block font-medium text-lg mb-3 cursor-pointer relative text-slate-400 duration-500",
    ],
    [
        'title' => 'Thursday',
        'group' => 'thursday',
        'style' => "inline-block font-medium text-lg mb-3 cursor-pointer relative text-slate-400 duration-500",
    ],
    [
        'title' => 'Friday',
        'group' => 'friday',
        'style' => "inline-block font-medium text-lg mb-3 cursor-pointer relative text-slate-400 duration-500",
    ],
    [
        'title' => 'Saturday',
        'group' => 'saturday',
        'style' => "inline-block font-medium text-lg mb-3 cursor-pointer relative text-slate-400 duration-500",
    ]
];
@endphp

<ul class="mb-0 list-none container-filter filter-options space-x-3">

    @foreach ($groups as $item)
        <li class="{{ $item['style'] }}" data-group="{{ $item['group'] }}">{{ $item['title'] }}</li>
    @endforeach

</ul>