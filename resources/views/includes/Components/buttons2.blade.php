@php
$buttons = [
    [
        'title' => 'Indigo',
        'style' => 'hover:bg-indigo-600 border-indigo-600 text-indigo-600 hover:text-white',
    ],
    [
        'title' => 'Emerald',
        'style' => 'hover:bg-emerald-600 border-emerald-600 text-emerald-600 hover:text-white',
    ],
    [
        'title' => 'Red',
        'style' => 'hover:bg-red-600 border-red-600 text-red-600 hover:text-white',
    ],
    [
        'title' => 'Yellow',
        'style' => 'hover:bg-yellow-500 border-yellow-500 text-yellow-500 hover:text-white',
    ],
    [
        'title' => 'Blue',
        'style' => 'hover:bg-blue-600 border-blue-600 text-blue-600 hover:text-white',
    ],
    [
        'title' => 'Sky',
        'style' => 'hover:bg-sky-500 border-sky-500 text-sky-500 hover:text-white',
    ],
    [
        'title' => 'Cyan',
        'style' => 'hover:bg-cyan-500 border-cyan-500 text-cyan-500 hover:text-white',
    ],
    [
        'title' => 'Orange',
        'style' => 'hover:bg-orange-600 border-orange-600 text-orange-600 hover:text-white',
    ],
    [
        'title' => 'Purple',
        'style' => 'hover:bg-purple-600 border-purple-600 text-purple-600 hover:text-white',
    ],
    [
        'title' => 'Dark',
        'style' => 'hover:bg-gray-800 border-gray-800 text-gray-800 dark:text-white hover:text-white',
    ],
    [
        'title' => 'Secondary',
        'style' => 'hover:bg-gray-500 border-gray-500 text-gray-500 hover:text-white',
    ],
    [
        'title' => 'Light',
        'style' => 'hover:bg-gray-100 border-gray-100 hover:border-gray-100 text-slate-900 dark:text-white dark:hover:text-slate-900',
    ]
];
@endphp

@foreach ($buttons as $item)
    <li class="inline-block m-0.5">
        <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-transparent {{ $item['style'] }} rounded-md">{{ $item['title'] }}</a>
    </li>
@endforeach