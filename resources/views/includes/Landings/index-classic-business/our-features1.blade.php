@php
$features = [
    [
        'icon' => 'box',
        'title' => 'Web Design',
        'desc' => "If the distribution of letters and 'words' is random, the reader will not be distracted from making.",
        'style' => "group rounded shadow-lg relative p-6 overflow-hidden h-fit",
    ],
    [
        'icon' => 'camera',
        'title' => 'Search Engine Optimization',
        'desc' => "If the distribution of letters and 'words' is random, the reader will not be distracted from making.",
        'style' => "group rounded shadow-lg relative p-6 overflow-hidden h-fit lg:mt-16",
    ],
    [
        'icon' => 'bell',
        'title' => 'Social Media',
        'desc' => "If the distribution of letters and 'words' is random, the reader will not be distracted from making.",
        'style' => "group rounded shadow-lg relative p-6 overflow-hidden h-fit",
    ],
    [
        'icon' => 'monitor',
        'title' => 'Design & Branding',
        'desc' => "If the distribution of letters and 'words' is random, the reader will not be distracted from making.",
        'style' => "group rounded shadow-lg relative p-6 overflow-hidden h-fit lg:mt-16",
    ]
];
@endphp

@foreach ($features as $item)
    <div class="{{ $item['style'] }}">
        <div class="flex items-center justify-center size-14 -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full me-3">
            <i data-feather="{{ $item['icon'] }}" class="size-6 rotate-45"></i>
        </div>

        <div class="content mt-6 relative z-1">
            <a href="{{ url('/page-services') }}" class="title h5 text-lg font-medium hover:text-indigo-600">{{ $item['title'] }}</a>
            <p class="text-slate-400 mt-3">{{ $item['desc'] }}</p>

            <div class="mt-6">
                <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
            </div>
        </div>

        <div class="absolute bottom-0 -end-16">
            <i data-feather="{{ $item['icon'] }}" class="size-48 text-indigo-600 opacity-[0.03] dark:opacity-[0.04] group-hover:opacity-10 duration-500"></i>
        </div>
    </div>
@endforeach