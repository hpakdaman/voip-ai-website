@php
$topics = [
    [
        'title' => 'Changelog',
        'name' => 'Calvin Carlo',
        'comments' => '3',
    ],
    [
        'title' => 'Documentation',
        'name' => 'Alia Reddy',
        'comments' => '5',
    ],
    [
        'title' => 'Components',
        'name' => 'Cristino Murphy',
        'comments' => '2',
    ]
];
@endphp

@foreach ($topics as $item)
    <tr class="border-b border-gray-100 dark:border-slate-800">
        <th class="p-4">
            <div class="flex text-start">
                <i class="uil uil-comment text-indigo-600 text-2xl"></i>

                <div class="ms-2">
                    <a href="{{ url('/forums-comments') }}" class="hover:text-indigo-600 text-lg">{{ $item['title'] }}</a>
                    <p class="text-slate-400 font-normal">Write by: <a href="" class="text-indigo-600">{{ $item['name'] }}</a></p>
                </div>
            </div>
        </th>
        <td class="text-end p-4">{{ $item['comments'] }}</td>
    </tr>
@endforeach