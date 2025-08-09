@php
$phones = [
    [
        'icon' => 'uil uil-question-circle',
        'title' => 'Phone',
        'desc' => 'Start working with Techwind that can provide everything',
        'link' => 'tel:+152534-468-854',
        'type' => '',
        'name' => '+152 534-468-854',
        'style' => 'text-indigo-600 font-medium',
    ],
    [
        'icon' => 'uil uil-file-bookmark-alt',
        'title' => 'Email',
        'desc' => 'Start working with Techwind that can provide everything',
        'link' => 'mailto:contact@example.com',
        'type' => '',
        'name' => 'contact@example.com',
        'style' => 'text-indigo-600 font-medium',
    ],
    [
        'icon' => 'uil uil-cog',
        'title' => 'Location',
        'desc' => 'C/54 Northwest Freeway, Suite 558, Houston, USA 485',
        'link' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin',
        'type' => 'iframe',
        'name' => 'View on Google map',
        'style' => 'lightbox text-indigo-600 font-medium',
    ]
];
@endphp

@foreach ($phones as $item)
    <div class="text-center px-6">
        <div class="size-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800 mx-auto">
            <i class="{{ $item['icon'] }}"></i>
        </div>

        <div class="content mt-7">
            <h5 class="text-xl font-semibold">{{ $item['title'] }}</h5>
            <p class="text-slate-400 mt-3">{{ $item['desc'] }}</p>
            
            <div class="mt-5">
                <a href="{{ $item['link'] }}" class="{{ $item['style'] }}" data-type="{{ $item['type'] }}">{{ $item['name'] }}</a>
            </div>
        </div>
    </div>
@endforeach