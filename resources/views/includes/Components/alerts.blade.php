@php
$alerts = [
    [
        'title' => 'A simple alert—check it out!',
        'style' => 'bg-indigo-600 border border-indigo-600',
    ],
    [
        'title' => 'A simple alert—check it out!',
        'style' => 'bg-emerald-600 border border-emerald-600',
    ],
    [
        'title' => 'A simple alert—check it out!',
        'style' => 'bg-yellow-500 border border-yellow-500',
    ],
    [
        'title' => 'A simple alert—check it out!',
        'style' => 'bg-red-600 border border-red-600',
    ],
    [
        'title' => 'A simple alert—check it out!',
        'style' => 'bg-sky-500 border border-sky-500',
    ],
    [
        'title' => 'A simple alert—check it out!',
        'style' => 'bg-slate-900 border border-slate-900',
    ],
    [
        'title' => 'A simple alert—check it out!',
        'style' => 'bg-gray-400 border border-gray-400',
    ]
];
@endphp

@foreach ($alerts as $item)
    <div class="relative px-4 py-2 rounded-md font-medium {{ $item['style'] }} text-white block">{{ $item['title'] }}</div>
@endforeach