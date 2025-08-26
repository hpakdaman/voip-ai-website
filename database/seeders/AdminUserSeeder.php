<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminUsers = [
            [
                'name' => 'Sawtic Admin',
                'email' => 'admin@sawtic.com',
                'password' => 'admin123'
            ],
            [
                'name' => 'Ashkan Hayati',
                'email' => 'afhayati@gmail.com',
                'password' => 'ashkan!@#'
            ],
            [
                'name' => 'Hamed Pakdaman', 
                'email' => 'pakdaman.it@gmail.com',
                'password' => 'hamedPW123#@!'
            ]
        ];

        foreach ($adminUsers as $userData) {
            // Check if user already exists
            $existingUser = User::where('email', $userData['email'])->first();
            
            if ($existingUser) {
                // Update existing user password
                $existingUser->update([
                    'name' => $userData['name'],
                    'password' => Hash::make($userData['password'])
                ]);
                
                $this->command->info("Updated existing user: {$userData['email']}");
            } else {
                // Create new user
                User::create([
                    'name' => $userData['name'],
                    'email' => $userData['email'],
                    'password' => Hash::make($userData['password'])
                ]);
                
                $this->command->info("Created new user: {$userData['email']}");
            }
        }
        
        $this->command->info('Admin users seeding completed successfully!');
    }
}