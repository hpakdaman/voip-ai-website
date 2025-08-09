@php
$services = [
    [
        'icon' => 'uil uil-airplay',
        'title' => 'Digital Marketing',
        'desc' => 'The phrasal sequence of the Lorem Ipsum text is now so that many',
        'style' => 'size-28 bg-indigo-600/5 text-indigo-600 rounded-3xl text-4xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800 mx-auto',
        'style1' => 'title h5 text-lg font-medium hover:text-indigo-600',
    ],
    [
        'icon' => 'uil uil-presentation-play',
        'title' => 'Video Production',
        'desc' => 'The phrasal sequence of the Lorem Ipsum text is now so that many',
        'style' => 'size-28 bg-red-600/5 text-red-600 rounded-3xl text-4xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800 mx-auto',
        'style1' => 'title h5 text-lg font-medium hover:text-red-600',
    ],
    [
        'icon' => 'uil uil-mobile-android',
        'title' => 'Web & Mobile',
        'desc' => 'The phrasal sequence of the Lorem Ipsum text is now so that many',
        'style' => 'size-28 bg-emerald-600/5 text-emerald-600 rounded-3xl text-4xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800 mx-auto',
        'style1' => 'title h5 text-lg font-medium hover:text-emerald-600',
    ],
    [
        'icon' => 'uil uil-crop-alt',
        'title' => 'UX / UI Design',
        'desc' => 'The phrasal sequence of the Lorem Ipsum text is now so that many',
        'style' => 'size-28 bg-amber-600/5 text-amber-600 rounded-3xl text-4xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800 mx-auto',
        'style1' => 'title h5 text-lg font-medium hover:text-amber-600',
    ]
];
@endphp

@foreach ($services as $item)
    <div class="text-center md:px-6">
        <div class="{{ $item['style'] }}">
            <i class="{{ $item['icon'] }}"></i>
        </div>

        <div class="content mt-7">
            <a href="{{ url('/page-services') }}" class="{{ $item['style1'] }}">{{ $item['title'] }}</a>
            <p class="text-slate-400 mt-3">{{ $item['desc'] }}</p>
        </div>
    </div>
@endforeach