@php
$categories = [
    [
        'icon' => 'uil uil-airplay me-2 text-[18px]',
        'title' => 'Art',
    ],
    [
        'icon' => 'uil uil-at me-2 text-[18px]',
        'title' => 'Comedy',
    ],
    [
        'icon' => 'uil uil-award me-2 text-[18px]',
        'title' => 'News',
    ],
    [
        'icon' => 'uil uil-bag me-2 text-[18px]',
        'title' => 'Business',
    ],
    [
        'icon' => 'uil uil-dna me-2 text-[18px]',
        'title' => 'Entertainment',
    ],
    [
        'icon' => 'uil uil-dribbble me-2 text-[18px]',
        'title' => 'Education',
    ],
    [
        'icon' => 'uil uil-favorite me-2 text-[18px]',
        'title' => 'Movies',
    ],
    [
        'icon' => 'uil uil-discord me-2 text-[18px]',
        'title' => 'Culture',
    ],
    [
        'icon' => 'uil uil-cube me-2 text-[18px]',
        'title' => 'Relationship',
    ],
    [
        'icon' => 'uil uil-compass me-2 text-[18px]',
        'title' => 'Travel',
    ],
    [
        'icon' => 'uil uil-club me-2 text-[18px]',
        'title' => 'Science',
    ],
    [
        'icon' => 'uil uil-check-circle me-2 text-[18px]',
        'title' => 'Corporate',
    ],
    [
        'icon' => 'uil uil-bright me-2 text-[18px]',
        'title' => 'Sports',
    ],
    [
        'icon' => 'uil uil-books me-2 text-[18px]',
        'title' => 'Family & Friends',
    ],
    [
        'icon' => 'uil uil-battery-bolt me-2 text-[18px]',
        'title' => 'Design',
    ],
    [
        'icon' => 'uil uil-bolt me-2 text-[18px]',
        'title' => 'Banking',
    ],
    [
        'icon' => 'uil uil-atom me-2 text-[18px]',
        'title' => 'Goveronment',
    ],
    [
        'icon' => 'uil uil-bell me-2 text-[18px]',
        'title' => 'Web Development',
    ],
    [
        'icon' => 'uil uil-bitcoin me-2 text-[18px]',
        'title' => 'NFT',
    ],
    [
        'icon' => 'uil uil-bitcoin-circle me-2 text-[18px]',
        'title' => 'Stock Market',
    ]
];
@endphp

@foreach ($categories as $item)
    <li class="inline-block">
        <a href="" class="group flex items-center bg-white dark:bg-slate-900 hover:text-indigo-600 shadow-sm hover:shadow-md dark:shadow-gray-800 hover:dark:shadow-gray-800 border-4 border-double border-gray-100 hover:border-indigo-600/30 dark:border-gray-800 hover:dark:border-indigo-600/50 py-1.5 px-4 rounded-full align-middle duration-500">
            <i class="{{ $item['icon'] }}"></i>
            <span class="text-[18px] font-medium">{{ $item['title'] }}</span>
        </a>
    </li>
@endforeach