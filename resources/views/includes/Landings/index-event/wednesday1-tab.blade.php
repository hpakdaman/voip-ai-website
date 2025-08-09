@php
$tabs = [
    [
        'img' => 'assets/images/event/eve-sch/5.jpg',
        'time' => '09:00AM - 10:00AM',
        'name' => 'Raymond Turner',
        'title' => 'Digital Conference Event Intro',
        'desc' => "The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century",
    ],
    [
        'img' => 'assets/images/event/eve-sch/6.jpg',
        'time' => '10:30AM - 11:30AM',
        'name' => 'Cindy Morrison',
        'title' => 'Conference On User Interface',
        'desc' => "The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century",
    ],
    [
        'img' => 'assets/images/event/eve-sch/7.jpg',
        'time' => '12:00PM - 01:00PM',
        'name' => 'Vincent Adams',
        'title' => 'Business World Event Intro',
        'desc' => "The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century",
    ],
    [
        'img' => 'assets/images/event/eve-sch/8.jpg',
        'time' => '02:00PM - 03:00PM',
        'name' => 'Ana Heweit',
        'title' => 'Business Conference for professional',
        'desc' => "The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century",
    ]
];
@endphp

@foreach ($tabs as $item)
    <tr>
        <td class="text-center border-b border-gray-100 dark:border-gray-800 py-12 px-5 min-w-[200px] text-slate-400">{{ $item['time'] }}</td>
        <td class="p-3 border-b border-gray-100 dark:border-gray-800 min-w-[540px] py-12 px-5">
            <div class="flex items-center">
                <img src="{{ asset($item['img']) }}" class="rounded-full size-24 shadow-md dark:shadow-gray-700" alt="">

                <div class="ms-4">
                    <a href="" class="hover:text-indigo-600 text-lg font-semibold">{{ $item['title'] }}</a>
                    <p class="text-slate-400 mt-2">{{ $item['desc'] }}</p>
                </div>
            </div>
        </td>
        <td class="text-center border-b border-gray-100 dark:border-gray-800 py-12 px-5 min-w-[180px] text-slate-400">
            <span class="block">Speaker</span>
            <span class="block text-slate-900 dark:text-white text-md mt-1">{{ $item['name'] }}</span>
        </td>
        <td class="text-end border-b border-gray-100 dark:border-gray-800 py-12 px-5 min-w-[180px]">
            <a href="" class="relative inline-block tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 font-medium hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Buy Ticket <i class="uil uil-arrow-right"></i></a>
        </td>
    </tr>
@endforeach