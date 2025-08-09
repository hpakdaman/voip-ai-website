@php
$teams = [
    [
        'img' => 'assets/images/gym/team1.jpg',
        'name' => 'Calvin Carlo',
        'title' => 'Trainer',
    ],
    [
        'img' => 'assets/images/gym/team2.jpg',
        'name' => 'Judith Williams',
        'title' => 'Trainer',
    ],
    [
        'img' => 'assets/images/gym/team3.jpg',
        'name' => 'John Hodge',
        'title' => 'Trainer',
    ],
    [
        'img' => 'assets/images/gym/team4.jpg',
        'name' => 'Frances Bartley',
        'title' => 'Trainer',
    ]
];
@endphp

@foreach ($teams as $item)
    <div class="group relative rounded-md overflow-hidden shadow-sm text-center">
        <img src="{{ asset($item['img']) }}"  alt="">
        <div class="absolute inset-0 group-hover:bg-gradient-to-b group-hover:from-transparent group-hover:to-slate-900 duration-300 ease-in"></div>

        <div class="content absolute bottom-0 group-hover:bottom-6 start-0 end-0 duration-500 opacity-0 group-hover:opacity-100">
            <h4 class="text-lg font-medium text-white">{{ $item['name'] }}</h4>
            <p class="text-white/50 relative -bottom-5 group-hover:bottom-0 duration-500">{{ $item['title'] }}</p>

            <ul class="list-none relative -bottom-12 group-hover:bottom-0 duration-500 mt-4">
                <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border text-white rounded-md border-indigo-600 bg-indigo-600"><i data-feather="facebook" class="size-4"></i></a></li>
                <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border text-white rounded-md border-indigo-600 bg-indigo-600"><i data-feather="instagram" class="size-4"></i></a></li>
                <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border text-white rounded-md border-indigo-600 bg-indigo-600"><i data-feather="twitter" class="size-4"></i></a></li>
                <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border text-white rounded-md border-indigo-600 bg-indigo-600"><i data-feather="linkedin" class="size-4"></i></a></li>
            </ul>
        </div>
    </div>
@endforeach