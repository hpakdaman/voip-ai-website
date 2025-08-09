@php
$features = [
    [
        'icon' => 'shield',
        'title' => 'Money Back Guarantee',
        'desc' => "If the distribution of letters and 'words' is random, the reader will not be distracted from making.",
    ],
    [
        'icon' => 'user-check',
        'title' => '24/7 Customer Service',
        'desc' => "If the distribution of letters and 'words' is random, the reader will not be distracted from making.",
    ],
    [
        'icon' => 'truck',
        'title' => 'Free Shipping Worldwide',
        'desc' => "If the distribution of letters and 'words' is random, the reader will not be distracted from making.",
    ]
];
@endphp

@foreach ($features as $item)
    <div class="group relative lg:px-10 duration-500 rounded-xl bg-white dark:bg-slate-900 overflow-hidden text-center">
        <div class="relative overflow-hidden text-transparent -m-3">
            <i data-feather="hexagon" class="size-32 fill-indigo-600/5 mx-auto"></i>
            <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-indigo-600 rounded-xl duration-500 text-4xl flex align-middle justify-center items-center">
                <i data-feather="{{ $item['icon'] }}" class="size-8"></i>
            </div>
        </div>

        <div class="mt-6">
            <a href="" class="text-xl font-medium duration-500 hover:text-indigo-600">{{ $item['title'] }}</a>
            <p class="text-slate-400 duration-500 mt-3">{{ $item['desc'] }}</p>
        </div>
    </div>
@endforeach