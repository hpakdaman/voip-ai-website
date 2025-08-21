<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Carbon\Carbon;

class DemoBooking extends Model
{
    protected $fillable = [
        'availability_slot_id',
        'first_name',
        'last_name', 
        'email',
        'phone',
        'company',
        'industry',
        'requirements',
        'scheduled_at',
        'timezone',
        'status',
        'meeting_link',
        'google_event_id',
        'notes',
        'user_id'
    ];

    protected $casts = [
        'scheduled_at' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function availabilitySlot(): BelongsTo
    {
        return $this->belongsTo(AvailabilitySlot::class);
    }

    public function getFullNameAttribute(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getFormattedScheduledAtAttribute(): string
    {
        return $this->scheduled_at->setTimezone($this->timezone)->format('F j, Y \a\t g:i A T');
    }

    public function scopeUpcoming($query)
    {
        return $query->where('scheduled_at', '>', now())
                    ->where('status', '!=', 'cancelled');
    }

    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeConfirmed($query)
    {
        return $query->where('status', 'confirmed');
    }

    public function isEditable(): bool
    {
        return in_array($this->status, ['pending', 'confirmed']) && 
               $this->scheduled_at > now()->addHours(2);
    }
}
