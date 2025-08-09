@php
$projects = [
    [
        'id' => 1,
        'img' => 'assets/images/construction/1.jpg',
        'title' => 'Serenity Apartments',
        'name' => "Branding",
    ],
    [
        'id' => 2,
        'img' => 'assets/images/construction/2.jpg',
        'title' => 'The Landscape House',
        'name' => "Mockup",
    ],
    [
        'id' => 3,
        'img' => 'assets/images/construction/3.jpg',
        'title' => 'New Build Family Home',
        'name' => "Abstract",
    ],
    [
        'id' => 4,
        'img' => 'assets/images/construction/4.jpg',
        'title' => 'Private and Social Apartments',
        'name' => "Books",
    ],
    [
        'id' => 5,
        'img' => 'assets/images/construction/5.jpg',
        'title' => 'Apartment Complex',
        'name' => "V-card",
    ],
    [
        'id' => 6,
        'img' => 'assets/images/construction/6.jpg',
        'title' => 'Construction Engineering',
        'name' => "Photography",
    ]
];
@endphp

@foreach ($projects as $item)
    <div class="group relative block overflow-hidden rounded-md duration-500">
        <a href="{{ route('portfolio-detail-one', ['title' => Str::slug($item['title'])]) }}"><img src="{{ asset($item['img']) }}" class="rounded-md shadow-sm dark:shadow-gray-800" alt=""></a>
        <div class="content pt-3">
            <h5 class="mb-1"><a href="{{ route('portfolio-detail-one', ['title' => Str::slug($item['title'])]) }}" class="hover:text-indigo-600 duration-500 font-semibold text-lg">{{ $item['title'] }}</a></h5>
            <h6 class="text-slate-400">{{ $item['name'] }}</h6>
        </div>
    </div>
@endforeach