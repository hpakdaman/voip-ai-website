@php
$numbers = [
    [
        'number' => '+201-102-0000',
        'price' => '$99',
        'btn' => 'Buy Now',
    ],
    [
        'number' => '+201-102-1234',
        'price' => '$99',
        'btn' => 'Buy Now',
    ],
    [
        'number' => '+201-102-4567',
        'price' => '$99',
        'btn' => 'Buy Now',
    ],
    [
        'number' => '+201-102-2345',
        'price' => '$99',
        'btn' => 'Buy Now',
    ],
    [
        'number' => '+201-102-3456',
        'price' => '$99',
        'btn' => 'Buy Now',
    ],
    [
        'number' => '+201-102-5678',
        'price' => '$99',
        'btn' => 'Buy Now',
    ],
    [
        'number' => '+201-102-6789',
        'price' => '$99',
        'btn' => 'Buy Now',
    ],
    [
        'number' => '+201-102-7891',
        'price' => '$99',
        'btn' => 'Buy Now',
    ],
    [
        'number' => '+201-102-8912',
        'price' => '$99',
        'btn' => 'Buy Now',
    ],
    [
        'number' => '+201-102-9123',
        'price' => '$99',
        'btn' => 'Buy Now',
    ],
    [
        'number' => '+201-102-4321',
        'price' => '$99',
        'btn' => 'Buy Now',
    ],
    [
        'number' => '+201-102-9876',
        'price' => '$99',
        'btn' => 'Buy Now',
    ],
    [
        'number' => '+201-102-8765',
        'price' => '$99',
        'btn' => 'Buy Now',
    ],
    [
        'number' => '+201-102-6543',
        'price' => '$99',
        'btn' => 'Buy Now',
    ],
    [
        'number' => '+201-102-5432',
        'price' => '$99',
        'btn' => 'Buy Now',
    ],
    [
        'number' => '+201-102-1597',
        'price' => '$99',
        'btn' => 'Buy Now',
    ],
    [
        'number' => '+201-102-3578',
        'price' => '$99',
        'btn' => 'Buy Now',
    ],
    [
        'number' => '+201-102-7954',
        'price' => '$99',
        'btn' => 'Buy Now',
    ],
    [
        'number' => '+201-102-1346',
        'price' => '$99',
        'btn' => 'Buy Now',
    ],
    [
        'number' => '+201-102-1379',
        'price' => '$99',
        'btn' => 'Buy Now',
    ],
    [
        'number' => '+201-102-4679',
        'price' => '$99',
        'btn' => 'Buy Now',
    ],
    [
        'number' => '+201-102-1245',
        'price' => '$99',
        'btn' => 'Buy Now',
    ],
    [
        'number' => '+201-102-4578',
        'price' => '$99',
        'btn' => 'Buy Now',
    ],
    [
        'number' => '+201-102-2356',
        'price' => '$99',
        'btn' => 'Buy Now',
    ]
];
@endphp

@foreach ($numbers as $item)
    <div class="group p-4 text-center rounded-lg shadow-sm hover:shadow-lg dark:shadow-gray-800 duration-500">
        <a href="" class="hover:text-indigo-600 text-xl font-semibold">{{ $item['number'] }}</a>

        <div class="mt-3 flex items-center justify-center">
            <span class="text-indigo-600 text-lg">{{ $item['price'] }}</span>
            <a href="" class="py-1.5 px-4 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full ms-3">{{ $item['btn'] }}</a>
        </div>
    </div>
@endforeach