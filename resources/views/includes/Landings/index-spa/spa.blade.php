@php
$spas = [
    [
        'img' => 'assets/images/spa/1.jpg',
        'name' => 'Spa',
        'title' => 'Relaxation',
    ],
    [
        'img' => 'assets/images/spa/2.jpg',
        'name' => 'Cosmatic',
        'title' => 'Essential Balance',
    ],
    [
        'img' => 'assets/images/spa/3.jpg',
        'name' => 'Massage',
        'title' => 'Natural Health',
    ]
];
@endphp

@foreach ($spas as $item)
    <div class="relative overflow-hidden h-fit">
        <img src="{{ asset($item['img']) }}" class="" alt="">
        <div class="absolute inset-0 h-full w-full bg-gradient-to-t to-transparent via-slate-900/50 from-slate-900 "></div>

        <div class="absolute p-6 bottom-0 start-0 end-0">
            <h6 class="text-white/70 mb-1">{{ $item['name'] }}</h6>
            <a href="" class="font-semibold !font-ebgaramond text-white uppercase tracking-wide">{{ $item['title'] }} <i class="uil uil-arrow-up-right ms-1"></i></a>
        </div>
    </div>
@endforeach