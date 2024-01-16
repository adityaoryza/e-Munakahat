<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'ADITYA ORYZA',
            'email' => 'aditya1@gmail.com',
            'email_verified_at' => now(),  // Assuming email is verified
            'password' => bcrypt('adityaoryza'),  // Securely hash the password
            'FirstName' => 'aditya',
            'LastName' => 'oryza',
            'Gender' => 'Male',  // Example value, adjust as needed
            'PhoneNum' => '7890',  // Example value, adjust as needed
        ]);

        \App\Models\User::factory()->create([
            'name' => 'ORYZA',
            'email' => 'aditya@gmail.com',
            'email_verified_at' => now(),  // Assuming email is verified
            'password' => bcrypt('adityaoryza'),  // Securely hash the password
            'FirstName' => 'oryza',
            'LastName' => 'mahendra',
            'Gender' => 'Male',  // Example value, adjust as needed
            'PhoneNum' => '67690',  // Example value, adjust as needed
        ]);
        
    }
}