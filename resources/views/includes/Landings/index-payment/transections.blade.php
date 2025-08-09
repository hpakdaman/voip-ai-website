@php
$transections = [
    [
        'img' => 'assets/images/client/facebook-logo-2019.png',
        'title' => 'Facebook Ads',
        'date' => "Dt.1st Dec 25",
        'price' => "$ 0.99",
    ],
    [
        'img' => 'assets/images/client/lenovo-logo.png',
        'title' => 'Lenovo Laptop',
        'date' => "Dt.29th Nov 25",
        'price' => "$ 599",
    ],
    [
        'img' => 'assets/images/client/linkedin.png',
        'title' => 'Linkedin Pro Ac.',
        'date' => "Dt.25th Nov 25",
        'price' => "$ 0.99",
    ]
];
@endphp

@foreach ($transections as $item)
    <li class="flex justify-between items-center pt-5">
        <div class="flex items-center">
            <img src="{{ asset($item['img']) }}" class="w-10" alt="">

            <div class="ms-3">
                <p class="font-semibold">{{ $item['title'] }}</p>
                <p class="text-slate-400 text-sm">{{ $item['date'] }}</p>
            </div>
        </div>

        <div>
            <span class="text-slate-400">{{ $item['price'] }}</span>
        </div>
    </li>
@endforeach