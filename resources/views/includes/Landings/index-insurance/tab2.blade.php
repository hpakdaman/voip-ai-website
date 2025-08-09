@php
$tabs = [
    [
        'title' => 'Wealth Management',
        'id' => 'profile-tab',
        'target' => '#profile',
        'controls' => 'profile',
        'selected' => 'true',
        'style' => 'px-4 py-2 text-base font-semibold rounded-md w-full hover:text-indigo-600 duration-500',
    ],
    [
        'title' => 'Retirement Planning',
        'id' => 'dashboard-tab',
        'target' => '#dashboard',
        'controls' => 'dashboard',
        'selected' => 'false',
        'style' => 'px-4 py-2 text-base font-semibold rounded-md w-full mt-3 duration-500',
    ],
    [
        'title' => 'Business Insurance',
        'id' => 'settings-tab',
        'target' => '#settings',
        'controls' => 'settings',
        'selected' => 'false',
        'style' => 'px-4 py-2 text-base font-semibold rounded-md w-full mt-3 duration-500',
    ],
    [
        'title' => 'Life Insurance',
        'id' => 'contacts-tab',
        'target' => '#contacts',
        'controls' => 'contacts',
        'selected' => 'false',
        'style' => 'px-4 py-2 text-base font-semibold rounded-md w-full mt-3 duration-500',
    ]
];
@endphp

<ul class="flex-column text-center p-6 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 rounded-md" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
    
    @foreach ($tabs as $item)
        <li role="presentation">
            <button class="{{ $item['style'] }}" id="{{ $item['id'] }}" data-tabs-target="{{ $item['target'] }}" type="button" role="tab" aria-controls="{{ $item['controls'] }}" aria-selected="{{ $item['selected'] }}">{{ $item['title'] }}</button>
        </li>
    @endforeach
    
</ul>