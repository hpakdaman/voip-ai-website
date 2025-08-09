@php
$works = [
    [
        'icon' => 'uil uil-airplay',
        'title' => 'UX / UI Design',
        'desc' => "If the distribution of letters and 'words' is random, the reader will not be distracted from making.",
        'style' => "group relative hover:bg-white dark:hover:bg-slate-900 hover:shadow-sm dark:hover:shadow-gray-800 p-6 duration-500 rounded-xl overflow-hidden text-center h-fit",
    ],
    [
        'icon' => 'uil uil-shutter',
        'title' => 'IOS App Designer',
        'desc' => "If the distribution of letters and 'words' is random, the reader will not be distracted from making.",
        'style' => "group relative hover:bg-white dark:hover:bg-slate-900 hover:shadow-sm dark:hover:shadow-gray-800 p-6 duration-500 rounded-xl overflow-hidden text-center h-fit md:mt-16",
    ],
    [
        'icon' => 'uil uil-cog',
        'title' => 'Web Security',
        'desc' => "If the distribution of letters and 'words' is random, the reader will not be distracted from making.",
        'style' => "group relative hover:bg-white dark:hover:bg-slate-900 hover:shadow-sm dark:hover:shadow-gray-800 p-6 duration-500 rounded-xl overflow-hidden text-center h-fit",
    ],
    [
        'icon' => 'uil uil-comment',
        'title' => '24/7 Support',
        'desc' => "If the distribution of letters and 'words' is random, the reader will not be distracted from making.",
        'style' => "group relative hover:bg-white dark:hover:bg-slate-900 hover:shadow-sm dark:hover:shadow-gray-800 p-6 duration-500 rounded-xl overflow-hidden text-center h-fit md:mt-16",
    ]
];
@endphp

@foreach ($works as $item)
    <div class="{{ $item['style'] }}">
        <div class="relative overflow-hidden text-transparent -m-3">
            <i data-feather="hexagon" class="size-28 fill-indigo-600/5 dark:fill-white/5 mx-auto rotate-[30deg]"></i>
            <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-indigo-600 dark:text-white rounded-xl duration-500 text-3xl flex align-middle justify-center items-center">
                <i class="{{ $item['icon'] }}"></i>
            </div>
        </div>

        <div class="mt-6">
            <a href="" class="text-xl font-medium hover:text-indigo-600 duration-500 ease-in-out">{{ $item['title'] }}</a>
            <p class="text-slate-400 duration-500 mt-3">{{ $item['desc'] }}</p>
        </div>
    </div>
@endforeach