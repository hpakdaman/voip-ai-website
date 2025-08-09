@php
$days = [
    [
        'title' => 'Time Table',
        'class' => 'text-center border border-gray-100 dark:border-gray-800 py-6 min-w-[120px]',
    ],
    [
        'title' => 'Monday',
        'class' => 'text-center border border-gray-100 dark:border-gray-800 py-6 min-w-[200px]',
    ],
    [
        'title' => 'Tuesday',
        'class' => 'text-center border border-gray-100 dark:border-gray-800 py-6 min-w-[200px]',
    ],
    [
        'title' => 'Wednesday',
        'class' => 'text-center border border-gray-100 dark:border-gray-800 py-6 min-w-[200px]',
    ],
    [
        'title' => 'Thursday',
        'class' => 'text-center border border-gray-100 dark:border-gray-800 py-6 min-w-[200px]',
    ],
    [
        'title' => 'Friday',
        'class' => 'text-center border border-gray-100 dark:border-gray-800 py-6 min-w-[200px]',
    ],
    [
        'title' => 'Saturday',
        'class' => 'text-center border border-gray-100 dark:border-gray-800 py-6 min-w-[200px]',
    ],
    [
        'title' => 'Sunday',
        'class' => 'text-center border border-gray-100 dark:border-gray-800 py-6 min-w-[200px]',
    ]
];
@endphp

<tr>

    @foreach ($days as $item)
        <th class="{{ $item['class'] }}">{{ $item['title'] }}</th>
    @endforeach

</tr>