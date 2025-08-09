@php
$logos = [
    [
        'img' => 'assets/images/client/shree-logo.png',
    ],
    [
        'img' => 'assets/images/client/skype.png',
    ],
    [
        'img' => 'assets/images/client/snapchat.png',
    ],
    [
        'img' => 'assets/images/client/spotify.png',
    ],
    [
        'img' => 'assets/images/client/telegram.png',
    ],
    [
        'img' => 'assets/images/client/whatsapp.png',
    ],
    [
        'img' => 'assets/images/client/android.png',
    ],
    [
        'img' => 'assets/images/client/facebook-logo-2019.png',
    ],
    [
        'img' => 'assets/images/client/linkedin.png',
    ],
    [
        'img' => 'assets/images/client/google-logo.png',
    ]
];
@endphp

<ul class="circles absolute inset-0 h-full w-full overflow-hidden p-0 mb-0">

    @foreach ($logos as $item)
        <li class="brand-img">
            <img src="{{ asset($item['img']) }}" class="size-9" alt="">
        </li>
    @endforeach

</ul>