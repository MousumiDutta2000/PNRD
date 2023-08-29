<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Import the User model if you're using it

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // You can use DB facade to insert data
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => Hash::make('password'),
            'userID' => '12345',
            'level_id' => 1, // Replace with the appropriate level_id
            'role_id' => 1,  // Replace with the appropriate role_id
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Or, you can use the User model if you have it
        // User::create([
        //     'name' => 'John Doe',
        //     'email' => 'john@example.com',
        //     'password' => Hash::make('password'),
        //     'userID' => '12345',
        //     'level_id' => 1, // Replace with the appropriate level_id
        //     'role_id' => 1,  // Replace with the appropriate role_id
        // ]);
    }
}