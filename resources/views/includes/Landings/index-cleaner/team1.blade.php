@php
$teams = [
    [
        'img' => 'assets/images/client/04.jpg',
        'name' => "Jack John",
        'title' => 'Cleaner',
    ],
    [
        'img' => 'assets/images/client/05.jpg',
        'name' => "Krista John",
        'title' => 'Cleaner',
    ],
    [
        'img' => 'assets/images/client/06.jpg',
        'name' => "Roger Jackson",
        'title' => 'Cleaner',
    ],
    [
        'img' => 'assets/images/client/07.jpg',
        'name' => "Johnny English",
        'title' => 'Cleaner',
    ]
];
@endphp

@foreach ($teams as $item)
    <div class="lg:col-span-3 md:col-span-6">
        <div class="group text-center">
            <div class="relative inline-block mx-auto size-52 rounded-full overflow-hidden">
                <img src="{{ asset($item['img']) }}" class="" alt="">
                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-slate-900 size-52 rounded-full opacity-0 group-hover:opacity-100 duration-500"></div>

                <ul class="list-none absolute start-0 end-0 -bottom-20 group-hover:bottom-5 duration-500">
                    <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full border border-indigo-600 bg-indigo-600 hover:border-indigo-600 hover:bg-indigo-600 text-white"><i data-feather="facebook" class="size-4"></i></a></li>
                    <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full border border-indigo-600 bg-indigo-600 hover:border-indigo-600 hover:bg-indigo-600 text-white"><i data-feather="instagram" class="size-4"></i></a></li>
                    <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full border border-indigo-600 bg-indigo-600 hover:border-indigo-600 hover:bg-indigo-600 text-white"><i data-feather="linkedin" class="size-4"></i></a></li>
                </ul><!--end icon-->
            </div>

            <div class="content mt-3">
                <a href="" class="text-lg font-semibold hover:text-indigo-600 duration-500">{{ $item['name'] }}</a>
                <p class="text-slate-400">{{ $item['title'] }}</p>
            </div>
        </div>
    </div>
@endforeach