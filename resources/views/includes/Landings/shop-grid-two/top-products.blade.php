@php
$products = [
    [
        'img' => 'assets/images/shop/items/s1.jpg',
        'title' => 'T-shirt (M)',
        'name' => '$16USD',
    ],
    [
        'img' => 'assets/images/shop/items/s2.jpg',
        'title' => 'Bag',
        'name' => '$16USD',
    ],
    [
        'img' => 'assets/images/shop/items/s3.jpg',
        'title' => 'Watch (Men)',
        'name' => '$16USD',
    ]
];
@endphp

@foreach ($products as $item)
    <div class="block mt-2">
        <span class="flex items-center">
            <img src="{{ asset($item['img']) }}" class="rounded shadow-sm dark:shadow-gray-800 w-12" alt="">
            <span class="ms-3">
                <span class="block font-semibold">{{ $item['title'] }}</span>
                <span class="block text-sm text-slate-400">{{ $item['name'] }}</span>
            </span>
        </span>
    </div>
@endforeach