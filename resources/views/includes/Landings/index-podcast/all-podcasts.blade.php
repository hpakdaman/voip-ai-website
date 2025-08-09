@php
$podcasts = [
    [
        'img' => 'assets/images/podcast/p1.jpg',
        'img1' => 'assets/images/client/01.jpg',
        'audio' => 'assets/images/audio.mp3',
        'name' => 'Calvin Carlo',
        'subscribe' => '4k Subscribe',
        'title' => 'Design your apps in your own way',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ],
    [
        'img' => 'assets/images/podcast/p2.jpg',
        'img1' => 'assets/images/client/01.jpg',
        'audio' => 'assets/images/audio.mp3',
        'name' => 'Calvin Carlo',
        'subscribe' => '4k Subscribe',
        'title' => 'How apps is changing the IT world',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ],
    [
        'img' => 'assets/images/podcast/p3.jpg',
        'img1' => 'assets/images/client/01.jpg',
        'audio' => 'assets/images/audio.mp3',
        'name' => 'Calvin Carlo',
        'subscribe' => '4k Subscribe',
        'title' => 'Smartest Applications for Business',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ],
    [
        'img' => 'assets/images/podcast/p4.jpg',
        'img1' => 'assets/images/client/01.jpg',
        'audio' => 'assets/images/audio.mp3',
        'name' => 'Calvin Carlo',
        'subscribe' => '4k Subscribe',
        'title' => 'Design your apps in your own way',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ],
    [
        'img' => 'assets/images/podcast/p5.jpg',
        'img1' => 'assets/images/client/01.jpg',
        'audio' => 'assets/images/audio.mp3',
        'name' => 'Calvin Carlo',
        'subscribe' => '4k Subscribe',
        'title' => 'How apps is changing the IT world',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ],
    [
        'img' => 'assets/images/podcast/p6.jpg',
        'img1' => 'assets/images/client/01.jpg',
        'audio' => 'assets/images/audio.mp3',
        'name' => 'Calvin Carlo',
        'subscribe' => '4k Subscribe',
        'title' => 'martest Applications for Business',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ]
];
@endphp

@foreach ($podcasts as $item)
    <div class="tiny-slide">
        <div class="group relative rounded-md shadow-sm dark:shadow-gray-800 overflow-hidden m-3">
            <div class="relative">
                <img src="{{ asset($item['img']) }}" alt="">

                <a href="#!" data-type="youtube" data-id="S_CGed6E610" class="lightbox size-8 inline-flex items-center justify-center rounded-full bg-white border border-white text-indigo-600 absolute top-3 end-3"><i class="mdi mdi-play"></i></a>

                <div class="absolute start-0 bottom-0 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
                    <div class="pb-4 ps-4 flex items-center">
                        <img src="{{ asset($item['img1']) }}" class="size-10 rounded-full shadow-md dark:shadow-gray-800 mx-auto" alt="">
                        <div class="ms-3">
                            <a href="" class="font-semibold text-white block">{{ $item['name'] }}</a>
                            <span class="text-white/70 text-sm">{{ $item['subscribe'] }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content p-6">
                <audio controls class="block w-full max-w-md mx-auto mb-3">
                    <source src="{{ asset($item['audio']) }}" type="audio/mpeg">
                </audio>

                <a href="{{ url('/blog-youtube-post') }}" class="title h5 text-lg font-semibold hover:text-indigo-600 duration-500 ease-in-out">{{ $item['title'] }}</a>
                <p class="text-slate-400 mt-3">{{ $item['desc'] }}</p>
                
                <div class="mt-4">
                    <a href="{{ url('/blog-youtube-post') }}" class="relative inline-block tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Watch Now <i class="uil uil-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
@endforeach