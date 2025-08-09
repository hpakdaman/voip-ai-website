@php
$dropdowns = [
    [
        'title' => 'Indigo',
        'style' => 'dropdown-toggle py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md',
        'class' => 'hover:text-indigo-600',
    ],
    [
        'title' => 'Emerald',
        'style' => 'dropdown-toggle py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white rounded-md',
        'class' => 'hover:text-emerald-600',
    ],
    [
        'title' => 'Yellow',
        'style' => 'dropdown-toggle py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-yellow-500 hover:bg-yellow-600 border-yellow-500 hover:border-yellow-600 text-white rounded-md',
        'class' => 'hover:text-yellow-500',
    ],
    [
        'title' => 'Red',
        'style' => 'dropdown-toggle py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-red-600 hover:bg-red-700 border-red-600 hover:border-red-700 text-white rounded-md',
        'class' => 'hover:text-red-600',
    ],
    [
        'title' => 'Sky',
        'style' => 'dropdown-toggle py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-sky-500 hover:bg-sky-600 border-sky-500 hover:border-sky-600 text-white rounded-md',
        'class' => 'hover:text-sky-500',
    ],
    [
        'title' => 'Cyan',
        'style' => 'dropdown-toggle py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-cyan-500 hover:bg-cyan-600 border-cyan-500 hover:border-cyan-600 text-white rounded-md',
        'class' => 'hover:text-cyan-500',
    ],
    [
        'title' => 'Blue',
        'style' => 'dropdown-toggle py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-blue-600 hover:bg-blue-700 border-blue-600 hover:border-blue-700 text-white rounded-md',
        'class' => 'hover:text-blue-600',
    ],
    [
        'title' => 'Orange',
        'style' => 'dropdown-toggle py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white rounded-md',
        'class' => 'hover:text-orange-600',
    ],
    [
        'title' => 'Purple',
        'style' => 'dropdown-toggle py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-purple-600 hover:bg-purple-700 border-purple-600 hover:border-purple-700 text-white rounded-md',
        'class' => 'hover:text-purple-600',
    ],
    [
        'title' => 'Dark',
        'style' => 'dropdown-toggle py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-800 hover:bg-gray-950 border-gray-800 hover:border-gray-950 text-white rounded-md',
        'class' => 'hover:text-gray-800 dark:hover:text-white',
    ]
];
@endphp

@foreach ($dropdowns as $item)
    <li class="dropdown inline-block relative m-0.5">
        <button data-dropdown-toggle="dropdown" class="{{ $item['style'] }}" type="button">
            {{ $item['title'] }} <i class="uil uil-angle-down text-[20px] align-middle inline-block"></i>
        </button>
        <!-- Dropdown menu -->
        <div class="dropdown-menu absolute start-0 m-0 z-10 w-48 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 hidden" onclick="event.stopPropagation();">
            <ul class="py-2 text-start">
                <li>
                    <a href="" class="block font-medium py-1.5 px-4 {{ $item['class'] }}">Home</a>
                </li>
                <li>
                    <a href="" class="block font-medium py-1.5 px-4 {{ $item['class'] }}">Service</a>
                </li>
                <li>
                    <a href="" class="block font-medium py-1.5 px-4 {{ $item['class'] }}">About us</a>
                </li>
                <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>
                <li>
                    <a href="" class="block font-medium py-1.5 px-4 {{ $item['class'] }}">Contact</a>
                </li>
            </ul>
        </div>
    </li>
@endforeach