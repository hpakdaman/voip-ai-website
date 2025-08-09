@php
$prouds = [
    [
        'icon' => 'uil uil-ruler-combined',
        'title' => 'Project Planning',
        'desc' => "One disadvantage of Lorum Ipsum is that in Latin frequently than others",
    ],
    [
        'icon' => 'uil uil-constructor',
        'title' => 'Qualified Specialists',
        'desc' => "One disadvantage of Lorum Ipsum is that in Latin frequently than others",
    ],
    [
        'icon' => 'uil uil-no-entry',
        'title' => 'Constant Maintenance',
        'desc' => "One disadvantage of Lorum Ipsum is that in Latin frequently than others",
    ],
    [
        'icon' => 'uil uil-cog',
        'title' => 'Warranty Service',
        'desc' => "One disadvantage of Lorum Ipsum is that in Latin frequently than others",
    ]
];
@endphp

@foreach ($prouds as $item)
    <div class="group flex duration-500">
        <div class="flex align-middle justify-center items-center size-14 mt-1 bg-indigo-600/5 group-hover:bg-indigo-600 group-hover:text-white text-indigo-600 rounded-full text-2xl shadow-xs dark:shadow-gray-800 duration-500">
            <i class="{{ $item['icon'] }}"></i>
        </div>
        <div class="flex-1 ms-4">
            <h4 class="mb-0 text-lg font-medium">{{ $item['title'] }}</h4>
            <p class="text-slate-400 mt-3">{{ $item['desc'] }}</p>
        </div>
    </div>
@endforeach