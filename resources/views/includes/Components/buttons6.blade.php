@php
$buttons = [
    [
        'title' => 'Small',
        'style' => 'py-[5px] px-4 inline-block font-semibold tracking-wide align-middle duration-500 text-sm text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md',
    ],
    [
        'title' => 'Default',
        'style' => 'py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md',
    ],
    [
        'title' => 'Large',
        'style' => 'py-2.5 px-8 inline-block font-semibold tracking-wide border align-middle duration-500 text-lg text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md',
    ]
];
@endphp

@foreach ($buttons as $item)
    <li class="inline-block m-0.5">
        <a href="" class="{{ $item['style'] }}">{{ $item['title'] }}</a>
    </li>
@endforeach