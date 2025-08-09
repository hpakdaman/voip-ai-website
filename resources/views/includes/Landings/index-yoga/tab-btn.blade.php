@php
$btns = [
    [
        'title' => 'Monday',
        'id' => 'monday-tab',
        'target' => '#monday',
        'controls' => 'monday',
        'selected' => 'true',
        'style' => 'px-4 py-2 text-base font-semibold shadow-sm dark:shadow-gray-800 rounded-md w-full hover:text-indigo-600 duration-500',
    ],
    [
        'title' => 'Tuesday',
        'id' => 'tuesday-tab',
        'target' => '#tuesday',
        'controls' => 'tuesday',
        'selected' => 'false',
        'style' => 'px-4 py-2 text-base font-semibold shadow-sm dark:shadow-gray-800 rounded-md w-full mt-3 duration-500',
    ],
    [
        'title' => 'Wednesday',
        'id' => 'wednesday-tab',
        'target' => '#wednesday',
        'controls' => 'wednesday',
        'selected' => 'false',
        'style' => 'px-4 py-2 text-base font-semibold shadow-sm dark:shadow-gray-800 rounded-md w-full mt-3 duration-500',
    ],
    [
        'title' => 'Thursday',
        'id' => 'thursday-tab',
        'target' => '#thursday',
        'controls' => 'thursday',
        'selected' => 'false',
        'style' => 'px-4 py-2 text-base font-semibold shadow-sm dark:shadow-gray-800 rounded-md w-full mt-3 duration-500',
    ],
    [
        'title' => 'Friday',
        'id' => 'friday-tab',
        'target' => '#friday',
        'controls' => 'friday',
        'selected' => 'false',
        'style' => 'px-4 py-2 text-base font-semibold shadow-sm dark:shadow-gray-800 rounded-md w-full mt-3 duration-500',
    ],
    [
        'title' => 'Saturday',
        'id' => 'saturday-tab',
        'target' => '#saturday',
        'controls' => 'saturday',
        'selected' => 'false',
        'style' => 'px-4 py-2 text-base font-semibold shadow-sm dark:shadow-gray-800 rounded-md w-full mt-3 duration-500',
    ]
];
@endphp

<ul class="flex-column text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">

    @foreach ($btns as $item)
        <li role="presentation">
            <button class="{{ $item['style'] }}" id="{{ $item['id'] }}" data-tabs-target="{{ $item['target'] }}" type="button" role="tab" aria-controls="{{ $item['controls'] }}" aria-selected="{{ $item['selected'] }}">{{ $item['title'] }}</button>
        </li>
    @endforeach

</ul>