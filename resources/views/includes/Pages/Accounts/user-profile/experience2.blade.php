@php
$experiences = [
    [
        'img' => 'assets/images/client/circle-logo.png',
        'title' => 'Senior Web Developer',
        'experience' => '3 Years Experience',
        'name' => 'CircleCi',
        'location' => '@London, UK',
    ],
    [
        'img' => 'assets/images/client/facebook-logo-2019.png',
        'title' => 'Web Designer',
        'experience' => '2 Years Experience',
        'name' => 'Facebook',
        'location' => '@Washington D.C, USA',
    ],
    [
        'img' => 'assets/images/client/spotify.png',
        'title' => 'UI Designer',
        'experience' => '2 Years Experience',
        'name' => 'Spotify',
        'location' => '@Perth, Australia',
    ]
];
@endphp

@foreach ($experiences as $item)
    <div class="flex duration-500 hover:scale-105 shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-4 rounded-md bg-white dark:bg-slate-900 mt-6">
        <img src="{{ asset($item['img']) }}" class="size-16 p-4 bg-slate-50 dark:bg-slate-800 shadow-sm dark:shadow-gray-800 rounded-md" alt="">
        <div class="flex-1 content ms-4">
            <h4 class="text-lg text-medium">{{ $item['title'] }}</h4>
            <p class="text-slate-400 mb-0">{{ $item['experience'] }}</p>
            <p class="text-slate-400 mb-0"><a href="" class="text-indigo-600">{{ $item['name'] }}</a> {{ $item['location'] }}</p>    
        </div>
    </div>
@endforeach