@php
$buttons = [
    [
        'style' => 'rounded-md bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white',
    ],
    [
        'style' => 'rounded-full bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white',
    ],
    [
        'style' => 'rounded-md border bg-transparent hover:bg-indigo-600 border-indigo-600 text-indigo-600 hover:text-white',
    ],
    [
        'style' => 'rounded-full border bg-transparent hover:bg-indigo-600 border-indigo-600 text-indigo-600 hover:text-white',
    ],
    [
        'style' => 'rounded-md border bg-transparent hover:bg-indigo-600 border-indigo-600 text-indigo-600 hover:text-white',
    ],
    [
        'style' => 'rounded-full border bg-transparent hover:bg-indigo-600 border-indigo-600 text-indigo-600 hover:text-white',
    ],
    [
        'style' => 'rounded-md border bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white',
    ],
    [
        'style' => 'rounded-full border bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white',
    ]
];
@endphp

@foreach ($buttons as $item)
    <li class="inline-block m-0.5">
        <a href="" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center {{ $item['style'] }}"><i data-feather="shopping-cart" class="size-4"></i></a>
    </li>
@endforeach