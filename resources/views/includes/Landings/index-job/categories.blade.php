@php
$categories = [
    [
        'icon' => 'uil uil-gitlab',
        'title' => 'Business',
        'title1' => 'Development',
        'jobs' => '74 Jobs',
    ],
    [
        'icon' => 'uil uil-book-open',
        'title' => 'Marketing &',
        'title1' => 'Communication',
        'jobs' => '20 Jobs',
    ],
    [
        'icon' => 'uil uil-chart-pie-alt',
        'title' => 'Project',
        'title1' => 'Management',
        'jobs' => '35 Jobs',
    ],
    [
        'icon' => 'uil uil-feedback',
        'title' => 'Customer',
        'title1' => 'Service',
        'jobs' => '46 Jobs',
    ],
    [
        'icon' => 'uil uil-presentation-line',
        'title' => 'Software',
        'title1' => 'Engineering',
        'jobs' => '60 Jobs',
    ],
    [
        'icon' => 'uil uil-fire',
        'title' => 'Human',
        'title1' => 'Resources',
        'jobs' => '05 Jobs',
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
                <a href="{{ url('/page-job-grid') }}" class="title h5 text-lg font-medium hover:text-indigo-600">{{ $item['title'] }} <br> {{ $item['title1'] }}</a>
                <p class="text-slate-400 mt-3">{{ $item['jobs'] }}</p>
            </div>
        </div>
    </div>
@endforeach