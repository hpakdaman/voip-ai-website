@php
$benefits = [
    [
        'icon' => 'uil uil-shield-check',
        'title' => 'Secure Payment',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'icon' => 'uil uil-thumbs-up',
        'title' => 'Easy Book',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'icon' => 'uil uil-keyboard-show',
        'title' => 'Free Amenities',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'icon' => 'uil uil-award',
        'title' => 'Best Offers',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'icon' => 'uil uil-bookmark',
        'title' => 'Cheap than Other',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'icon' => 'uil uil-favorite',
        'title' => 'Top Rated',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'icon' => 'uil uil-clock',
        'title' => '24/7 Support',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ],
    [
        'icon' => 'uil uil-process',
        'title' => 'Fast Refund',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
    ]
];
@endphp

@foreach ($benefits as $item)
    <div class="group p-6 rounded-lg shadow-sm dark:shadow-gray-800 bg-white dark:bg-slate-900 hover:-translate-y-2 duration-500">
        <div class="size-16 bg-indigo-600/5 group-hover:bg-indigo-600 group-hover:text-white border-2 border-indigo-600/20 text-indigo-600 rounded-lg text-2xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800 duration-500">
            <i class="{{ $item['icon'] }}"></i>
        </div>

        <div class="content mt-7">
            <a href="{{ url('/page-services') }}" class="title h5 text-lg font-medium hover:text-indigo-600">{{ $item['title'] }}</a>
            <p class="text-slate-400 mt-3">{{ $item['desc'] }}</p>
        </div>
    </div>
@endforeach