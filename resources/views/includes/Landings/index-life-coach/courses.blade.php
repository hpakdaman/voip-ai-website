@php
$courses = [
    [
        'id' => 1,
        'img' => 'assets/images/course/c1.jpg',
        'img1' => 'assets/images/client/01.jpg',
        'name' => 'Calvin Carlo',
        'work' => 'Professor',
        'name1' => 'Digital Marketing',
        'title' => 'Starting SEO as your Home Based Business',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
        'lectures' => "25 Lectures",
        'time' => "1h 30m",
        'see' => "3012",
        'price' => "$11",
    ],
    [
        'id' => 2,
        'img' => 'assets/images/course/c2.jpg',
        'img1' => 'assets/images/client/02.jpg',
        'name' => 'Christa Smith',
        'work' => 'Professor',
        'name1' => 'Engineering',
        'title' => 'Java Programming Masterclass for Software',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
        'lectures' => "25 Lectures",
        'time' => "1h 30m",
        'see' => "3012",
        'price' => "$11",
    ],
    [
        'id' => 3,
        'img' => 'assets/images/course/c3.jpg',
        'img1' => 'assets/images/client/03.jpg',
        'name' => 'Jani Jangad',
        'work' => 'Professor',
        'name1' => 'Engineering',
        'title' => 'Microsoft Excel - Excel from Beginner to Advanced',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
        'lectures' => "25 Lectures",
        'time' => "1h 30m",
        'see' => "3012",
        'price' => "$11",
    ],
    [
        'id' => 4,
        'img' => 'assets/images/course/c4.jpg',
        'img1' => 'assets/images/client/04.jpg',
        'name' => 'John Cartwright',
        'work' => 'Professor',
        'name1' => 'Web Development',
        'title' => 'Vue - The Complete Guide (w/ Router, Composition API)',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
        'lectures' => "25 Lectures",
        'time' => "1h 30m",
        'see' => "3012",
        'price' => "$11",
    ],
    [
        'id' => 5,
        'img' => 'assets/images/course/c5.jpg',
        'img1' => 'assets/images/client/05.jpg',
        'name' => 'Sally Short',
        'work' => 'Professor',
        'name1' => 'Front-end Design',
        'title' => 'HTML, CSS, Javascripts, and Basic Knowledge about web design',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
        'lectures' => "25 Lectures",
        'time' => "1h 30m",
        'see' => "3012",
        'price' => "$11",
    ],
    [
        'id' => 6,
        'img' => 'assets/images/course/c6.jpg',
        'img1' => 'assets/images/client/06.jpg',
        'name' => 'William Benson',
        'work' => 'Professor',
        'name1' => 'Back-end Development',
        'title' => 'C Programming For Beginners - Master the C Language',
        'desc' => "The phrasal sequence of the is now so that many campaign and benefit",
        'lectures' => "25 Lectures",
        'time' => "1h 30m",
        'see' => "3012",
        'price' => "$11",
    ]
];
@endphp

@foreach ($courses as $item)
    <div class="group relative rounded-md shadow-sm hover:shadow-lg dark:shadow-gray-800 duration-500 ease-in-out overflow-hidden">
        <div class="relative overflow-hidden">
            <img src="{{ asset($item['img']) }}" class="group-hover:scale-110 duration-500 ease-in-out" alt="">
            <div class="absolute inset-0 bg-slate-900/50 opacity-0 group-hover:opacity-100 duration-500 ease-in-out"></div>

            <div class="absolute start-0 bottom-0 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
                <div class="pb-4 ps-4 flex items-center">
                    <img src="{{ asset($item['img1']) }}" class="size-12 rounded-full shadow-md dark:shadow-gray-800 mx-auto" alt="">
                    <div class="ms-3">
                        <a href="" class="font-semibold text-white block">{{ $item['name'] }}</a>
                        <span class="text-white/70 text-sm">{{ $item['work'] }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="content p-6 relative">
            <a href="{{ route('course-detail', ['title' => Str::slug($item['title'])]) }}" class="font-medium block text-indigo-600">{{ $item['name1'] }}</a>
            <a href="{{ route('course-detail', ['title' => Str::slug($item['title'])]) }}" class="text-lg font-medium block hover:text-indigo-600 duration-500 ease-in-out mt-2">{{ $item['title'] }}</a>
            <p class="text-slate-400 mt-3 mb-4">{{ $item['desc'] }}</p>
            
            <ul class="pt-4 border-t border-gray-100 dark:border-gray-800 flex items-center list-none text-slate-400">
                <li class="flex items-center me-4">
                    <i class="uil uil-book-open text-lg leading-none me-2 text-slate-900 dark:text-white"></i>
                    <span>{{ $item['lectures'] }}</span>
                </li>

                <li class="flex items-center me-4">
                    <i class="uil uil-clock text-lg leading-none me-2 text-slate-900 dark:text-white"></i>
                    <span>{{ $item['time'] }}</span>
                </li>

                <li class="flex items-center">
                    <i class="uil uil-eye text-lg leading-none me-2 text-slate-900 dark:text-white"></i>
                    <span>{{ $item['see'] }}</span>
                </li>
            </ul>

            <div class="absolute -top-7 end-6 z-1 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
                <div class="flex justify-center items-center size-14 bg-white dark:bg-slate-900 rounded-full shadow-lg dark:shadow-gray-800 text-indigo-600 dark:text-white">
                    <span class="font-semibold">{{ $item['price'] }}</span>
                </div>
            </div>
        </div>
    </div>
@endforeach