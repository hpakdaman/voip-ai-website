@php
$wallets = [
    [
        'img' => 'assets/images/nft/wallet/MetaMask_Fox.svg',
        'title' => 'MetaMask',
        'desc' => 'Learn about how to get the wallet and much more clicking',
    ],
    [
        'img' => 'assets/images/nft/wallet/aave.svg',
        'title' => 'Aave',
        'desc' => 'Learn about how to get the wallet and much more clicking',
    ],
    [
        'img' => 'assets/images/nft/wallet/Airswap.svg',
        'title' => 'Airswap',
        'desc' => 'Learn about how to get the wallet and much more clicking',
    ],
    [
        'img' => 'assets/images/nft/wallet/Compound.svg',
        'title' => 'Compound',
        'desc' => 'Learn about how to get the wallet and much more clicking',
    ],
    [
        'img' => 'assets/images/nft/wallet/ddexsvg.svg',
        'title' => 'DDEX',
        'desc' => 'Learn about how to get the wallet and much more clicking',
    ],
    [
        'img' => 'assets/images/nft/wallet/defi-saver.svg',
        'title' => 'Defi Saver',
        'desc' => 'Learn about how to get the wallet and much more clicking',
    ],
    [
        'img' => 'assets/images/nft/wallet/dYdX.svg',
        'title' => 'DYDX',
        'desc' => 'Learn about how to get the wallet and much more clicking',
    ],
    [
        'img' => 'assets/images/nft/wallet/idex.svg',
        'title' => 'IDEX',
        'desc' => 'Learn about how to get the wallet and much more clicking',
    ],
    [
        'img' => 'assets/images/nft/wallet/kyber.svg',
        'title' => 'Kyber',
        'desc' => 'Learn about how to get the wallet and much more clicking',
    ],
    [
        'img' => 'assets/images/nft/wallet/maker.svg',
        'title' => 'Maker',
        'desc' => 'Learn about how to get the wallet and much more clicking',
    ],
    [
        'img' => 'assets/images/nft/wallet/nuo.svg',
        'title' => 'NUO',
        'desc' => 'Learn about how to get the wallet and much more clicking',
    ],
    [
        'img' => 'assets/images/nft/wallet/PoolTogether.svg',
        'title' => 'PoolTogether',
        'desc' => 'Learn about how to get the wallet and much more clicking',
    ],
    [
        'img' => 'assets/images/nft/wallet/sablier.svg',
        'title' => 'Sablier',
        'desc' => 'Learn about how to get the wallet and much more clicking',
    ],
    [
        'img' => 'assets/images/nft/wallet/set.svg',
        'title' => 'Set',
        'desc' => 'Learn about how to get the wallet and much more clicking',
    ],
    [
        'img' => 'assets/images/nft/wallet/uniswap.svg',
        'title' => 'Uniswap',
        'desc' => 'Learn about how to get the wallet and much more clicking',
    ],
    [
        'img' => 'assets/images/nft/wallet/zerion.svg',
        'title' => 'Zerion',
        'desc' => 'Learn about how to get the wallet and much more clicking',
    ]
];
@endphp

@foreach ($wallets as $item)
    <div class="group relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-800 hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out">
        <div class="py-10 bg-gradient-to-r to-orange-600/70 from-indigo-600/70"></div>
        <div class="p-6 pt-0 -mt-10 text-center">
            <img src="{{ asset($item['img']) }}" class="size-20 p-4 rounded-full bg-white dark:bg-slate-900 shadow-lg dark:shadow-gray-800 mx-auto" alt="">

            <div class="mt-4">
                <h5 class="text-xl font-semibold mb-3">{{ $item['title'] }}</h5>
                <p class="text-slate-400">{{ $item['desc'] }} <a href="" class="text-indigo-600 font-semibold">here <i class="uil uil-arrow-right"></i></a></p>
            </div>
        </div>
    </div>
@endforeach