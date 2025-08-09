@php
$teams = [
    [
        'img' => 'assets/images/client/01.jpg',
        'name' => 'Ronny Jofra',
        'title' => 'C.E.O.',
        'desc' => "If the distribution of letters and 'words' is random",
    ],
    [
        'img' => 'assets/images/client/02.jpg',
        'name' => 'Aliana Rosy',
        'title' => 'HR',
        'desc' => "If the distribution of letters and 'words' is random",
    ],
    [
        'img' => 'assets/images/client/03.jpg',
        'name' => 'Sofia Razaq',
        'title' => 'C.O.O.',
        'desc' => "If the distribution of letters and 'words' is random",
    ],
    [
        'img' => 'assets/images/client/04.jpg',
        'name' => 'Micheal Carlo',
        'title' => 'Director',
        'desc' => "If the distribution of letters and 'words' is random",
    ]
];
@endphp

@foreach ($teams as $item)
    <div class="lg:col-span-3 md:col-span-6">
        <div class="team p-6 rounded-md border border-gray-100 dark:border-gray-800 group bg-white dark:bg-slate-900">
            <img src="{{ asset($item['img']) }}" class="size-24 rounded-full shadow-md dark:shadow-gray-800" alt="">

            <div class="content mt-4">
                <a href="" class="text-lg font-medium hover:text-indigo-600 block">{{ $item['name'] }}</a>
                <span class="text-slate-400 block">{{ $item['title'] }}</span>

                <p class="text-slate-400 mt-4">{{ $item['desc'] }}</p>

                <ul class="list-none mt-4">
                    <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i data-feather="facebook" class="size-4"></i></a></li>
                    <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i data-feather="instagram" class="size-4"></i></a></li>
                    <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i data-feather="twitter" class="size-4"></i></a></li>
                    <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i data-feather="linkedin" class="size-4"></i></a></li>
                </ul><!--end icon-->
            </div>
        </div>
    </div>
@endforeach