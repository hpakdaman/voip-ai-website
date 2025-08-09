@php
$alerts = [
    [
        'title' => 'A simple alert—check it out!',
        'style' => 'bg-indigo-600/10 border border-indigo-600/10 text-indigo-600',
    ],
    [
        'title' => 'A simple alert—check it out!',
        'style' => 'bg-emerald-600/10 border border-emerald-600/10 text-emerald-600',
    ],
    [
        'title' => 'A simple alert—check it out!',
        'style' => 'bg-yellow-500/10 border border-yellow-500/10 text-yellow-500',
    ],
    [
        'title' => 'A simple alert—check it out!',
        'style' => 'bg-red-600/10 border border-red-600/10 text-red-600',
    ],
    [
        'title' => 'A simple alert—check it out!',
        'style' => 'bg-sky-500/10 border border-sky-500/10 text-sky-500',
    ],
    [
        'title' => 'A simple alert—check it out!',
        'style' => 'bg-slate-900/10 border border-slate-900/10 text-slate-900 dark:text-white',
    ],
    [
        'title' => 'A simple alert—check it out!',
        'style' => 'bg-gray-400/10 border border-gray-400/10 text-gray-400',
    ]
];
@endphp

@foreach ($alerts as $item)
    <div class="relative px-4 py-2 rounded-md font-medium {{ $item['style'] }} block">{{ $item['title'] }}</div>
@endforeach