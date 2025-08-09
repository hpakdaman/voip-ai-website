@php
$reviews = [
    [
        'img' => 'assets/images/client/01.jpg',
        'name' => 'Calvin Carlo',
        'time' => '6th Sep 2025 at 01:25 pm',
        'desc' => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour",
    ],
    [
        'img' => 'assets/images/client/02.jpg',
        'name' => 'Calvin Carlo',
        'time' => '6th Sep 2025 at 01:25 pm',
        'desc' => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour",
    ],
    [
        'img' => 'assets/images/client/03.jpg',
        'name' => 'Calvin Carlo',
        'time' => '6th Sep 2025 at 01:25 pm',
        'desc' => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour",
    ],
    [
        'img' => 'assets/images/client/04.jpg',
        'name' => 'Calvin Carlo',
        'time' => '6th Sep 2025 at 01:25 pm',
        'desc' => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour",
    ]
];
@endphp

@foreach ($reviews as $item)
    <div class="mt-8">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <img src="{{ asset($item['img']) }}" class="size-11 rounded-full shadow-sm" alt="">

                <div class="ms-3 flex-1">
                    <a href="" class="text-lg font-semibold hover:text-indigo-600 duration-500">{{ $item['name'] }}</a>
                    <p class="text-sm text-slate-400">{{ $item['time'] }}</p>
                </div>
            </div>

            <a href="" class="text-slate-400 hover:text-indigo-600 duration-500 ms-5"><i class="mdi mdi-reply"></i> Reply</a>
        </div>
        <div class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow-sm dark:shadow-gray-800 mt-6">
            <p class="text-slate-400 italic">" {{ $item['desc'] }} "</p>
        </div>
    </div>
@endforeach