@php
$advices = [
    [
        'icon' => 'uil uil-presentation-line',
        'title' => 'Best Financial Advice',
        'desc' => "The most well-known which is said to have originated",
    ],
    [
        'icon' => 'uil uil-bill',
        'title' => 'Authorised Finance Brand',
        'desc' => "The most well-known which is said to have originated",
    ],
    [
        'icon' => 'uil uil-money-withdrawal',
        'title' => 'Compehensive Advices',
        'desc' => "The most well-known which is said to have originated",
    ],
    [
        'icon' => 'uil uil-presentation-line',
        'title' => 'Best Tax Advantages',
        'desc' => "The most well-known which is said to have originated",
    ]
];
@endphp

@foreach ($advices as $item)
    <div class="group flex p-6 md:px-4 rounded-lg shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 bg-white dark:bg-slate-900 duration-500">
        <div
            class="min-w-[64px] h-16 bg-indigo-600/5 text-indigo-600 rounded-lg text-2xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800 mx-auto">
            <i class="{{ $item['icon'] }}"></i>
        </div>

        <div class="content ms-4 flex-1">
            <a href="{{ url('/page-services') }}" class="title h5 text-lg font-medium hover:text-indigo-600">{{ $item['title'] }}</a>
            <p class="text-slate-400 mt-2">{{ $item['desc'] }}</p>
        </div>
    </div>
@endforeach