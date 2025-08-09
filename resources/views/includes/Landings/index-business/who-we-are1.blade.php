@php
$whos = [
    [
        'icon' => 'pie-chart',
        'title' => 'Profitable Marketing',
        'desc' => "We develop digital strategies, products and services appreciated by clients.",
    ],
    [
        'icon' => 'briefcase',
        'title' => 'SEO Specialists',
        'desc' => "We develop digital strategies, products and services appreciated by clients.",
    ],
    [
        'icon' => 'target',
        'title' => 'Audience Analysis',
        'desc' => "We develop digital strategies, products and services appreciated by clients.",
    ]
];
@endphp

@foreach ($whos as $item)
    <div class="group text-center">
        <i data-feather="{{ $item['icon'] }}" class="size-10 stroke-1 group-hover:stroke-[1.5px] group-hover:text-indigo-600 duration-500 mx-auto"></i>

        <div class="mt-6">
            <a href="" class="text-xl font-semibold group-hover:text-indigo-600 duration-500">{{ $item['title'] }}</a>

            <p class="text-slate-400 mt-4">{{ $item['desc'] }}</p>

            <div class="mt-4">
                <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
        </div>
    </div>
@endforeach