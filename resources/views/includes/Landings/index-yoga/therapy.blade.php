@php
$therapys = [
    [
        'img' => 'assets/images/yoga/sound.jpg',
        'icon' => 'headphones',
        'title' => 'Sound Therapy',
        'desc' => "We develop digital strategies, products and services appreciated by clients.",
    ],
    [
        'img' => 'assets/images/yoga/maditation.jpg',
        'icon' => 'git-merge',
        'title' => 'Meditation',
        'desc' => "We develop digital strategies, products and services appreciated by clients.",
    ],
    [
        'img' => 'assets/images/yoga/relaxing.jpg',
        'icon' => 'sun',
        'title' => 'Mindfullness',
        'desc' => "We develop digital strategies, products and services appreciated by clients.",
    ]
];
@endphp

@foreach ($therapys as $item)
    <div class="group rounded-md shadow-md dark:shadow-gray-800 relative overflow-hidden">
        <img src="{{ asset($item['img']) }}" class="" alt="">
        <div class="absolute inset-0 bg-gradient-to-t to-transparent via-slate-900/60 group-hover:via-slate-900/40 from-slate-900 top-3/4 group-hover:top-0 duration-500"></div>

        <div class="absolute bottom-0 mx-auto start-0 end-0 group-hover:bottom-0 duration-500 px-6 pb-6 text-center">
            <i data-feather="{{ $item['icon'] }}" class="size-10 text-white opacity-0 group-hover:opacity-100 duration-500 mx-auto"></i>

            <div class="mt-6">
                <a href="" class="text-xl font-semibold text-white duration-500">{{ $item['title'] }}</a>

                <p class="text-white/50 hidden group-hover:block duration-500 mt-4">{{ $item['desc'] }}</p>
            </div>
        </div>
    </div>
@endforeach