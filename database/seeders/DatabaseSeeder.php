<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin users
        $this->call(AdminUserSeeder::class);
        
        // Create availability slots  
        $this->call(AvailabilitySlotSeeder::class);
    }
}
