@php
$services = [
    [
        'icon' => 'uil uil-eye',
        'title' => 'Eye Care',
        'desc' => 'The phrasal sequence of the Lorem Ipsum text is now so that many',
    ],
    [
        'icon' => 'uil uil-syringe',
        'title' => 'Psychotherapy',
        'desc' => 'The phrasal sequence of the Lorem Ipsum text is now so that many',
    ],
    [
        'icon' => 'uil uil-thermometer',
        'title' => 'Primary Care',
        'desc' => 'The phrasal sequence of the Lorem Ipsum text is now so that many',
    ],
    [
        'icon' => 'uil uil-tablets',
        'title' => 'Dental Care',
        'desc' => 'The phrasal sequence of the Lorem Ipsum text is now so that many',
    ],
    [
        'icon' => 'uil uil-microscope',
        'title' => 'Orthopedic',
        'desc' => 'The phrasal sequence of the Lorem Ipsum text is now so that many',
    ],
    [
        'icon' => 'uil uil-heart-rate',
        'title' => 'Cardiology',
        'desc' => 'The phrasal sequence of the Lorem Ipsum text is now so that many',
    ],
    [
        'icon' => 'uil uil-hospital',
        'title' => 'Gynecology',
        'desc' => 'The phrasal sequence of the Lorem Ipsum text is now so that many',
    ],
    [
        'icon' => 'uil uil-band-aid',
        'title' => 'Neurology',
        'desc' => 'The phrasal sequence of the Lorem Ipsum text is now so that many',
    ]
];
@endphp

@foreach ($services as $item)
    <div class="text-center md:px-6">
        <div class="size-20 bg-indigo-600/5 text-indigo-600 rounded-3xl text-3xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800 mx-auto">
            <i class="{{ $item['icon'] }}"></i>
        </div>

        <div class="content mt-7">
            <a href="{{ url('/page-services') }}" class="title h5 text-lg font-medium hover:text-indigo-600">{{ $item['title'] }}</a>
            <p class="text-slate-400 mt-3">{{ $item['desc'] }}</p>
        </div>
    </div>
@endforeach