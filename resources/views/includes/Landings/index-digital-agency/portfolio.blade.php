@php
$portfolios = [
    [
        'img' => 'assets/images/portfolio/pro1.jpg',
        'title' => 'Techwind Personal Portfolio',
        'name' => 'Creative',
        'class' => 'shadow-sm dark:shadow-gray-800 p-5 pb-0 rounded-md bg-indigo-600/5 dark:bg-indigo-600/30',
        'style' => 'hover:text-indigo-600 duration-500',
    ],
    [
        'img' => 'assets/images/portfolio/pro2.jpg',
        'title' => 'Techwind Minimal Portfolio',
        'name' => 'Minimal',
        'class' => 'shadow-sm dark:shadow-gray-800 p-5 pb-0 rounded-md bg-emerald-600/5 dark:bg-emerald-600/30',
        'style' => 'hover:text-emerald-600 duration-500',
    ],
    [
        'img' => 'assets/images/portfolio/pro3.jpg',
        'title' => 'Techwind NFT Market',
        'name' => 'Crypto',
        'class' => 'shadow-sm dark:shadow-gray-800 p-5 pb-0 rounded-md bg-red-600/5 dark:bg-red-600/30',
        'style' => 'hover:text-red-600 duration-500',
    ],
    [
        'img' => 'assets/images/portfolio/pro4.jpg',
        'title' => 'Techwind Portfolio',
        'name' => 'Portfolio',
        'class' => 'shadow-sm dark:shadow-gray-800 p-5 pb-0 rounded-md bg-sky-600/5 dark:bg-sky-600/30',
        'style' => 'hover:text-sky-600 duration-500',
    ],
    [
        'img' => 'assets/images/portfolio/pro5.jpg',
        'title' => 'Techwind Constuction',
        'name' => 'Corporate',
        'class' => 'shadow-sm dark:shadow-gray-800 p-5 pb-0 rounded-md bg-amber-600/5 dark:bg-amber-600/30',
        'style' => 'hover:text-amber-600 duration-500',
    ],
    [
        'img' => 'assets/images/portfolio/pro6.jpg',
        'title' => 'Techwind SEO',
        'name' => 'SEO',
        'class' => 'shadow-sm dark:shadow-gray-800 p-5 pb-0 rounded-md bg-indigo-600/5 dark:bg-indigo-600/30',
        'style' => 'hover:text-indigo-600 duration-500',
    ]
];
@endphp

@foreach ($portfolios as $item)
    <div class="lg:w-1/3 sm:w-1/2 picture-item p-4 rounded-md">
        <div class="">
            <div class="relative">
                <div class="{{ $item['class'] }}">
                    <img src="{{ asset($item['img']) }}" class="rounded-t-md shadow-sm" alt="">
                </div>
            </div>

            <div class="pt-4 px-3">
                <h5 class="mb-1 font-semibold text-lg"><a href="https://1.envato.market/techwind" target="_blank" class="{{ $item['style'] }}">{{ $item['title'] }}</a></h5>
                <span class="text-slate-400">{{ $item['name'] }}</span>
            </div>                            
        </div>
    </div>
@endforeach