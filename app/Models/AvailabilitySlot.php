<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Carbon\Carbon;

class AvailabilitySlot extends Model
{
    protected $fillable = [
        'date',
        'start_time',
        'end_time',
        'timezone',
        'is_available',
        'is_recurring',
        'recurring_days',
        'recurring_until',
        'user_id',
        'notes'
    ];

    protected $casts = [
        'date' => 'date',
        'is_available' => 'boolean',
        'is_recurring' => 'boolean',
        'recurring_days' => 'array',
        'recurring_until' => 'date',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function demoBookings(): HasMany
    {
        return $this->hasMany(DemoBooking::class, 'availability_slot_id');
    }

    public function getFormattedTimeRangeAttribute(): string
    {
        return Carbon::parse($this->start_time)->format('g:i A') . ' - ' . 
               Carbon::parse($this->end_time)->format('g:i A');
    }

    public function getDateTimeAttribute(): Carbon
    {
        return $this->date->setTimeFromTimeString($this->start_time);
    }

    public function scopeAvailable($query)
    {
        return $query->where('is_available', true);
    }

    public function scopeForDate($query, $date)
    {
        return $query->where('date', $date);
    }

    public function scopeUpcoming($query)
    {
        return $query->where('date', '>=', now()->toDateString());
    }

    public function isBooked(): bool
    {
        return DemoBooking::where('scheduled_at', $this->date_time)
                         ->whereIn('status', ['pending', 'confirmed'])
                         ->exists();
    }

    public function canBeBooked(): bool
    {
        return $this->is_available && 
               !$this->isBooked() && 
               $this->date_time > now()->addHours(2);
    }
}
