@php
$tables = [
    [
        'img' => 'assets/images/gym/icon/bench-press.png',
        'title' => 'Deadlift',
        'time' => "06AM - 07AM",
        'groups' => '["monday", "wednesday", "friday"]',
    ],
    [
        'img' => 'assets/images/gym/icon/chest-expander.png',
        'title' => 'Back squat',
        'time' => "07AM - 08AM",
        'groups' => '["monday", "wednesday", "friday"]',
    ],
    [
        'img' => 'assets/images/gym/icon/dumbbell.png',
        'title' => 'Bench Press',
        'time' => "08AM - 09AM",
        'groups' => '["tuesday", "thursday", "saturday"]',
    ],
    [
        'img' => 'assets/images/gym/icon/gymnastic-rings.png',
        'title' => 'Dumbbell',
        'time' => "09AM - 10AM",
        'groups' => '["monday", "wednesday", "friday"]',
    ],
    [
        'img' => 'assets/images/gym/icon/hand-grip.png',
        'title' => 'Pushups',
        'time' => "11AM - 12PM",
        'groups' => '["tuesday", "thursday", "saturday"]',
    ],
    [
        'img' => 'assets/images/gym/icon/skipping-rope.png',
        'title' => 'Chest',
        'time' => "05PM - 06PM",
        'groups' => '["monday", "wednesday", "friday"]',
    ],
    [
        'img' => 'assets/images/gym/icon/kettlebell.png',
        'title' => 'Kettlebell',
        'time' => "06PM - 07PM",
        'groups' => '["tuesday", "thursday", "saturday"]',
    ],
    [
        'img' => 'assets/images/gym/icon/man.png',
        'title' => 'Pullup',
        'time' => "07PM - 08PM",
        'groups' => '["monday", "wednesday", "friday"]',
    ],
    [
        'img' => 'assets/images/gym/icon/pool.png',
        'title' => 'Biceps',
        'time' => "08PM - 09PM",
        'groups' => '["tuesday", "thursday", "saturday"]',
    ],
    [
        'img' => 'assets/images/gym/icon/punching-bag-2.png',
        'title' => 'Triceps',
        'time' => "09PM - 10PM",
        'groups' => '["monday", "wednesday", "friday"]',
    ],
    [
        'img' => 'assets/images/gym/icon/punching-bag.png',
        'title' => 'Legs',
        'time' => "11PM - 12AM",
        'groups' => '["tuesday", "thursday", "saturday"]',
    ]
];
@endphp

@foreach ($tables as $item)
    <div class="lg:w-1/6 md:w-1/4 w-1/2 picture-item p-4" data-groups='{{ $item['groups'] }}'>
        <div class="text-center p-6 shadow-sm dark:shadow-gray-800 rounded-md">
            <img src="{{ asset($item['img']) }}" class="size-16 mx-auto" alt="">

            <div class="content mt-6">
                <h5 class="font-semibold text-lg">{{ $item['title'] }}</h5>
                <small class="text-slate-400 mb-0">{{ $item['time'] }}</small>
            </div>
        </div>
    </div>
@endforeach