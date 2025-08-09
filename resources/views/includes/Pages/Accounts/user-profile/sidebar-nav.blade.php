@php
$sidebars = [
    [
        'icon' => 'uil uil-dashboard',
        'title' => 'Profile',
        'link' => url('/user-profile'),
    ],
    [
        'icon' => 'uil uil-diary-alt',
        'title' => 'Billing Info',
        'link' => url('/user-billing'),
    ],
    [
        'icon' => 'uil uil-credit-card',
        'title' => 'Payment',
        'link' => url('/user-payment'),
    ],
    [
        'icon' => 'uil uil-receipt',
        'title' => 'Invoice',
        'link' => url('/user-invoice'),
    ],
    [
        'icon' => 'uil uil-process',
        'title' => 'Social Profile',
        'link' => url('/user-social'),
    ],
    [
        'icon' => 'uil uil-bell',
        'title' => 'Notifications',
        'link' => url('/user-notification'),
    ],
    [
        'icon' => 'uil uil-setting',
        'title' => 'Settings',
        'link' => url('/user-setting'),
    ],
    [
        'icon' => 'uil uil-power',
        'title' => 'Sign Out',
        'link' => url('/auth-lock-screen'),
    ]
];
@endphp

<ul class="list-none sidebar-nav mb-0 mt-3" id="navmenu-nav">

    @foreach ($sidebars as $item)
        <li class="navbar-item account-menu">
            <a href="{{ $item['link'] }}" class="navbar-link text-slate-400 flex items-center py-2 rounded">
                <span class="me-2 text-[18px] mb-0"><i class="{{ $item['icon'] }}"></i></span>
                <h6 class="mb-0 font-semibold">{{ $item['title'] }}</h6>
            </a>
        </li>
    @endforeach

</ul>