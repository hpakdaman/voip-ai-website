@php
$grids = [
    [
        'id' => 1,
        'img' => 'assets/images/client/facebook-logo-2019.png',
        'title' => 'Software Engineering',
        'name' => "Facebook Ltd.",
        'days' => "Posted 3 Days ago",
        'time' => "Full Time",
        'price' => "$950 - $1100/mo",
        'location' => "Australia",
    ],
    [
        'id' => 2,
        'img' => 'assets/images/client/google-logo.png',
        'title' => 'Web Developer',
        'name' => "Google Ltd.",
        'days' => "Posted 3 Days ago",
        'time' => "Remote",
        'price' => "$2500 - $2600/mo",
        'location' => "America",
    ],
    [
        'id' => 3,
        'img' => 'assets/images/client/linkedin.png',
        'title' => 'UX/UI Designer',
        'name' => "Linkedin Ltd.",
        'days' => "Posted 3 Days ago",
        'time' => "Freelance",
        'price' => "$3500 - $3600/mo",
        'location' => "Canada",
    ],
    [
        'id' => 4,
        'img' => 'assets/images/client/skype.png',
        'title' => 'Human Resource(HR)',
        'name' => "Skype Ltd.",
        'days' => "Posted 3 Days ago",
        'time' => "Part Time",
        'price' => "$2000 - $2500/mo",
        'location' => "UK",
    ],
    [
        'id' => 5,
        'img' => 'assets/images/client/spotify.png',
        'title' => 'Web Designer',
        'name' => "Spotify Ltd.",
        'days' => "Posted 3 Days ago",
        'time' => "Full Time",
        'price' => "$1500 - $1600/mo",
        'location' => "China",
    ],
    [
        'id' => 6,
        'img' => 'assets/images/client/telegram.png',
        'title' => 'Graphic Designer',
        'name' => "Telegram Ltd.",
        'days' => "Posted 3 Days ago",
        'time' => "Part Time",
        'price' => "$500 - $600/mo",
        'location' => "India",
    ],
    [
        'id' => 7,
        'img' => 'assets/images/client/circle-logo.png',
        'title' => 'Senior Web Developer',
        'name' => "Circle CI Ltd.",
        'days' => "Posted 3 Days ago",
        'time' => "Full Time",
        'price' => "$950 - $1100/mo",
        'location' => "Australia",
    ],
    [
        'id' => 8,
        'img' => 'assets/images/client/lenovo-logo.png',
        'title' => 'Front-End Developer',
        'name' => "Lenovo Ltd.",
        'days' => "Posted 3 Days ago",
        'time' => "Remote",
        'price' => "$2500 - $2600/mo",
        'location' => "America",
    ],
    [
        'id' => 9,
        'img' => 'assets/images/client/shree-logo.png',
        'title' => 'Back-End Developer',
        'name' => "Shreethemes Ltd.",
        'days' => "Posted 3 Days ago",
        'time' => "Freelance",
        'price' => "$3500 - $3600/mo",
        'location' => "Canada",
    ],
    [
        'id' => 10,
        'img' => 'assets/images/client/snapchat.png',
        'title' => 'Data Entry',
        'name' => "Snapchat Ltd.",
        'days' => "Posted 3 Days ago",
        'time' => "Part Time",
        'price' => "$2000 - $2500/mo",
        'location' => "UK",
    ],
    [
        'id' => 11,
        'img' => 'assets/images/client/android.png',
        'title' => 'Android Developer',
        'name' => "Android Ltd.",
        'days' => "Posted 3 Days ago",
        'time' => "Full Time",
        'price' => "$1500 - $1600/mo",
        'location' => "China",
    ],
    [
        'id' => 12,
        'img' => 'assets/images/client/shree-logo.png',
        'title' => 'Sketch Designer',
        'name' => "Shreethemes Ltd.",
        'days' => "Posted 3 Days ago",
        'time' => "Part Time",
        'price' => "$500 - $600/mo",
        'location' => "India",
    ]
];
@endphp

@foreach ($grids as $item)
    <div class="rounded-md shadow-sm dark:shadow-gray-800">
        <div class="p-6">
            <a href="{{ route('page-job-detail', ['title' => Str::slug($item['title'])]) }}" class="title h5 text-lg font-semibold hover:text-indigo-600">{{ $item['title'] }}</a>
            <p class="text-slate-400 mt-2"><i class="uil uil-clock text-indigo-600"></i> {{ $item['days'] }}</p>

            <div class="flex justify-between items-center mt-4">
                <span class="bg-indigo-600/5 text-indigo-600 text-xs font-bold px-2.5 py-0.5 rounded h-5">{{ $item['time'] }}</span>

                <p class="text-slate-400"><i class="uil uil-usd-circle text-indigo-600"></i> {{ $item['price'] }}</p>
            </div>
        </div>

        <div class="flex items-center p-6 border-t border-gray-100 dark:border-gray-800">
            <img src="{{ asset($item['img']) }}" class="size-12 shadow-md dark:shadow-gray-800 rounded-md p-2 bg-white dark:bg-slate-900" alt="">

            <div class="ms-3">
                <h6 class="mb-0 font-semibold text-base">{{ $item['name'] }}</h6>
                <span class="text-slate-400 text-sm">{{ $item['location'] }}</span>
            </div>
        </div>
    </div>
@endforeach