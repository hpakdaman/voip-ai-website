@php
$reviews = [
    [
        'style' => 'space-y-8',
        'img' => 'assets/images/client/01.jpg',
        'img1' => 'assets/images/client/05.jpg',
        'name' => 'Thomas Israel',
        'name1' => 'Barbara McIntosh',
        'title' => 'C.E.O',
        'desc' => "I didn't know a thing about icon design until I read this book. Now I can create any icon I need in no time. Great resource!",
        'desc1' => "There are so many things I had to do with my old software that I just don't do at all with Techwind. Suspicious but I can't say I don't love it.",
    ],
    [
        'style' => 'space-y-8 hidden sm:block',
        'img' => 'assets/images/client/02.jpg',
        'img1' => 'assets/images/client/04.jpg',
        'name' => 'Carl Oliver',
        'name1' => 'Jill Webb',
        'title' => 'C.E.O',
        'desc' => "The best part about Techwind is every time I pay my employees, my bank balance doesn't go down like it used to. Looking forward to spending this extra cash when I figure out why my card is being declined.",
        'desc1' => "I'm trying to get a hold of someone in support, I'm in a lot of trouble right now and they are saying it has something to do with my books. Please get back to me right away.",
    ],
    [
        'style' => 'space-y-8 hidden lg:block',
        'img' => 'assets/images/client/03.jpg',
        'img1' => 'assets/images/client/06.jpg',
        'name' => 'Barbara McIntosh',
        'name1' => 'Janisha Doll',
        'title' => 'C.E.O',
        'desc' => "I used to have to remit tax to the EU and with Techwind I somehow don't have to do that anymore. Nervous to travel there now though.",
        'desc1' => "This is the fourth email I've sent to your support team. I am literally being held in jail for tax fraud. Please answer your damn emails, this is important.",
    ]
];
@endphp

@foreach ($reviews as $item)
    <ul class="{{ $item['style'] }}">
        <li class="rounded-lg shadow-lg dark:shadow-gray-800 p-6">
            <div class="flex items-center pb-6 border-b border-gray-100 dark:border-gray-800">
                <img src="{{ asset($item['img']) }}" class="size-16 rounded-full shadow-sm dark:shadow-gray-800" alt="">

                <div class="ps-4">
                    <a href="" class="text-lg hover:text-indigo-600 duration-500 ease-in-out">{{ $item['name'] }}</a>
                    <p class="text-slate-400">{{ $item['title'] }}</p>
                </div>
            </div>

            <div class="mt-6">
                <p class="text-slate-400">{{ $item['desc'] }}</p>
                <ul class="list-none mb-0 text-amber-400 mt-2">
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                </ul>
            </div>
        </li>

        <li class="rounded-lg shadow-lg dark:shadow-gray-800 p-6">
            <div class="flex items-center pb-6 border-b border-gray-100 dark:border-gray-800">
                <img src="{{ asset($item['img1']) }}" class="size-16 rounded-full shadow-sm dark:shadow-gray-800" alt="">

                <div class="ps-4">
                    <a href="" class="text-lg hover:text-indigo-600 duration-500 ease-in-out">{{ $item['name1'] }}</a>
                    <p class="text-slate-400">C.E.O</p>
                </div>
            </div>

            <div class="mt-6">
                <p class="text-slate-400">{{ $item['desc1'] }}</p>
                <ul class="list-none mb-0 text-amber-400 mt-2">
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                </ul>
            </div>
        </li>
    </ul>
@endforeach