@php
$categories = [
    [
        'title' => 'Men',
        'checked' => 'checked',
    ],
    [
        'title' => 'Women',
        'checked' => '',
    ],
    [
        'title' => 'Kid.s Wear',
        'checked' => '',
    ],
    [
        'title' => 'Sports',
        'checked' => '',
    ],
    [
        'title' => 'Jewellery',
        'checked' => '',
    ],
    [
        'title' => 'Electronics',
        'checked' => '',
    ]
];
@endphp

@foreach ($categories as $item)
    <div class="block mt-2">
        <div>
            <label class="inline-flex items-center">
                <input type="radio" class="form-radio size-4 appearance-none rounded-full border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50 me-2" name="radio-colors" value="1" {{ $item['checked'] }}>
                <span class="text-slate-400">{{ $item['title'] }}</span>
            </label>
        </div>
    </div>
@endforeach