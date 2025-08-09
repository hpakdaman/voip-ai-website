@php
$buttons = [
    [
        'title' => 'Indigo',
        'style' => 'bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white',
    ],
    [
        'title' => 'Emerald',
        'style' => 'bg-emerald-600/5 hover:bg-emerald-600 border-emerald-600/10 hover:border-emerald-600 text-emerald-600 hover:text-white',
    ],
    [
        'title' => 'Red',
        'style' => 'bg-red-600/5 hover:bg-red-600 border-red-600/10 hover:border-red-600 text-red-600 hover:text-white',
    ],
    [
        'title' => 'Yellow',
        'style' => 'bg-yellow-500/5 hover:bg-yellow-500 border-yellow-500/10 hover:border-yellow-500 text-yellow-500 hover:text-white',
    ],
    [
        'title' => 'Blue',
        'style' => 'bg-blue-600/5 hover:bg-blue-600 border-blue-600/10 hover:border-blue-600 text-blue-600 hover:text-white',
    ],
    [
        'title' => 'Sky',
        'style' => 'bg-sky-500/5 hover:bg-sky-500 border-sky-500/10 hover:border-sky-500 text-sky-500 hover:text-white',
    ],
    [
        'title' => 'Cyan',
        'style' => 'bg-cyan-500/5 hover:bg-cyan-500 border-cyan-500/10 hover:border-cyan-500 text-cyan-500 hover:text-white',
    ],
    [
        'title' => 'Orange',
        'style' => 'bg-orange-600/5 hover:bg-orange-600 border-orange-600/10 hover:border-orange-600 text-orange-600 hover:text-white',
    ],
    [
        'title' => 'Purple',
        'style' => 'bg-purple-600/5 hover:bg-purple-600 border-purple-600/10 hover:border-purple-600 text-purple-600 hover:text-white',
    ],
    [
        'title' => 'Dark',
        'style' => 'bg-gray-800/5 hover:bg-gray-800 border-gray-800/10 hover:border-gray-800 text-gray-800 dark:text-white hover:text-white',
    ],
    [
        'title' => 'Secondary',
        'style' => 'bg-gray-500/5 hover:bg-gray-500 border-gray-500/10 hover:border-gray-500 text-gray-500 hover:text-white',
    ],
    [
        'title' => 'Light',
        'style' => 'bg-gray-50/5 hover:bg-gray-100 border-gray-50 dark:border-gray-100/5 hover:border-gray-100 text-slate-900 dark:text-white dark:hover:text-slate-900',
    ]
];
@endphp

@foreach ($buttons as $item)
    <li class="inline-block m-0.5">
        <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center {{ $item['style'] }} rounded-full">{{ $item['title'] }}</a>
    </li>
@endforeach