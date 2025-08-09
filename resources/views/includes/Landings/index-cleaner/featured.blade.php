@php
$featureds = [
    [
        'img' => 'assets/images/cleaner/1.jpg',
        'title' => 'House Cleaning',
    ],
    [
        'img' => 'assets/images/cleaner/2.jpg',
        'title' => 'Office Cleaning',
    ],
    [
        'img' => 'assets/images/cleaner/3.jpg',
        'title' => 'Kitchen Cleaning',
    ],
    [
        'img' => 'assets/images/cleaner/4.jpg',
        'title' => 'Window Cleaning',
    ],
    [
        'img' => 'assets/images/cleaner/5.jpg',
        'title' => 'Carpet Cleaning',
    ],
    [
        'img' => 'assets/images/cleaner/6.jpg',
        'title' => 'Car Cleaning',
    ]
];
@endphp

@foreach ($featureds as $item)
    <div class="group relative">
        <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-800">
            <img src="{{ asset($item['img']) }}" class="group-hover:scale-110 duration-500" alt="">
        </div>

        <div class="relative -mt-6 px-6">
            <div class="rounded-md shadow-sm dark:shadow-gray-800 bg-white dark:bg-slate-900 p-6">
                <a href="" class="title h5 text-lg font-semibold hover:text-indigo-600 duration-500 ease-in-out">{{ $item['title'] }}</a>

                <ul class="list-none mt-4">
                    <li class="flex text-slate-400"><i class="mdi mdi-check text-indigo-600 align-middle me-2"></i> Vacuming</li>
                    <li class="flex text-slate-400"><i class="mdi mdi-check text-indigo-600 align-middle me-2"></i> Bathroom Cleaning</li>
                    <li class="flex text-slate-400"><i class="mdi mdi-check text-indigo-600 align-middle me-2"></i> Window Cleaning</li>
                    <li class="flex text-slate-400"><i class="mdi mdi-check text-indigo-600 align-middle me-2"></i> Bedrooms Cleaning</li>
                </ul>

                <div class="mt-4">
                    <a href="" class="relative inline-block tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
@endforeach