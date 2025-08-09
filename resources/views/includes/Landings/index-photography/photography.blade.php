@php
$photographys = [
    [
        'img' => 'assets/images/photography/01.jpg',
        'name' => 'Jack Jeffrey',
        'style' => 'relative overflow-hidden h-fit',
    ],
    [
        'img' => 'assets/images/photography/02.jpg',
        'name' => 'Portfolio',
        'style' => 'relative overflow-hidden h-fit lg:mt-16',
    ],
    [
        'img' => 'assets/images/photography/03.jpg',
        'name' => 'Contact',
        'style' => 'relative overflow-hidden h-fit',
    ],
    [
        'img' => 'assets/images/photography/04.jpg',
        'name' => 'About Me',
        'style' => 'relative overflow-hidden h-fit lg:mt-16',
    ]
];
@endphp

@foreach ($photographys as $item)
    <div class="{{ $item['style'] }}">
        <img src="{{ asset($item['img']) }}" class="rounded-md" alt="">
        <div class="absolute inset-0 h-full w-full bg-gradient-to-t to-transparent via-white/80 dark:via-slate-900/80 from-white dark:from-slate-900"></div>

        <div class="absolute text-center p-6 bottom-0 start-0 end-0">
            <a href="{{ url('/photography-about') }}" class="font-semibold text-lg">{{ $item['name'] }} <i class="uil uil-arrow-up-right"></i></a>
        </div>
    </div>
@endforeach