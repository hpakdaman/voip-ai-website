@php
$needs = [
    [
        'icon' => 'uil uil-question-circle',
        'link' => url('/helpcenter-faqs'),
        'title' => 'FAQs',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ],
    [
        'icon' => 'uil uil-file-bookmark-alt',
        'link' => url('/helpcenter-guides'),
        'title' => 'Guides / Support',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ],
    [
        'icon' => 'uil uil-cog',
        'link' => url('/helpcenter-support'),
        'title' => 'Support Request',
        'desc' => 'The phrasal sequence of the is now so that many campaign and benefit',
    ]
];
@endphp

@foreach ($needs as $item)
    <div class="text-center px-6 mt-6">
        <div class="size-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800 mx-auto">
            <i class="{{ $item['icon'] }}"></i>
        </div>

        <div class="content mt-7">
            <a href="{{ $item['link'] }}" class="title h5 text-lg font-medium hover:text-indigo-600">{{ $item['title'] }}</a>
            <p class="text-slate-400 mt-3">{{ $item['desc'] }}</p>
            
            <div class="mt-5">
                <a href="{{ $item['link'] }}" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
            </div>
        </div>
    </div>
@endforeach