@php
$tabs = [
    [
        'name' => 'Step 1',
        'title' => 'SEO Audit',
        'desc' => "We offer flexible and comprehensive online marketing plans",
        'style' => "px-4 py-2 text-start text-base font-semibold rounded-md w-full hover:text-indigo-600 hover:text-indigo-600 duration-500",
        'id' => "profile-tab",
        'target' => "#profile",
        'controls' => "profile",
        'selected' => "true",
    ],
    [
        'name' => 'Step 2',
        'title' => 'Project Execution',
        'desc' => "We offer flexible and comprehensive online marketing plans",
        'style' => "px-4 py-2 text-start text-base font-semibold rounded-md w-full mt-6 duration-500",
        'id' => "dashboard-tab",
        'target' => "#dashboard",
        'controls' => "dashboard",
        'selected' => "false",
    ],
    [
        'name' => 'Step 3',
        'title' => 'Results & Reporting',
        'desc' => "We offer flexible and comprehensive online marketing plans",
        'style' => "px-4 py-2 text-start text-base font-semibold rounded-md w-full mt-6 duration-500",
        'id' => "settings-tab",
        'target' => "#settings",
        'controls' => "settings",
        'selected' => "false",
    ]
];
@endphp

@foreach ($tabs as $item)
    <li role="presentation">
        <button class="{{ $item['style'] }}" id="{{ $item['id'] }}" data-tabs-target="{{ $item['target'] }}" type="button" role="tab" aria-controls="{{ $item['controls'] }}" aria-selected="{{ $item['selected'] }}">
            <span class="block">{{ $item['name'] }}</span>
            <span class="text-xl mt-2 block">{{ $item['title'] }}</span>
            <span class="block mt-2">{{ $item['desc'] }}</span>
        </button>
    </li>
@endforeach