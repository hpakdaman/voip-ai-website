@php
$causes = [
    [
        'img' => 'assets/images/charity/cause01.jpg',
        'title' => 'Donate For Food',
        'desc' => "If you use this site regularly and would like to help keep the site on the Internet",
        'progress' => "Progress",
        'percentage' => "45%",
        'style' => "45%",
        'raised' => "$4500",
        'goal' => "$10000",
    ],
    [
        'img' => 'assets/images/charity/cause02.jpg',
        'title' => 'Food For Orphan',
        'desc' => "If you use this site regularly and would like to help keep the site on the Internet",
        'progress' => "Progress",
        'percentage' => "45%",
        'style' => "45%",
        'raised' => "$4500",
        'goal' => "$10000",
    ],
    [
        'img' => 'assets/images/charity/cause03.jpg',
        'title' => 'Home For Homeless',
        'desc' => "If you use this site regularly and would like to help keep the site on the Internet",
        'progress' => "Progress",
        'percentage' => "45%",
        'style' => "45%",
        'raised' => "$4500",
        'goal' => "$10000",
    ],
    [
        'img' => 'assets/images/charity/cause04.jpg',
        'title' => 'Holyday Gifts In Kind',
        'desc' => "If you use this site regularly and would like to help keep the site on the Internet",
        'progress' => "Progress",
        'percentage' => "45%",
        'style' => "45%",
        'raised' => "$4500",
        'goal' => "$10000",
    ],
    [
        'img' => 'assets/images/charity/cause05.jpg',
        'title' => 'For clean Water in Africa',
        'desc' => "If you use this site regularly and would like to help keep the site on the Internet",
        'progress' => "Progress",
        'percentage' => "45%",
        'style' => "45%",
        'raised' => "$4500",
        'goal' => "$10000",
    ],
    [
        'img' => 'assets/images/charity/cause06.jpg',
        'title' => 'Health and Rights',
        'desc' => "If you use this site regularly and would like to help keep the site on the Internet",
        'progress' => "Progress",
        'percentage' => "45%",
        'style' => "45%",
        'raised' => "$4500",
        'goal' => "$10000",
    ]
];
@endphp

@foreach ($causes as $item)
    <div class="group relative rounded hover:-mt-1 shadow-sm hover:shadow-md dark:shadow-gray-800 overflow-hidden duration-300">
        <div class="relative overflow-hidden">
            <img src="{{ asset($item['img']) }}" alt="">

            <div class="absolute p-4 start-0 end-0 text-center bg-slate-900/80 -bottom-24 group-hover:bottom-0 duration-300">
                <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Donate Now</a>
            </div>
        </div>
        
        <div class="p-6">
            <a href="" class="hover:text-indigo-600 text-lg font-semibold">{{ $item['title'] }}</a>
            <p class="text-slate-400 mt-2">{{ $item['desc'] }}</p>

            <div class="mt-3">
                <div class="flex justify-between mb-2">
                    <span class="text-slate-400">{{ $item['progress'] }}</span>
                    <span class="text-slate-400">{{ $item['percentage'] }}</span>
                </div>
                <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                    <div class="bg-indigo-600 h-[6px] rounded-full" style="width: {{ $item['style'] }}"></div>
                </div>
                <ul class="flex list-none justify-between mt-3 mb-2">
                    <li class="font-semibold">
                        <span class="text-indigo-600">Raised: </span>
                        <span>{{ $item['raised'] }}</span>
                    </li>
                    <li class="text-indigo-600 font-semibold">
                        <span>Goal: </span>
                        <span>{{ $item['goal'] }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div><!--end content-->
@endforeach