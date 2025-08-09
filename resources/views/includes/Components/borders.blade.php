@php
$borders = [
    [
        'title' => '.border-0',
        'style' => 'inline-block border-0',
    ],
    [
        'title' => '.border-2',
        'style' => 'inline-block border-2',
    ],
    [
        'title' => '.border-4',
        'style' => 'inline-block border-4',
    ],
    [
        'title' => '.border-8',
        'style' => 'inline-block border-8',
    ],
    [
        'title' => '.border',
        'style' => 'inline-block border',
    ],
    [
        'title' => '.border-t',
        'style' => 'inline-block border-t border-gray-200',
    ],
    [
        'title' => '.border-s',
        'style' => 'inline-block border-s',
    ],
    [
        'title' => '.border-b',
        'style' => 'inline-block border-b',
    ],
    [
        'title' => '.border-e',
        'style' => 'inline-block border-e',
    ],
    [
        'title' => '.border-x',
        'style' => 'inline-block border-x',
    ],
    [
        'title' => '.border-y',
        'style' => 'inline-block border-y',
    ]
];
@endphp

@foreach ($borders as $item)
    <li class="{{ $item['style'] }} dark:border-gray-800 sm:w-[150px] py-2 px-3 m-0.5 bg-white dark:bg-slate-900 text-slate-400">{{ $item['title'] }}</li>
@endforeach