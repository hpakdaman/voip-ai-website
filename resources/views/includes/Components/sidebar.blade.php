@php
$sidebars = [
    [
        'title' => 'UI Buttons',
        'link' => '#buttons',
        'style' => 'navbar-item p-0',
    ],
    [
        'title' => 'UI Badges',
        'link' => '#badges',
        'style' => 'navbar-item mt-3 p-0',
    ],
    [
        'title' => 'UI Alerts',
        'link' => '#alerts',
        'style' => 'navbar-item mt-3 p-0',
    ],
    [
        'title' => 'UI Dropdowns',
        'link' => '#dropdowns',
        'style' => 'navbar-item mt-3 p-0',
    ],
    [
        'title' => 'UI Text Colors',
        'link' => '#text-colors',
        'style' => 'navbar-item mt-3 p-0',
    ],
    [
        'title' => 'UI Background Colors',
        'link' => '#backgrounds',
        'style' => 'navbar-item mt-3 p-0',
    ],
    [
        'title' => 'UI Opacity',
        'link' => '#opacity',
        'style' => 'navbar-item mt-3 p-0',
    ],
    [
        'title' => 'UI Accordions',
        'link' => '#accordions',
        'style' => 'navbar-item mt-3 p-0',
    ],
    [
        'title' => 'UI Nav Tabs',
        'link' => '#nav-tabs',
        'style' => 'navbar-item mt-3 p-0',
    ],
    [
        'title' => 'UI Form Elements',
        'link' => '#form-inputs',
        'style' => 'navbar-item mt-3 p-0',
    ],
    [
        'title' => 'UI shadow-sm',
        'link' => '#shadow-sms',
        'style' => 'navbar-item mt-3 p-0',
    ],
    [
        'title' => 'UI Borders',
        'link' => '#borders',
        'style' => 'navbar-item mt-3 p-0',
    ],
    [
        'title' => 'UI Breadcrumbs',
        'link' => '#breadcrumbs',
        'style' => 'navbar-item mt-3 p-0',
    ],
    [
        'title' => 'UI Paginations',
        'link' => '#paginations',
        'style' => 'navbar-item mt-3 p-0',
    ],
    [
        'title' => 'UI Modals',
        'link' => '#modals',
        'style' => 'navbar-item mt-3 p-0',
    ],
    [
        'title' => 'UI Tables',
        'link' => '#tables',
        'style' => 'navbar-item mt-3 p-0',
    ],
    [
        'title' => 'UI Headings',
        'link' => '#headings',
        'style' => 'navbar-item mt-3 p-0',
    ],
    [
        'title' => 'UI Font Weights',
        'link' => '#font-weights',
        'style' => 'navbar-item mt-3 p-0',
    ],
    [
        'title' => 'UI Icons',
        'link' => '#icons',
        'style' => 'navbar-item mt-3 p-0',
    ]
];
@endphp

<ul class="list-none sidebar-nav mb-0 py-0" id="navmenu-nav">

    @foreach ($sidebars as $item)
        <li class="{{ $item['style'] }}"><a href="{{ $item['link'] }}" class="text-base font-medium navbar-link">{{ $item['title'] }}</a></li>
    @endforeach

</ul>