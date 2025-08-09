@php
$forums = [
    [
        'img' => 'assets/images/client/01.jpg',
        'title' => 'Techwind Announcements',
        'desc' => 'This forum is for our announcements. Only our staff can create new topics.',
        'topics' => '5',
        'comments' => '10',
        'name' => 'Calvin Carlo',
        'date' => 'May 2025',
    ],
    [
        'img' => 'assets/images/client/03.jpg',
        'title' => 'Web Designing and Developing',
        'desc' => 'This forum is for our announcements. Only our staff can create new topics.',
        'topics' => '5',
        'comments' => '10',
        'name' => 'Alia Reddy',
        'date' => 'May 2025',
    ],
    [
        'img' => 'assets/images/client/02.jpg',
        'title' => 'Hosting and providers',
        'desc' => 'This forum is for our announcements. Only our staff can create new topics.',
        'topics' => '5',
        'comments' => '10',
        'name' => 'Cristino Murphy',
        'date' => 'May 2025',
    ],
    [
        'img' => 'assets/images/client/05.jpg',
        'title' => 'SEO starter guide',
        'desc' => 'This forum is for our announcements. Only our staff can create new topics.',
        'topics' => '5',
        'comments' => '10',
        'name' => 'Jennifer Ballance',
        'date' => 'May 2025',
    ],
    [
        'img' => 'assets/images/client/04.jpg',
        'title' => 'Troubleshooting and managing issues',
        'desc' => 'This forum is for our announcements. Only our staff can create new topics.',
        'topics' => '5',
        'comments' => '10',
        'name' => 'Toni Kovar',
        'date' => 'May 2025',
    ],
    [
        'img' => 'assets/images/client/06.jpg',
        'title' => 'Backup and restore',
        'desc' => 'This forum is for our announcements. Only our staff can create new topics.',
        'topics' => '5',
        'comments' => '10',
        'name' => 'Tara Arrington',
        'date' => 'May 2025',
    ],
    [
        'img' => 'assets/images/client/05.jpg',
        'title' => 'Errors and how to fix them',
        'desc' => 'This forum is for our announcements. Only our staff can create new topics.',
        'topics' => '5',
        'comments' => '10',
        'name' => 'Jennifer Ballance',
        'date' => 'May 2025',
    ],
    [
        'img' => 'assets/images/client/06.jpg',
        'title' => 'Template features & Services',
        'desc' => 'This forum is for our announcements. Only our staff can create new topics.',
        'topics' => '5',
        'comments' => '10',
        'name' => 'Tara Arrington',
        'date' => 'May 2025',
    ],
    [
        'img' => 'assets/images/client/06.jpg',
        'title' => 'Techwind includes the ability to create a better of sites by using the multisite feature.',
        'desc' => 'This forum is for our announcements. Only our staff can create new topics.',
        'topics' => '5',
        'comments' => '10',
        'name' => 'Tara Arrington',
        'date' => 'May 2025',
    ]
];
@endphp

@foreach ($forums as $item)
    <tr class="border-b border-gray-100 dark:border-slate-800">
        <th class="p-4">
            <div class="flex text-start">
                <i class="uil uil-comment text-indigo-600 text-2xl"></i>

                <div class="ms-2">
                    <a href="{{ url('/forums-topic') }}" class="hover:text-indigo-600 text-lg">{{ $item['title'] }}</a>
                    <p class="text-slate-400 font-normal">{{ $item['desc'] }}</p>
                </div>
            </div>
        </th>
        <td class="text-center p-4">{{ $item['topics'] }}</td>
        <td class="text-center p-4">{{ $item['comments'] }}</td>
        <td class="p-4">
            <div class="flex justify-end">
                <img src="{{ asset($item['img']) }}" class="h-10 rounded-full shadow-sm dark:shadow-slate-800" alt="">

                <div class="ms-2">
                    <a href="" class="hover:text-indigo-600 font-semibold">{{ $item['name'] }}</a>
                    <p class="text-slate-400 text-sm font-normal"><i class="uil uil-clock"></i> {{ $item['date'] }}</p>
                </div>
            </div>
        </td>
    </tr>
@endforeach