<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AvailabilitySlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create availability slots for the next 14 days
        // Business hours: 9:00 AM to 6:00 PM UAE time
        // 30-minute slots
        
        $startDate = \Carbon\Carbon::now()->addDay(); // Start from tomorrow
        $endDate = $startDate->copy()->addDays(14);
        
        $timeSlots = [
            '09:00:00', '09:30:00', '10:00:00', '10:30:00', '11:00:00', '11:30:00',
            '12:00:00', '12:30:00', '13:00:00', '13:30:00', '14:00:00', '14:30:00',
            '15:00:00', '15:30:00', '16:00:00', '16:30:00', '17:00:00', '17:30:00'
        ];
        
        $current = $startDate->copy();
        
        while ($current <= $endDate) {
            // Skip weekends (Saturday and Sunday)
            if (!$current->isWeekend()) {
                foreach ($timeSlots as $timeSlot) {
                    $endTime = \Carbon\Carbon::parse($timeSlot)->addMinutes(30)->format('H:i:s');
                    
                    \App\Models\AvailabilitySlot::create([
                        'date' => $current->format('Y-m-d'),
                        'start_time' => $timeSlot,
                        'end_time' => $endTime,
                        'timezone' => 'Asia/Dubai',
                        'is_available' => true,
                        'is_recurring' => false,
                        'user_id' => null, // No specific user assigned
                        'notes' => 'Demo consultation slot'
                    ]);
                }
            }
            $current->addDay();
        }
        
        echo "Created availability slots for " . $startDate->format('Y-m-d') . " to " . $endDate->format('Y-m-d') . "\n";
    }
}
