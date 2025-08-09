@php
$contents = [
    [
        'icon' => 'uil uil-flip-h',
        'title' => 'Plagiarism checker',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'icon' => 'uil uil-envelope-upload',
        'title' => 'Content Generator',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'icon' => 'uil uil-star',
        'title' => 'Search Engine Optimization',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'icon' => 'uil uil-bookmark',
        'title' => 'Digital name generator',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ]
];
@endphp

@foreach ($contents as $item)
    <div class="px-6 py-10 shadow-sm hover:shadow-md dark:shadow-gray-800 dark:hover:shadow-gray-700 duration-500 rounded-lg hover:bg-white hover:dark:bg-slate-900">
        <i class="{{ $item['icon'] }} text-4xl bg-gradient-to-tl to-indigo-600 from-red-600 text-transparent bg-clip-text"></i>

        <div class="content mt-7">
            <a href="{{ url('/page-services') }}" class="title h5 text-lg font-medium hover:text-indigo-600">{{ $item['title'] }}</a>
            <p class="text-slate-400 mt-3">{{ $item['desc'] }}</p>
            
            <div class="mt-5">
                <a href="{{ url('/page-services') }}" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
            </div>
        </div>
    </div>
@endforeach