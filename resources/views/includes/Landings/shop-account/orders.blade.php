@php
$orders = [
    [
        'number' => '7107',
        'date' => '6st November 2025',
        'status' => 'Delivered',
        'price' => '$ 320',
        'items' => 'for 2items',
        'action' => 'View',
        'color' => 'text-green-600',
        'style' => 'bg-white dark:bg-slate-900 text-start',
    ],
    [
        'number' => '8007',
        'date' => '4th November 2025',
        'status' => 'Processing',
        'price' => '$ 800',
        'items' => 'for 1item',
        'action' => 'View',
        'color' => 'text-slate-400',
        'style' => 'bg-white dark:bg-slate-900 text-start border-t border-gray-100 dark:border-gray-800',
    ],
    [
        'number' => '8008',
        'date' => '1st November 2025',
        'status' => 'Canceled',
        'price' => '$ 800',
        'items' => 'for 1item',
        'action' => 'View',
        'color' => 'text-red-600',
        'style' => 'bg-white dark:bg-slate-900 text-start border-t border-gray-100 dark:border-gray-800',
    ]
];
@endphp

@foreach ($orders as $item)
    <tr class="{{ $item['style'] }}">
        <th class="px-2 py-3 text-start" scope="row">{{ $item['number'] }}</th>
        <td class="px-2 py-3 text-start">{{ $item['date'] }}</td>
        <td class="px-2 py-3 text-start {{ $item['color'] }}">{{ $item['status'] }}</td>
        <td class="px-2 py-3 text-start">{{ $item['price'] }} <span class="text-slate-400">{{ $item['items'] }}</span></td>
        <td class="px-2 py-3 text-start"><a href="javascript:void(0)" class="text-indigo-600">{{ $item['action'] }} <i class="uil uil-arrow-right"></i></a></td>
    </tr>
@endforeach