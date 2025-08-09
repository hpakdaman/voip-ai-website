@php
$categories = [
    [
        'icon' => 'uil uil-gitlab',
        'title' => 'UI / UX Design',
        'lesson' => '35 Lesson',
    ],
    [
        'icon' => 'uil uil-book-open',
        'title' => 'Web Development',
        'lesson' => '20 Lesson',
    ],
    [
        'icon' => 'uil uil-chart-pie-alt',
        'title' => 'Graphic Design',
        'lesson' => '35 Lesson',
    ],
    [
        'icon' => 'uil uil-feedback',
        'title' => 'PHP Development',
        'lesson' => '46 Lesson',
    ],
    [
        'icon' => 'uil uil-presentation-line',
        'title' => 'Data Science',
        'lesson' => '60 Lesson',
    ],
    [
        'icon' => 'uil uil-fire',
        'title' => 'Digital Marketing',
        'lesson' => '05 Lesson',
    ]
];
@endphp

@foreach ($categories as $item)
    <div class="tiny-slide">
        <div class="px-3 py-10 rounded-md shadow-sm dark:shadow-gray-800 group text-center bg-white dark:bg-slate-900 hover:bg-indigo-600/5 dark:hover:bg-indigo-600/5 duration-500 m-2">
            <div class="size-[84px] bg-indigo-600/5 group-hover:bg-indigo-600 text-indigo-600 group-hover:text-white rounded-full text-3xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800 duration-500 mx-auto">
                <i class="{{ $item['icon'] }}"></i>
            </div>

            <div class="content mt-6">
                <a href="" class="title h5 text-lg font-medium hover:text-indigo-600">{{ $item['title'] }}</a>
                <p class="text-slate-400 mt-3">{{ $item['lesson'] }}</p>
            </div>
        </div>
    </div>
@endforeach