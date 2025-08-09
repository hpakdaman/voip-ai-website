@php
$portfolios = [
    [
        'img' => 'assets/images/studio/work1.jpg',
        'title' => 'Techwind Personal Portfolio',
        'name' => 'Creative',
        'style' => 'bg-indigo-600/5 dark:bg-indigo-600/30',
        'class' => 'hover:text-indigo-600',
    ],
    [
        'img' => 'assets/images/studio/work2.jpg',
        'title' => 'Techwind Minimal Portfolio',
        'name' => 'Minimal',
        'style' => 'bg-emerald-600/5 dark:bg-emerald-600/30',
        'class' => 'hover:text-emerald-600',
    ],
    [
        'img' => 'assets/images/studio/work3.jpg',
        'title' => 'Cryptor NFT Market',
        'name' => 'Crypto',
        'style' => 'bg-red-600/5 dark:bg-red-600/30',
        'class' => 'hover:text-red-600',
    ],
    [
        'img' => 'assets/images/studio/work4.jpg',
        'title' => 'Techwind Portfolio',
        'name' => 'Portfolio',
        'style' => 'bg-sky-600/5 dark:bg-sky-600/30',
        'class' => 'hover:text-sky-600',
    ],
    [
        'img' => 'assets/images/studio/work5.jpg',
        'title' => 'Techwind Constuction',
        'name' => 'Corporate',
        'style' => 'bg-amber-600/5 dark:bg-amber-600/30',
        'class' => 'hover:text-amber-600',
    ],
    [
        'img' => 'assets/images/studio/work6.jpg',
        'title' => 'Techwind SEO',
        'name' => 'SEO',
        'style' => 'bg-indigo-600/5 dark:bg-indigo-600/30',
        'class' => 'hover:text-indigo-600',
    ],
    [
        'img' => 'assets/images/studio/work7.jpg',
        'title' => 'Cryptor NFT Market',
        'name' => 'Crypto',
        'style' => 'bg-emerald-600/5 dark:bg-emerald-600/30',
        'class' => 'hover:text-emerald-600',
    ]
];
@endphp

@foreach ($portfolios as $item)
    <div class="lg:w-1/3 sm:w-1/2 picture-item p-4 rounded-md">
        <div class="">
            <div class="relative">
                <div class="shadow-sm dark:shadow-gray-800 p-5 pb-0 rounded-md {{ $item['style'] }}">
                    <img src="{{ asset($item['img']) }}" class="rounded-t-md shadow-sm" alt="">
                </div>
            </div>

            <div class="pt-4 px-3">
                <h5 class="mb-1 font-semibold text-lg"><a href="https://1.envato.market/techwind" target="_blank" class="{{ $item['class'] }}">{{ $item['title'] }}</a></h5>
                <span class="text-slate-400">{{ $item['name'] }}</span>
            </div>                            
        </div>
    </div>
@endforeach