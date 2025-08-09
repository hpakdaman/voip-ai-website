@php
$pricings = [
    [
        'title' => 'Free',
        'desc' => "We offers a free month of service for new customers.",
        'price' => "0",
        'btn' => "Signup",
    ],
    [
        'title' => 'Starter',
        'desc' => "We offers a free month of service for new customers.",
        'price' => "9",
        'btn' => "Buy Now",
    ],
    [
        'title' => 'Business',
        'desc' => "We offers a free month of service for new customers.",
        'price' => "29",
        'btn' => "Started now",
    ]
];
@endphp

@foreach ($pricings as $item)
    <div class="group md:flex items-center justify-between p-6 rounded-lg shadow-sm dark:shadow-gray-700">
        <div class="lg:flex items-center justify-between lg:w-2/4">
            <div class="lg:mb-0 mb-5">
                <h5 class="text-2xl font-semibold">{{ $item['title'] }}</h5>
                <p class="text-slate-400 lg:w-[200px] md:w-[300px] mt-2">{{ $item['desc'] }}</p>
            </div>

            <ul class="list-none text-slate-400 md:mb-0 mb-5">
                <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Full Access</li>
                <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Source Files</li>
                <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Free Appointments</li>
                <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Enhanced Security</li>
            </ul>
        </div>

        <div class="flex md:mb-0 mb-5">
            <span class="text-xl font-semibold">$</span>
            <span class="price text-4xl font-semibold mb-0">{{ $item['price'] }}</span>
            <span class="text-xl font-semibold self-end mb-1">/mo</span>
        </div>

        <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-transparent hover:bg-indigo-600 border-gray-100 dark:border-gray-800 hover:border-indigo-600 dark:hover:border-indigo-600 text-slate-900 dark:text-white hover:text-white rounded-full">{{ $item['btn'] }}</a>
    </div>
@endforeach