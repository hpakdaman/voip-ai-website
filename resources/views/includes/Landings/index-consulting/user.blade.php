@php
$users = [
    [
        'icon' => 'codesandbox',
        'title' => 'User Friendly',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'icon' => 'send',
        'title' => 'Super Fast',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'icon' => 'star',
        'title' => 'Insightful Analytics',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'icon' => 'bookmark',
        'title' => 'Highly Rated',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ]
];
@endphp

@foreach ($users as $item)
    <div class="group px-6 py-8 hover:bg-white dark:hover:bg-slate-900 hover:shadow-sm dark:hover:shadow-gray-800 duration-500 ease-in-out border-b-[3px] border-transparent hover:border-indigo-600">
        <i data-feather="{{ $item['icon'] }}" class="size-10 stroke-1 text-indigo-600"></i>

        <div class="content mt-6">
            <a href="{{ url('/page-services') }}" class="title h5 text-xl font-semibold hover:text-indigo-600">{{ $item['title'] }}</a>
            <p class="text-slate-400 mt-4">{{ $item['desc'] }}</p>
            
            <div class="mt-5">
                <a href="{{ url('/page-services') }}" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Learn More <i class="uil uil-arrow-right"></i></a>
            </div>
        </div>
    </div>
@endforeach