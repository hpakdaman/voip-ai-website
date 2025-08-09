@php
$borders = [
    [
        'title' => '.border-solid',
        'style' => 'border-solid border-2',
    ],
    [
        'title' => '.border-dashed',
        'style' => 'border-dashed border-2',
    ],
    [
        'title' => '.border-dotted',
        'style' => 'border-dotted border-2',
    ],
    [
        'title' => '.border-double',
        'style' => 'border-double border-4',
    ]
];
@endphp

@foreach ($borders as $item)
    <li class="inline-block {{ $item['style'] }} dark:border-gray-800 sm:w-[150px] py-2 px-3 m-0.5 bg-white dark:bg-slate-900 text-slate-400">{{ $item['title'] }}</li>
@endforeach