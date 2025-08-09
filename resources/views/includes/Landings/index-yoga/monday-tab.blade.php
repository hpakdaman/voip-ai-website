@php
$tabs = [
    [
        'img' => 'assets/images/yoga/t01.jpg',
        'title' => 'Dhanurasana',
        'name' => "- Calvin Carlo",
        'time' => "8:00AM",
        'style' => "md:flex items-center p-6 relative z-1",
    ],
    [
        'img' => 'assets/images/yoga/t02.jpg',
        'title' => 'Bhujangasana',
        'name' => "- Cristina Murphy",
        'time' => "9:00AM",
        'style' => "md:flex items-center p-6 relative z-1 border-t border-gray-200 dark:border-gray-800",
    ],
    [
        'img' => 'assets/images/yoga/t03.jpg',
        'title' => 'Sirsasana',
        'name' => "- Alice Perry",
        'time' => "10:00AM",
        'style' => "md:flex items-center p-6 relative z-1 border-t border-gray-200 dark:border-gray-800",
    ],
    [
        'img' => 'assets/images/yoga/t04.jpg',
        'title' => 'Padmasana',
        'name' => "- Hayley Matthews",
        'time' => "11:00AM",
        'style' => "md:flex items-center p-6 relative z-1 border-t border-gray-200 dark:border-gray-800",
    ],
    [
        'img' => 'assets/images/yoga/t01.jpg',
        'title' => 'Utthita Parsvakonasana',
        'name' => "- Calvin Carlo",
        'time' => "2:00PM",
        'style' => "md:flex items-center p-6 relative z-1 border-t border-gray-200 dark:border-gray-800",
    ],
    [
        'img' => 'assets/images/yoga/t02.jpg',
        'title' => 'Natarajasana',
        'name' => "- Cristina Murphy",
        'time' => "3:00PM",
        'style' => "md:flex items-center p-6 relative z-1 border-t border-gray-200 dark:border-gray-800",
    ],
    [
        'img' => 'assets/images/yoga/t03.jpg',
        'title' => 'Halasana',
        'name' => "- Alice Perry",
        'time' => "4:00PM",
        'style' => "md:flex items-center p-6 relative z-1 border-t border-gray-200 dark:border-gray-800",
    ],
    [
        'img' => 'assets/images/yoga/t04.jpg',
        'title' => 'Vajrasana',
        'name' => "- Hayley Matthews",
        'time' => "5:00PM",
        'style' => "md:flex items-center p-6 relative z-1 border-t border-gray-200 dark:border-gray-800",
    ]
];
@endphp

<div class="relative overflow-hidden" id="monday" role="tabpanel" aria-labelledby="monday-tab">

    @foreach ($tabs as $item)
        <div class="{{ $item['style'] }}">
            <h5 class="text-xl font-semibold w-24">{{ $item['time'] }}</h5>

            <div class="flex items-center md:ms-4 md:mt-0 mt-4">
                <img src="{{ asset($item['img']) }}" class="size-10 rounded-full shadow-sm dark:shadow-gray-800" alt="">

                <div class="ms-4">
                    <h5 class="text-lg font-semibold">{{ $item['title'] }}</h5>

                    <p class="text-slate-400">{{ $item['name'] }}</p>
                </div>
            </div>
        </div>
    @endforeach

    <div class="absolute inset-0 bg-center bg-cover opacity-5" style="background-image: url('{{ asset('assets/images/yoga/ab01.jpg') }}');"></div>
</div>