@php
$openings = [
    [
        'title' => 'Frontend Developer',
        'total' => 'Total Openings: 1',
        'btn' => 'Apply now',
        'style' => 'group md:flex items-center justify-between p-6 rounded-lg shadow-sm hover:shadow-lg dark:shadow-gray-700 duration-500',
    ],
    [
        'title' => 'Business Development Manager',
        'total' => 'Total Openings: 2',
        'btn' => 'Apply now',
        'style' => 'group md:flex items-center justify-between p-6 rounded-lg shadow-sm hover:shadow-lg dark:shadow-gray-700 duration-500 mt-6',
    ],
    [
        'title' => 'Backend Developer',
        'total' => 'Total Openings: 4',
        'btn' => 'Apply now',
        'style' => 'group md:flex items-center justify-between p-6 rounded-lg shadow-sm hover:shadow-lg dark:shadow-gray-700 duration-500 mt-6',
    ]
];
@endphp

@foreach ($openings as $item)
    <div class="{{ $item['style'] }}">
        <div>
            <a href="{{ url('/page-job-detail') }}" class="text-lg font-semibold hover:text-indigo-600">{{ $item['title'] }}</a>
            <p class="text-slate-400 mt-1">{{ $item['total'] }}</p>
        </div>

        <a href="{{ url('/page-job-detail') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-transparent hover:bg-indigo-600 border-gray-100 dark:border-gray-800 hover:border-indigo-600 dark:hover:border-indigo-600 text-slate-900 dark:text-white hover:text-white rounded-full md:mt-0 mt-4">{{ $item['btn'] }}</a>
    </div>
@endforeach