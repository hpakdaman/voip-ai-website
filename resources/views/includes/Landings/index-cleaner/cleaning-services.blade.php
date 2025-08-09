@php
$services = [
    [
        'icon' => 'codesandbox',
        'title' => 'Latest Equipments',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
        'number' => "1",
    ],
    [
        'icon' => 'dollar-sign',
        'title' => 'Affordable Service',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
        'number' => "2",
    ],
    [
        'icon' => 'users',
        'title' => 'Expert Team',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
        'number' => "3",
    ],
    [
        'icon' => 'thumbs-up',
        'title' => 'Quality Work',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
        'number' => "4",
    ]
];
@endphp

@foreach ($services as $item)
    <div class="group relative overflow-hidden px-6 py-10 shadow-sm hover:shadow-md dark:shadow-gray-800 dark:hover:shadow-gray-700 duration-500 rounded-2xl bg-white dark:bg-slate-900">
        <i data-feather="{{ $item['icon'] }}" class="size-12 stroke-1 text-indigo-600"></i>

        <div class="content mt-7">
            <a href="{{ url('/page-services') }}" class="title h5 text-lg font-medium hover:text-indigo-600">{{ $item['title'] }}</a>
            <p class="text-slate-400 mt-3">{{ $item['desc'] }}</p>
            
            <div class="mt-5">
                <a href="{{ url('/page-services') }}" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
            </div>
        </div>

        <span class="absolute bottom-0 end-0 text-9xl font-bold opacity-[0.03] group-hover:opacity-10 duration-500">{{ $item['number'] }}</span>
    </div>
@endforeach