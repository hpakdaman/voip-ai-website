@php
$images = [
    [
        'img' => 'assets/images/real/property/single/2.jpg',
        'img1' => 'assets/images/real/property/single/3.jpg',
    ],
    [
        'img' => 'assets/images/real/property/single/4.jpg',
        'img1' => 'assets/images/real/property/single/5.jpg',
    ]
];
@endphp

@foreach ($images as $item)
    <div class="flex">
        <div class="w-1/2 p-1">
            <div class="group relative overflow-hidden">
                <img src="{{ asset($item['img']) }}" alt="">
                <div class="absolute inset-0 group-hover:bg-slate-900/70 duration-500 ease-in-out"></div>
                <div class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center invisible group-hover:visible">
                    <a href="{{ asset($item['img']) }}" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full lightbox"><i class="uil uil-camera"></i></a>
                </div>
            </div>
        </div>

        <div class="w-1/2 p-1">
            <div class="group relative overflow-hidden">
                <img src="{{ asset($item['img1']) }}" alt="">
                <div class="absolute inset-0 group-hover:bg-slate-900/70 duration-500 ease-in-out"></div>
                <div class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center invisible group-hover:visible">
                    <a href="{{ asset($item['img1']) }}" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full lightbox"><i class="uil uil-camera"></i></a>
                </div>
            </div>
        </div>
    </div>
@endforeach