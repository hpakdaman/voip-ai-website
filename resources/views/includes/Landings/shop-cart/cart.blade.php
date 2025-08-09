@php
$carts = [
    [
        'img' => 'assets/images/shop/items/s1.jpg',
        'title' => 'T-shirt (M)',
        'price' => '$ 280',
        'qty' => '3',
        'total' => '$ 840',
        'style' => 'bg-white dark:bg-slate-900',
    ],
    [
        'img' => 'assets/images/shop/items/s2.jpg',
        'title' => 'Bag',
        'price' => '$ 160',
        'qty' => '1',
        'total' => '$ 160',
        'style' => 'bg-white dark:bg-slate-900 border-t border-gray-100 dark:border-gray-800',
    ],
    [
        'img' => 'assets/images/shop/items/s3.jpg',
        'title' => 'Watch (Men)',
        'price' => '$ 500',
        'qty' => '1',
        'total' => '$ 500',
        'style' => 'bg-white dark:bg-slate-900 border-t border-gray-100 dark:border-gray-800',
    ]
];
@endphp

@foreach ($carts as $item)
    <tr class="{{ $item['style'] }}">
        <td class="p-4"><a href=""><i class="mdi mdi-window-close text-red-600"></i></a></td>
        <td class="p-4">
            <span class="flex items-center">
                <img src="{{ asset($item['img']) }}" class="rounded shadow-sm dark:shadow-gray-800 w-12" alt="">
                <span class="ms-3">
                    <span class="block font-semibold">{{ $item['title'] }}</span>
                </span>
            </span>
        </td>
        <td class="p-4 text-center">{{ $item['price'] }}</td>
        <td class="p-4 text-center">
            <div class="qty-icons">
                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white minus">-</button>
                <input min="0" name="quantity" value="{{ $item['qty'] }}" type="number" class="h-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white pointer-events-none w-16 ps-4 quantity">
                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white plus">+</button>
            </div>
        </td>
        <td class="p-4  text-end">{{ $item['total'] }}</td>
    </tr>
@endforeach