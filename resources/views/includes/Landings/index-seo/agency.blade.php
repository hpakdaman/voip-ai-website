@php
$agencys = [
    [
        'img' => "assets/images/cowork/7.jpg",
        'style' => "",
        'id' => "profile",
        'labelledby' => "profile-tab",
    ],
    [
        'img' => "assets/images/cowork/8.jpg",
        'style' => "hidden",
        'id' => "dashboard",
        'labelledby' => "dashboard-tab",
    ],
    [
        'img' => "assets/images/cowork/9.jpg",
        'style' => "hidden",
        'id' => "settings",
        'labelledby' => "settings-tab",
    ]
];
@endphp

@foreach ($agencys as $item)
    <div class="{{ $item['style'] }} " id="{{ $item['id'] }}" role="tabpanel" aria-labelledby="{{ $item['labelledby'] }}">
        <img src="{{ asset($item['img']) }}" class="shadow-sm rounded-md" alt="">
    </div>
@endforeach