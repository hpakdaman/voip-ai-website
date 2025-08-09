@php
$posts = [
    [
        'img' => 'assets/images/yoga/i1.jpg',
    ],
    [
        'img' => 'assets/images/yoga/i2.jpg',
    ],
    [
        'img' => 'assets/images/yoga/i3.jpg',
    ],
    [
        'img' => 'assets/images/yoga/i4.jpg',
    ],
    [
        'img' => 'assets/images/yoga/i5.jpg',
    ],
    [
        'img' => 'assets/images/yoga/i6.jpg',
    ],
    [
        'img' => 'assets/images/yoga/i7.jpg',
    ],
    [
        'img' => 'assets/images/yoga/i8.jpg',
    ],
    [
        'img' => 'assets/images/yoga/i9.jpg',
    ],
    [
        'img' => 'assets/images/yoga/i10.jpg',
    ],
    [
        'img' => 'assets/images/yoga/i11.jpg',
    ],
    [
        'img' => 'assets/images/yoga/i12.jpg',
    ],
    [
        'img' => 'assets/images/yoga/i13.jpg',
    ],
    [
        'img' => 'assets/images/yoga/i14.jpg',
    ],
    [
        'img' => 'assets/images/yoga/i15.jpg',
    ]
];
@endphp

@foreach ($posts as $item)
    <div class="tiny-slide">
        <div class="card border-0 rounded-0">
            <div class="card-body p-0">
                <a href="{{ asset($item['img']) }}" class="lightbox d-inline-block" title="">
                    <img src="{{ asset($item['img']) }}" class="" alt="Yoga Asana">
                    <div class="overlay bg-slate-900"></div>
                </a>
            </div>
        </div>
    </div>
@endforeach