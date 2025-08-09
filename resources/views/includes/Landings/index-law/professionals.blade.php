@php
$professionals = [
    [
        'icon' => 'uil uil-university',
        'title' => 'Professional Court Service',
        'desc' => "Competently leverage existing enterprise wide niches through stand alone services. Quickly productize technically.",
        'style' => "group relative p-6 hover:bg-indigo-600 dark:hover:bg-indigo-600 duration-500 bg-white dark:bg-slate-900 overflow-hidden text-center",
        'class' => "size-20 bg-indigo-600 group-hover:bg-white text-white group-hover:text-indigo-600 rounded-full text-2xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800 dark:group-hover:shadow-gray-700 mx-auto",
        'class1' => "text-lg font-medium group-hover:text-white duration-500",
        'class2' => "text-slate-400 group-hover:text-white/75 duration-500 mt-3",
    ],
    [
        'icon' => 'uil uil-money-bill',
        'title' => 'Competitive Pricing',
        'desc' => "Competently leverage existing enterprise wide niches through stand alone services. Quickly productize technically.",
        'style' => "group relative p-6 bg-indigo-600 dark:hover:bg-indigo-600 duration-500 overflow-hidden text-center",
        'class' => "size-20 bg-white text-indigo-600 rounded-full text-2xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-600 mx-auto",
        'class1' => "text-lg font-medium text-white duration-500",
        'class2' => "text-white/75 duration-500 mt-3",
    ],
    [
        'icon' => 'uil uil-award',
        'title' => 'Top Expart Attorney',
        'desc' => "Competently leverage existing enterprise wide niches through stand alone services. Quickly productize technically.",
        'style' => "group relative p-6 hover:bg-indigo-600 dark:hover:bg-indigo-600 duration-500 bg-white dark:bg-slate-900 overflow-hidden text-center",
        'class' => "size-20 bg-indigo-600 group-hover:bg-white text-white group-hover:text-indigo-600 rounded-full text-2xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800 dark:group-hover:shadow-gray-700 mx-auto",
        'class1' => "text-lg font-medium group-hover:text-white duration-500",
        'class2' => "text-slate-400 group-hover:text-white/75 duration-500 mt-3",
    ]
];
@endphp

@foreach ($professionals as $item)
    <div class="{{ $item['style'] }}">
        <div class="{{ $item['class'] }}">
            <i class="{{ $item['icon'] }}"></i>
        </div>

        <div class="mt-6">
            <a href="" class="{{ $item['class1'] }}">{{ $item['title'] }}</a>
            <p class="{{ $item['class2'] }}">{{ $item['desc'] }}</p>
        </div>
    </div>
@endforeach