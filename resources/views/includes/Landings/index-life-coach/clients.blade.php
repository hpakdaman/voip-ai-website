@php
$clients = [
    [
        'img' => 'assets/images/coach/conversation.png',
        'img1' => 'assets/images/coach/one-one.jpg',
        'title' => 'One to One Coaching',
        'desc' => "After you decide to start training we will make sure you get the best fitness program. Our sport experts and latest sports equipment are the winning combination.",
    ],
    [
        'img' => 'assets/images/coach/programmer.png',
        'img1' => 'assets/images/coach/executive.jpg',
        'title' => 'Executive Coaching',
        'desc' => "After you decide to start training we will make sure you get the best fitness program. Our sport experts and latest sports equipment are the winning combination.",
    ],
    [
        'img' => 'assets/images/coach/group.png',
        'img1' => 'assets/images/coach/group.jpg',
        'title' => 'Group Coaching',
        'desc' => "After you decide to start training we will make sure you get the best fitness program. Our sport experts and latest sports equipment are the winning combination.",
    ]
];
@endphp

@foreach ($clients as $item)
    <div class="group relative overflow-hidden p-6 rounded-lg shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 bg-white dark:bg-slate-900 text-center duration-500">
        <img src="{{ asset($item['img']) }}" class="size-16 mx-auto" alt="">

        <div class="content mt-7">
            <h2 class="title text-xl font-semibold">{{ $item['title'] }}</h2>
            <p class="text-slate-400 mt-3">{{ $item['desc'] }}</p>
        </div>

        <div class="opacity-0 group-hover:opacity-100 duration-500">
            <div class="absolute inset-0">
                <img src="{{ asset($item['img1']) }}" alt="">
                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-slate-900"></div>
            </div>

            <div class="absolute bottom-0 start-0 end-0 mb-6">
                <a href="" class="text-white text-xl font-bold">{{ $item['title'] }}</a>
            </div>
        </div>
    </div>
@endforeach