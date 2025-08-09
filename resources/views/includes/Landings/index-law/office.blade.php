@php
$offices = [
    [
        'img' => 'assets/images/law/1.jpg',
        'title' => 'Rules of Civil Procedure',
        'name' => 'Lending Law',
    ],
    [
        'img' => 'assets/images/law/2.jpg',
        'title' => 'Property & Real Estate',
        'name' => 'Investment Consulting',
    ],
    [
        'img' => 'assets/images/law/3.jpg',
        'title' => 'Civil Litigation',
        'name' => 'Tax & Benefits',
    ],
    [
        'img' => 'assets/images/law/4.jpg',
        'title' => 'Labours Relations Board',
        'name' => 'Merges & Acquisitions',
    ],
    [
        'img' => 'assets/images/law/5.jpg',
        'title' => 'The Labour code',
        'name' => 'Construction Law',
    ],
    [
        'img' => 'assets/images/law/6.jpg',
        'title' => 'Patient Checkup',
        'name' => 'Health Care Law',
    ],
    [
        'img' => 'assets/images/law/7.jpg',
        'title' => 'Personal Injury',
        'name' => 'Personal',
    ]
];
@endphp

@foreach ($offices as $item)
    <div class="tiny-slide">
        <div class="group relative shadow-sm dark:shadow-gray-800 overflow-hidden mx-2">
            <div class="relative">
                <img src="{{ asset($item['img']) }}" class="group-hover:rotate-3 group-hover:scale-110 duration-500 ease-in-out" alt="">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900"></div>
            </div>

            <div class="absolute bottom-6 start-6 end-6">
                <a href="" class="text-white/70 hover:text-white text-lg block font-semibold duration-500 ease-in-out">{{ $item['title'] }}</a>
                <span class="text-white/60 block">{{ $item['name'] }}</span>
            </div>
        </div>
    </div>
@endforeach