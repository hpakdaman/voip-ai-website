@php
$places = [
    [
        'img' => 'assets/images/crypto/coin/auroracoin.png',
    ],
    [
        'img' => 'assets/images/crypto/coin/avalanche.png',
    ],
    [
        'img' => 'assets/images/crypto/coin/binance.png',
    ],
    [
        'img' => 'assets/images/crypto/coin/bitcoin-cash.png',
    ],
    [
        'img' => 'assets/images/crypto/coin/bitcoin.png',
    ],
    [
        'img' => 'assets/images/crypto/coin/bittorrent.png',
    ],
    [
        'img' => 'assets/images/crypto/coin/blocknet.png',
    ],
    [
        'img' => 'assets/images/crypto/coin/coinye.png',
    ],
    [
        'img' => 'assets/images/crypto/coin/ethereum.png',
    ],
    [
        'img' => 'assets/images/crypto/coin/kucoin.png',
    ],
    [
        'img' => 'assets/images/crypto/coin/litecoin.png',
    ],
    [
        'img' => 'assets/images/crypto/coin/monero.png',
    ],
    [
        'img' => 'assets/images/crypto/coin/potcoin.png',
    ],
    [
        'img' => 'assets/images/crypto/coin/primecoin.png',
    ],
    [
        'img' => 'assets/images/crypto/coin/zcash.png',
    ]
];
@endphp

@foreach ($places as $item)
    <li class="inline-block md:m-6 my-6 mx-1">
        <img src="{{ asset($item['img']) }}" class="shadow-md dark:shadow-gray-800 rounded-full size-20 p-4" alt="">
    </li>
@endforeach