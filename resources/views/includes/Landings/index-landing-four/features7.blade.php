@php
$features = [
    [
        'icon' => 'pie-chart',
        'title' => 'Profitable Marketing',
        'desc' => 'We develop digital strategies, products and services appreciated by clients.',
    ],
    [
        'icon' => 'briefcase',
        'title' => 'SEO Specialists',
        'desc' => 'We develop digital strategies, products and services appreciated by clients.',
    ],
    [
        'icon' => 'target',
        'title' => 'Audience Analysis',
        'desc' => 'We develop digital strategies, products and services appreciated by clients.',
    ]
];
@endphp

@foreach ($features as $item)
    <div class="group text-center">
        <div class="size-20 bg-indigo-600/5 text-indigo-600 rounded-lg ltr:rotate-[15deg] rtl:-rotate-[15deg] flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800 mx-auto">
            <i data-feather="{{ $item['icon'] }}" class="size-7 ltr:-rotate-[15deg] rtl:rotate-[15deg]"></i>
        </div>

        <div class="mt-8">
            <a href="{{ url('/page-services') }}" class="title h5 text-lg font-medium hover:text-indigo-600">{{ $item['title'] }}</a>

            <p class="text-slate-400 mt-4">{{ $item['desc'] }}</p>

            <div class="mt-4">
                <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
        </div>
    </div>
@endforeach