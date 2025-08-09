@php
$buttons = [
    [
        'title' => 'Indigo',
        'style' => 'bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white',
    ],
    [
        'title' => 'Emerald',
        'style' => 'bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white',
    ],
    [
        'title' => 'Red',
        'style' => 'bg-red-600 hover:bg-red-700 border-red-600 hover:border-red-700 text-white',
    ],
    [
        'title' => 'Yellow',
        'style' => 'bg-yellow-500 hover:bg-yellow-600 border-yellow-500 hover:border-yellow-600 text-white',
    ],
    [
        'title' => 'Blue',
        'style' => 'bg-blue-600 hover:bg-blue-700 border-blue-600 hover:border-blue-700 text-white',
    ],
    [
        'title' => 'Sky',
        'style' => 'bg-sky-500 hover:bg-sky-600 border-sky-500 hover:border-sky-600 text-white',
    ],
    [
        'title' => 'Cyan',
        'style' => 'bg-cyan-500 hover:bg-cyan-600 border-cyan-500 hover:border-cyan-600 text-white',
    ],
    [
        'title' => 'Orange',
        'style' => 'bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white',
    ],
    [
        'title' => 'Purple',
        'style' => 'bg-purple-600 hover:bg-purple-700 border-purple-600 hover:border-purple-700 text-white',
    ],
    [
        'title' => 'Dark',
        'style' => 'bg-gray-800 hover:bg-gray-950 border-gray-800 hover:border-gray-950 text-white',
    ],
    [
        'title' => 'Secondary',
        'style' => 'bg-gray-500 hover:bg-gray-600 border-gray-500 hover:border-gray-600 text-white',
    ],
    [
        'title' => 'Light',
        'style' => 'bg-gray-50 hover:bg-gray-100 border-gray-50 hover:border-gray-100 text-slate-900',
    ]
];
@endphp

@foreach ($buttons as $item)
    <li class="inline-block m-0.5">
        <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center {{ $item['style'] }} rounded-md">{{ $item['title'] }}</a>
    </li>
@endforeach