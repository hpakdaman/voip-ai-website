@php
$alerts = [
    [
        'icon' => 'uil uil-exclamation-circle me-1',
        'title' => 'A simple alert—check it out!',
        'style' => 'bg-indigo-600/10 border border-indigo-600/10 text-indigo-600',
    ],
    [
        'icon' => 'uil uil-check-circle me-1',
        'title' => 'A simple alert—check it out!',
        'style' => 'bg-emerald-600/10 border border-emerald-600/10 text-emerald-600',
    ],
    [
        'icon' => 'uil uil-exclamation-triangle me-1',
        'title' => 'A simple alert—check it out!',
        'style' => 'bg-yellow-500/10 border border-yellow-500/10 text-yellow-500',
    ],
    [
        'icon' => 'uil uil-exclamation-octagon me-1',
        'title' => 'A simple alert—check it out!',
        'style' => 'bg-red-600/10 border border-red-600/10 text-red-600',
    ],
    [
        'icon' => 'uil uil-info-circle me-1',
        'title' => 'A simple alert—check it out!',
        'style' => 'bg-sky-500/10 border border-sky-500/10 text-sky-500',
    ]
];
@endphp

@foreach ($alerts as $item)
    <div class="relative px-4 py-2 rounded-md font-medium {{ $item['style'] }} block"><i class="{{ $item['icon'] }}"></i> {{ $item['title'] }}</div>
@endforeach