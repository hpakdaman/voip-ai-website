@php
$accounts = [
    [
        'icon' => 'uil uil-dashboard text-[20px] me-2 align-middle',
        'title' => 'Dashboard',
        'id' => 'dashboard-tab',
        'target' => '#dashboard',
        'controls' => 'dashboard',
        'selected' => 'true',
        'style' => 'px-4 py-2 text-start text-base font-semibold rounded-md w-full hover:text-indigo-600 duration-500',
    ],
    [
        'icon' => 'uil uil-list-ul text-[20px] me-2 align-middle',
        'title' => 'Orders',
        'id' => 'order-tab',
        'target' => '#order',
        'controls' => 'order',
        'selected' => 'false',
        'style' => 'px-4 py-2 text-start text-base font-semibold rounded-md w-full mt-3 duration-500',
    ],
    [
        'icon' => 'uil uil-arrow-circle-down text-[20px] me-2 align-middle',
        'title' => 'Downloads',
        'id' => 'download-tab',
        'target' => '#download',
        'controls' => 'download',
        'selected' => 'false',
        'style' => 'px-4 py-2 text-start text-base font-semibold rounded-md w-full mt-3 duration-500',
    ],
    [
        'icon' => 'uil uil-map-marker text-[20px] me-2 align-middle',
        'title' => 'Addresses',
        'id' => 'address-tab',
        'target' => '#address',
        'controls' => 'address',
        'selected' => 'false',
        'style' => 'px-4 py-2 text-start text-base font-semibold rounded-md w-full mt-3 duration-500',
    ],
    [
        'icon' => 'uil uil-user text-[20px] me-2 align-middle',
        'title' => 'Account Details',
        'id' => 'accountdetail-tab',
        'target' => '#accountdetail',
        'controls' => 'accountdetail',
        'selected' => 'false',
        'style' => 'px-4 py-2 text-start text-base font-semibold rounded-md w-full mt-3 duration-500',
    ]
];
@endphp

<ul class="flex-column p-6 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 rounded-md" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
    
    @foreach ($accounts as $item)
        <li role="presentation">
            <button class="{{ $item['style'] }}" id="{{ $item['id'] }}" data-tabs-target="{{ $item['target'] }}" type="button" role="tab" aria-controls="{{ $item['controls'] }}" aria-selected="{{ $item['selected'] }}"><i class="{{ $item['icon'] }}"></i> {{ $item['title'] }}</button>
        </li>
    @endforeach
    
    <li role="presentation">
        <a href="{{ url('/auth-login') }}" class="px-4 py-2 text-start text-base font-semibold rounded-md w-full mt-3 duration-500 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-indigo-600 dark:hover:text-white block" type="button"><i class="uil uil-sign-out-alt text-[20px] me-2 align-middle"></i> Logout</a>
    </li>
</ul>