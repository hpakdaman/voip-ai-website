@php
$pricings = [
    [
        'title' => 'Starter',
        'price' => '39',
        'btn' => 'Get Started',
    ],
    [
        'title' => 'Business',
        'price' => '49',
        'btn' => 'Try it Now',
    ],
    [
        'title' => 'Professional',
        'price' => '59',
        'btn' => 'Try it Now',
    ]
];
@endphp

@foreach ($pricings as $item)
    <div class="group border-b-[3px] border-gray-200 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 duration-500 hover:scale-105 relative shadow-sm dark:shadow-gray-800 rounded-md bg-white dark:bg-slate-900">
        <div class="p-6 py-8">
            <h6 class="font-bold uppercase mb-5 text-indigo-600">{{ $item['title'] }}</h6>

            <div class="flex mb-5">
                <span class="text-xl font-semibold">$</span>
                <span class="price text-4xl font-semibold mb-0">{{ $item['price'] }}</span>
                <span class="text-xl font-semibold self-end mb-1">/mo</span>
            </div>

            <ul class="list-none text-slate-400">
                <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Full Access</li>
                <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Source Files</li>
                <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Free Appointments</li>
                <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Enhanced Security</li>
            </ul>
            <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-5">{{ $item['btn'] }}</a>
        </div>
    </div>
@endforeach