@php
$items = [
    [
        'number' => '1',
        'title' => 'Apple MacBook Pro 17"',
        'qty' => '1',
        'rate' => '280',
        'total' => '$ 280',
        'style' => 'bg-white dark:bg-slate-900',
    ],
    [
        'number' => '2',
        'title' => 'Microsoft Surface Pro',
        'qty' => '1',
        'rate' => '140',
        'total' => '$ 140',
        'style' => 'bg-white dark:bg-slate-900 border-t border-gray-100 dark:border-gray-800',
    ],
    [
        'number' => '3',
        'title' => 'Magic Mouse 2',
        'qty' => '2',
        'rate' => '50',
        'total' => '$ 100',
        'style' => 'bg-white dark:bg-slate-900 border-t border-gray-100 dark:border-gray-800',
    ],
];
@endphp

@foreach ($items as $item)
    <tr class="{{ $item['style'] }}">
        <td class="text-center px-6 py-4">
            {{ $item['number'] }}
        </td>
        <th scope="row" class="text-start px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
            {{ $item['title'] }}
        </th>
        <td class="text-center px-6 py-4">
            {{ $item['qty'] }}
        </td>
        <td class="text-center px-6 py-4">
            {{ $item['rate'] }}
        </td>
        <td class="text-end px-6 py-4">
            {{ $item['total'] }}
        </td>
    </tr>
@endforeach