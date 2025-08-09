@php
$tabs = [
    [
        'title' => 'Details',
        'style' => 'px-6 py-2 font-semibold rounded-md w-full hover:text-indigo-600 duration-500',
        'id' => 'tuesday-tab',
        'target' => '#tuesday',
        'controls' => 'tuesday',
        'selected' => 'true',
    ],
    [
        'title' => 'Bids',
        'style' => 'px-6 py-2 font-semibold rounded-md w-full duration-500',
        'id' => 'wednesday-tab',
        'target' => '#wednesday',
        'controls' => 'wednesday',
        'selected' => 'false',
    ],
    [
        'title' => 'Activity',
        'style' => 'px-6 py-2 font-semibold rounded-md w-full duration-500',
        'id' => 'thursday-tab',
        'target' => '#thursday',
        'controls' => 'thursday',
        'selected' => 'false',
    ]
];
@endphp

<ul class="md:w-fit w-full flex-wrap justify-center text-center p-3 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 rounded-md" id="myTab" data-tabs-toggle="#StarterContent" role="tablist">
    
    @foreach ($tabs as $item)
        <li role="presentation" class="md:inline-block block md:w-fit w-full">
            <button class="{{ $item['style'] }}" id="{{ $item['id'] }}" data-tabs-target="{{ $item['target'] }}" type="button" role="tab" aria-controls="{{ $item['controls'] }}" aria-selected="{{ $item['selected'] }}">{{ $item['title'] }}</button>
        </li>
    @endforeach

</ul>