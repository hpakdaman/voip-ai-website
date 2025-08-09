@php
$features = [
    [
        'icon' => 'mdi mdi-account-search-outline',
        'title' => 'Search & Write Content',
        'desc' => "If the distribution of letters and 'words' is random, the reader will not be distracted from making.",
        'span' => "uil uil-angle-right-bsize-8 bg-indigo-600 text-white rounded-full flex justify-center items-center absolute md:top-2/4 md:-translate-y-2/4 -bottom-4 md:-end-0 end-2/4 ltr:translate-x-2/4 rtl:-translate-x-2/4 rtl:rotate-180 z-1",
    ],
    [
        'icon' => 'mdi mdi-wallet-bifold-outline',
        'title' => 'Discribe Content',
        'desc' => "If the distribution of letters and 'words' is random, the reader will not be distracted from making.",
        'span' => "uil uil-angle-right-bsize-8 bg-indigo-600 text-white rounded-full flex justify-center items-center absolute md:top-2/4 md:-translate-y-2/4 -bottom-4 md:-end-0 end-2/4 ltr:translate-x-2/4 rtl:-translate-x-2/4 rtl:rotate-180 z-1",
    ],
    [
        'icon' => 'mdi mdi-home-plus-outline',
        'title' => 'Generate Content',
        'desc' => "If the distribution of letters and 'words' is random, the reader will not be distracted from making.",
        'span' => "",
    ]
];
@endphp

@foreach ($features as $item)
    <div class="relative p-6 md:p-8">
        <i class="{{ $item['icon'] }} bg-gradient-to-tl to-indigo-600 from-red-600 text-transparent bg-clip-text text-[45px]"></i>

        <h5 class="text-xl font-semibold my-5">{{ $item['title'] }}</h5>

        <p class="text-slate-400">{{ $item['desc'] }}</p>

        <i class="{{ $item['icon'] }} absolute bottom-0 end-0 -z-1 opacity-5 text-9xl"></i>

        <span class="{{ $item['span'] }}"></span>
    </div><!--end content-->
@endforeach