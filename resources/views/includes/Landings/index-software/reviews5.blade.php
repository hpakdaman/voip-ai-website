@php
$reviews = [
    [
        'img' => 'assets/images/client/01.jpg',
        'name' => 'Calvin Carlo',
        'title' => 'Manager',
        'desc' => "Techwind made the processes so easy. Techwind instantly increased the amount of interest and ultimately saved us over $10,000.",
    ],
    [
        'img' => 'assets/images/client/02.jpg',
        'name' => 'Christa Smith',
        'title' => 'Manager',
        'desc' => 'I highly recommend Techwind as the new way to sell your home "by owner". My home sold in 24 hours for the asking price. Best $400 you could spend to sell your home.',
    ],
    [
        'img' => 'assets/images/client/03.jpg',
        'name' => 'Christa Smith',
        'title' => 'Manager',
        'desc' => "My favorite part about selling my home myself was that we got to meet and get to know the people personally. This made it so much more enjoyable!",
    ],
    [
        'img' => 'assets/images/client/04.jpg',
        'name' => 'Christa Smith',
        'title' => 'Manager',
        'desc' => "Great experience all around! Easy to use and efficient.",
    ],
    [
        'img' => 'assets/images/client/05.jpg',
        'name' => 'Christa Smith',
        'title' => 'Manager',
        'desc' => "Techwind made selling my home easy and stress free. They went above and beyond what is expected.",
    ],
    [
        'img' => 'assets/images/client/06.jpg',
        'name' => 'Christa Smith',
        'title' => 'Manager',
        'desc' => "Techwind is fair priced, quick to respond, and easy to use. I highly recommend their services!",
    ]
];
@endphp

@foreach ($reviews as $item)
    <div class="tiny-slide">
        <div class="text-center">
            <p class="text-lg text-slate-400 italic"> " {{ $item['desc'] }} " </p>

            <div class="text-center mt-5">
                <ul class="text-xl font-medium text-orange-500 list-none mb-2">
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                </ul>

                <img src="{{ asset($item['img']) }}" class="size-14 rounded-full shadow-md dark:shadow-gray-800 mx-auto" alt="">
                <h6 class="mt-2 font-semibold">{{ $item['name'] }}</h6>
                <span class="text-slate-400 text-sm">{{ $item['title'] }}</span>
            </div>
        </div>
    </div>
@endforeach