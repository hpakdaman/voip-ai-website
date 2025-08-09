<?php

namespace App\Enums;

use App\Helpers\Enum as BaseEnum;

class Status extends BaseEnum
{
    const PENDING = 'pending';
    const CANCELLED = 'cancelled';
    const DONE = 'done';

    protected static function translations()
    {
        return [
            self::PENDING => 'Pending',
            self::CANCELLED => 'Cancelled',
            self::DONE => 'Completed'
        ];
    }

    public function attributes()
    {
        return [
            static::DONE => ['class' => 'badge badge-success py-2'],
            static::PENDING => ['class' => 'badge badge-info py-2'],
            static::CANCELLED => ['class' => 'badge badge-warning py-2'],
        ];
    }
}
