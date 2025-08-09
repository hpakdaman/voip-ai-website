@php
$wealths = [
    [
        'img' => 'assets/images/cowork/7.jpg',
        'title' => 'Wealth Management',
        'desc' => "This is required when, for example, the final text is not yet available. Dummy text is also known as 'fill text'. It is said that song composers of the past used dummy texts as lyrics.",
        'style' => "",
        'id' => "profile",
        'labelledby' => "profile-tab",
    ],
    [
        'img' => 'assets/images/cowork/8.jpg',
        'title' => 'Retirement Planning',
        'desc' => "This is required when, for example, the final text is not yet available. Dummy text is also known as 'fill text'. It is said that song composers of the past used dummy texts as lyrics.",
        'style' => "hidden",
        'id' => "dashboard",
        'labelledby' => "dashboard-tab",
    ],
    [
        'img' => 'assets/images/cowork/9.jpg',
        'title' => 'Business Insurance',
        'desc' => "This is required when, for example, the final text is not yet available. Dummy text is also known as 'fill text'. It is said that song composers of the past used dummy texts as lyrics.",
        'style' => "hidden",
        'id' => "settings",
        'labelledby' => "settings-tab",
    ],
    [
        'img' => 'assets/images/cowork/10.jpg',
        'title' => 'Life Insurance',
        'desc' => "This is required when, for example, the final text is not yet available. Dummy text is also known as 'fill text'. It is said that song composers of the past used dummy texts as lyrics.",
        'style' => "hidden",
        'id' => "contacts",
        'labelledby' => "contacts-tab",
    ]
];
@endphp

<div id="myTabContent" class="p-6 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 rounded-md">

    @foreach ($wealths as $item)
        <div class="{{ $item['style'] }}" id="{{ $item['id'] }}" role="tabpanel" aria-labelledby="{{ $item['labelledby'] }}">
            <img src="{{ asset($item['img']) }}" class="shadow-sm rounded-md" alt="">
            <div class="mt-6">
                <h5 class="text-lg font-semibold mb-4">{{ $item['title'] }}</h5>
                <p class="text-slate-400 mb-2">{{ $item['desc'] }}</p>
                <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">See More <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
        </div>
    @endforeach
    
</div>