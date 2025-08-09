@php
$projects = [
    [
        'img' => 'assets/images/studio/p01.jpg',
        'id' => 'profile',
        'labelledby' => 'profile-tab',
        'class' => '',
        'desc' => "This is required when, for example, the final text is not yet available. Dummy text is also known as 'fill text'. It is said that song composers of the past used dummy texts as lyrics.",
    ],
    [
        'img' => 'assets/images/studio/p02.jpg',
        'id' => 'dashboard',
        'labelledby' => 'dashboard-tab',
        'class' => 'hidden',
        'desc' => "This is required when, for example, the final text is not yet available. Dummy text is also known as 'fill text'. It is said that song composers of the past used dummy texts as lyrics.",
    ],
    [
        'img' => 'assets/images/studio/p03.jpg',
        'id' => 'settings',
        'labelledby' => 'settings-tab',
        'class' => 'hidden',
        'desc' => "This is required when, for example, the final text is not yet available. Dummy text is also known as 'fill text'. It is said that song composers of the past used dummy texts as lyrics.",
    ],
    [
        'img' => 'assets/images/studio/p04.jpg',
        'id' => 'contacts',
        'labelledby' => 'contacts-tab',
        'class' => 'hidden',
        'desc' => "This is required when, for example, the final text is not yet available. Dummy text is also known as 'fill text'. It is said that song composers of the past used dummy texts as lyrics.",
    ]
];
@endphp

@foreach ($projects as $item)
    <div class="{{ $item['class'] }}" id="{{ $item['id'] }}" role="tabpanel" aria-labelledby="{{ $item['labelledby'] }}">
        <img src="{{ asset($item['img']) }}" class="shadow-sm rounded-md" alt="">
        <div class="mt-6">
            <p class="text-slate-400 mb-2">{{ $item['desc'] }}</p>
            <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">See More <i class="uil uil-arrow-right align-middle"></i></a>
        </div>
    </div>
@endforeach