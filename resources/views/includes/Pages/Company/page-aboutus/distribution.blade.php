@php
$distributions = [
    [
        'img' => 'assets/images/client/amazon.svg',
        'desc' => "If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact and readability of the typefaces (typography), or the distribution of text on the page consists of a more or less random series of words or syllables.",
        'name' => '- Thomas Israel',
    ],
    [
        'img' => 'assets/images/client/google.svg',
        'desc' => "If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact and readability of the typefaces (typography), or the distribution of text on the page consists of a more or less random series of words or syllables.",
        'name' => '- Carl Oliver',
    ], 
    [
        'img' => 'assets/images/client/lenovo.svg',
        'desc' => "If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact and readability of the typefaces (typography), or the distribution of text on the page consists of a more or less random series of words or syllables.",
        'name' => '- Barbara McIntosh',
    ],
    [
        'img' => 'assets/images/client/paypal.svg',
        'desc' => "If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact and readability of the typefaces (typography), or the distribution of text on the page consists of a more or less random series of words or syllables.",
        'name' => '- Jill Webb',
    ],
    [
        'img' => 'assets/images/client/shopify.svg',
        'desc' => "If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact and readability of the typefaces (typography), or the distribution of text on the page consists of a more or less random series of words or syllables.",
        'name' => '- Dean Tolle',
    ],
    [
        'img' => 'assets/images/client/spotify.svg',
        'desc' => "If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact and readability of the typefaces (typography), or the distribution of text on the page consists of a more or less random series of words or syllables.",
        'name' => '- Christa Smith',
    ]
];
@endphp

@foreach ($distributions as $item)
    <div class="tiny-slide text-center">
        <img src="{{ asset($item['img']) }}" class="h-6 mx-auto" alt="">
        <p class="text-slate-400 mt-6">" {{ $item['desc'] }} "</p>
        <h6 class="text-indigo-600 font-semibold mt-3">{{ $item['name'] }}</h6>
    </div>
@endforeach