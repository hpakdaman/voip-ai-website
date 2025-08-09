@php
$companies = [
    [
        'id' => 1,
        'img' => 'assets/images/client/circle-logo.png',
        'title' => 'CircleCI',
        'location' => 'U.S.A.',
    ],
    [
        'id' => 2,
        'img' => 'assets/images/client/android.png',
        'title' => 'Android',
        'location' => 'Australia',
    ],
    [
        'id' => 3,
        'img' => 'assets/images/client/facebook-logo-2019.png',
        'title' => 'Facebook',
        'location' => 'America',
    ],
    [
        'id' => 4,
        'img' => 'assets/images/client/google-logo.png',
        'title' => 'Google',
        'location' => 'Canada',
    ],
    [
        'id' => 5,
        'img' => 'assets/images/client/lenovo-logo.png',
        'title' => 'Lenovo',
        'location' => 'India',
    ],
    [
        'id' => 6,
        'img' => 'assets/images/client/linkedin.png',
        'title' => 'Linkedin',
        'location' => 'Greece',
    ],
    [
        'id' => 7,
        'img' => 'assets/images/client/shree-logo.png',
        'title' => 'Shreethemes',
        'location' => 'Germany',
    ],
    [
        'id' => 8,
        'img' => 'assets/images/client/skype.png',
        'title' => 'Skype',
        'location' => 'Australia',
    ],
    [
        'id' => 9,
        'img' => 'assets/images/client/snapchat.png',
        'title' => 'Snapchat',
        'location' => 'America',
    ],
    [
        'id' => 10,
        'img' => 'assets/images/client/spotify.png',
        'title' => 'Spotify',
        'location' => 'Canada',
    ],
    [
        'id' => 11,
        'img' => 'assets/images/client/telegram.png',
        'title' => 'Telegram',
        'location' => 'India',
    ],
    [
        'id' => 12,
        'img' => 'assets/images/client/whatsapp.png',
        'title' => 'Whatsapp',
        'location' => 'India',
    ]
];
@endphp

@foreach ($companies as $item)
    <a href="{{ route('page-job-company-detail', ['title' => Str::slug($item['title'])]) }}" class="group bg-white dark:bg-slate-900 p-6 rounded shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 border-4 border-white dark:border-slate-900 hover:border-b-indigo-600 dark:hover:border-b-indigo-600 text-center duration-500 ease-in-out">
        <img src="{{ asset($item['img']) }}" class="size-16 mx-auto p-3 rounded-full bg-gray-50 dark:bg-slate-800 shadow-md dark:shadow-gray-800" alt="">

        <div class="content mt-3">
            <span class="text-lg font-semibold group-hover:text-indigo-600 duration-500 block">{{ $item['title'] }}</span>

            <span class="text-base text-slate-400 block"><i class="uil uil-map-marker text-indigo-600 me-1"></i> {{ $item['location'] }}</span>
        </div>
    </a>
@endforeach