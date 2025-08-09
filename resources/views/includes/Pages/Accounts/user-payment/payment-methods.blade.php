@php
$methods = [
    [
        'img' => 'assets/images/payments/visa.png',
        'title' => 'Visa ending in 4578',
        'expires' => 'Expires in 12/2025',
        'style' => 'flex justify-between items-center py-6',
    ],
    [
        'img' => 'assets/images/payments/american-ex.png',
        'title' => 'American Express ending in 4578',
        'expires' => 'Expires in 12/2025',
        'style' => 'flex justify-between items-center py-6 border-t border-gray-100 dark:border-gray-800',
    ],
    [
        'img' => 'assets/images/payments/discover.png',
        'title' => 'Discover ending in 4578',
        'expires' => 'Expires in 12/2025',
        'style' => 'flex justify-between items-center py-6 border-t border-gray-100 dark:border-gray-800',
    ],
    [
        'img' => 'assets/images/payments/master-card.png',
        'title' => 'Master Card ending in 4578',
        'expires' => 'Expires in 12/2025',
        'style' => 'flex justify-between items-center py-6 border-t border-gray-100 dark:border-gray-800',
    ]
];
@endphp

@foreach ($methods as $item)
    <li class="{{ $item['style'] }}">
        <div class="flex items-center">
            <img src="{{ asset($item['img']) }}" class="rounded shadow-sm dark:shadow-gray-800 w-12" alt="">

            <div class="ms-3">
                <p class="font-semibold">{{ $item['title'] }}</p>
                <p class="text-slate-400 text-sm">{{ $item['expires'] }}</p>
            </div>
        </div>

        <div>
            <a href="" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center bg-red-600/5 hover:bg-red-600 border-red-600/10 hover:border-red-600 text-red-600 hover:text-white rounded-full"><i data-feather="trash-2" class="size-4"></i></a>
        </div>
    </li>
@endforeach