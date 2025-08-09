@php
$features = [
    [
        'icon' => 'uil uil-rocket',
        'title' => 'Free Shipping',
        'desc' => "If the distribution of letters and 'words' is random, the reader will not be distracted from making.",
    ],
    [
        'icon' => 'uil uil-user-arrows',
        'title' => '24/7 Support',
        'desc' => "If the distribution of letters and 'words' is random, the reader will not be distracted from making.",
    ],
    [
        'icon' => 'uil uil-transaction',
        'title' => 'Payment Process',
        'desc' => "If the distribution of letters and 'words' is random, the reader will not be distracted from making.",
    ]
];
@endphp

@foreach ($features as $item)
    <div class="group relative lg:px-6 mt-4 duration-500 rounded-xl overflow-hidden text-center">
        <div class="relative overflow-hidden text-transparent -m-3">
            <i data-feather="hexagon" class="size-28 fill-indigo-600/5 mx-auto rotate-[30deg]"></i>
            <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-indigo-600 rounded-xl duration-500 text-3xl flex align-middle justify-center items-center">
                <i class="{{ $item['icon'] }}"></i>
            </div>
        </div>

        <div class="mt-6">
            <a href="" class="text-xl font-medium hover:text-indigo-600 duration-500 ease-in-out">{{ $item['title'] }}</a>
            <p class="text-slate-400 duration-500 mt-3">{{ $item['desc'] }}</p>
        </div>
    </div>
@endforeach