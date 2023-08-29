<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define the roles data
        $roles = [
            ['role_name' => 'admin'],
            ['role_name' => 'supervisor'],
            ['role_name' => 'manager'],
            // Add more roles as needed
        ];

        // Insert the data into the 'roles' table
        DB::table('roles')->insert($roles);
    }
}