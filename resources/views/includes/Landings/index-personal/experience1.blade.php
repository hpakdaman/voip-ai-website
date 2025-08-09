@php
$experiences = [
    [
        'img' => 'assets/images/client/shree-logo.png',
        'name' => 'Self Employed',
        'year' => '2019-21',
        'title' => 'UX / UI Designer',
        'desc' => "The generated injected humour, or non-characteristic words etc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,",
        'style' => "ms-8 md:ms-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-indigo-600 md:after:mx-auto md:after:end-0 md:after:start-0 after:-start-9 before:content-[''] before:absolute md:before:mx-auto md:before:end-0 md:before:start-0 before:-start-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900",
        'class' => "md:text-end md:me-8 relative",
        'class1' => "ltr:float-left rtl:float-right text-start ms-8 mt-6 md:mt-0",
        'class2' => "rounded-full size-9 md:ms-auto",
    ],
    [
        'img' => 'assets/images/client/google-logo.png',
        'name' => 'Google Tech.',
        'year' => '2018-19',
        'title' => 'Sr. UX / UI Designer',
        'desc' => "The generated injected humour, or non-characteristic words etc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,",
        'style' => "mt-12 ms-8 md:ms-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-indigo-600 md:after:mx-auto md:after:end-0 md:after:start-0 after:-start-9 before:content-[''] before:absolute md:before:mx-auto md:before:end-0 md:before:start-0 before:-start-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900",
        'class' => "text-start ms-8 relative md:order-2",
        'class1' => "ltr:float-left rtl:float-right md:text-end md:me-8 mt-6 md:mt-0 md:order-1",
        'class2' => "rounded-full size-9 md:me-auto",
    ],
    [
        'img' => 'assets/images/client/lenovo-logo.png',
        'name' => 'Lenovo Ltd.',
        'year' => '2016-18',
        'title' => 'Jr. UX / UI Designer',
        'desc' => "The generated injected humour, or non-characteristic words etc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,",
        'style' => "mt-12 ms-8 md:ms-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-indigo-600 md:after:mx-auto md:after:end-0 md:after:start-0 after:-start-9 before:content-[''] before:absolute md:before:mx-auto md:before:end-0 md:before:start-0 before:-start-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900",
        'class' => "md:text-end md:me-8 relative",
        'class1' => "ltr:float-left rtl:float-right text-start ms-8 mt-6 md:mt-0",
        'class2' => "rounded-full size-9 md:ms-auto",
    ],
    [
        'img' => 'assets/images/client/circle-logo.png',
        'name' => 'Circle CI',
        'year' => '2015-16',
        'title' => 'Front-end Web Designer',
        'desc' => "The generated injected humour, or non-characteristic words etc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,",
        'style' => "mt-12 ms-8 md:ms-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-indigo-600 md:after:mx-auto md:after:end-0 md:after:start-0 after:-start-9 before:content-[''] before:absolute md:before:mx-auto md:before:end-0 md:before:start-0 before:-start-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900",
        'class' => "text-start ms-8 relative md:order-2",
        'class1' => "ltr:float-left rtl:float-right md:text-end md:me-8 mt-6 md:mt-0 md:order-1",
        'class2' => "rounded-full size-9 md:me-auto",
    ]
];
@endphp

@foreach ($experiences as $item)
    <div class="{{ $item['style'] }}">
        <div class="grid md:grid-cols-2">
            <div class="{{ $item['class'] }}">
                <img src="{{ asset($item['img']) }}" class="{{ $item['class2'] }}" alt="">
                <h5 class="my-2 font-semibold text-lg">{{ $item['name'] }}</h5>
                <h6 class="text-slate text-sm mb-0">{{ $item['year'] }}</h6>
            </div>

            <div class="{{ $item['class1'] }}">
                <h5 class="title mb-1 font-semibold">{{ $item['title'] }}</h5>
                <p class="mt-3 mb-0 text-slate-400">{{ $item['desc'] }}</p>
            </div>
        </div>
    </div>
@endforeach