@php
$authors = [
    [
        'img' => 'assets/images/client/01.jpg',
        'name' => 'Calvin Carlo',
        'title' => 'Author',
        'date' => '16th Januanry, 2025 at 03:44 pm',
        'desc' => "Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content. This is required when, for example, the final text is not yet available.",
    ],
    [
        'img' => 'assets/images/client/03.jpg',
        'name' => 'Alia Reddy',
        'title' => 'Author',
        'date' => '16th Januanry, 2025 at 03:44 pm',
        'desc' => "Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content. This is required when, for example, the final text is not yet available.",
    ],
    [
        'img' => 'assets/images/client/02.jpg',
        'name' => 'Cristino Murphy',
        'title' => 'Author',
        'date' => '16th Januanry, 2025 at 03:44 pm',
        'desc' => "Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content. This is required when, for example, the final text is not yet available.",
    ]
];
@endphp

@foreach ($authors as $item)
    <div class="p-6 border-b border-gray-100 dark:border-gray-800">
        <div class="sm:flex items-center justify-between">
            <div class="flex items-center">
                <img src="{{ asset($item['img']) }}" class="h-10 rounded-full shadow-sm dark:shadow-slate-800" alt="">

                <div class="ms-3">
                    <a href="" class="hover:text-indigo-600 font-semibold">{{ $item['name'] }}</a>
                    <p class="text-slate-400 text-sm font-normal"><i class="uil uil-user"></i> {{ $item['title'] }}</p>
                </div>
            </div>
            <p class="text-slate-400 text-sm font-normal mt-3 sm:mt-0"><i class="uil uil-clock"></i> {{ $item['date'] }}</p>
        </div>

        <p class="text-slate-400 mt-4">" {{ $item['desc'] }}"</p>
    </div>
@endforeach