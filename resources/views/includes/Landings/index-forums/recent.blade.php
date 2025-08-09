@php
$recents = [
    [
        'img' => 'assets/images/blog/06.jpg',
        'title' => 'Consultant Business',
        'date' => '6th Sep 2025',
        'style' => 'flex items-center mt-8',
    ],
    [
        'img' => 'assets/images/blog/07.jpg',
        'title' => 'Grow Your Business',
        'date' => '6th Sep 2025',
        'style' => 'flex items-center mt-4',
    ],
    [
        'img' => 'assets/images/blog/08.jpg',
        'title' => 'Look On The Glorious Balance',
        'date' => '6th Sep 2025',
        'style' => 'flex items-center mt-4',
    ]
];
@endphp

@foreach ($recents as $item)
    <div class="{{ $item['style'] }}">
        <img src="{{ asset($item['img']) }}" class="h-16 rounded-md shadow-sm dark:shadow-gray-800" alt="">

        <div class="ms-3">
            <a href="" class="font-semibold hover:text-indigo-600">{{ $item['title'] }}</a>
            <p class="text-sm text-slate-400">{{ $item['date'] }}</p>
        </div>
    </div>
@endforeach