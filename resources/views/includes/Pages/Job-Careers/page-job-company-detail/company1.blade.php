@php
$companys = [
    [
        'icon' => 'monitor',
        'title' => 'Senior Web Developer',
        'location' => 'London, UK',
    ],
    [
        'icon' => 'airplay',
        'title' => 'Front-End Developer',
        'location' => 'Brasilia, Brazil',
    ],
    [
        'icon' => 'cpu',
        'title' => 'Back-End Developer',
        'location' => 'Ottawa, Canada',
    ],
    [
        'icon' => 'hexagon',
        'title' => 'UI Designer',
        'location' => 'Beijing, China',
    ],
    [
        'icon' => 'figma',
        'title' => 'UX Designer',
        'location' => 'Bogota, Colombia',
    ],
    [
        'icon' => 'crop',
        'title' => 'Php Developer',
        'location' => 'Havana, Cuba',
    ]
];
@endphp

@foreach ($companys as $item)
    <a href="{{ url('/page-job-detail') }}">
        <div class="group flex  bg-white dark:bg-slate-900 duration-500 hover:scale-105 shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md">
            <div class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full me-3">
                <i data-feather="{{ $item['icon'] }}" class="size-5 rotate-45"></i>
            </div>
            <div class="content">
                <h4 class="text-lg font-medium group-hover:text-indigo-600 duration-500 ease-in-out">{{ $item['title'] }}</h4>
                <p class="text-slate-400">{{ $item['location'] }}</p>    
            </div>
        </div>
    </a>
@endforeach