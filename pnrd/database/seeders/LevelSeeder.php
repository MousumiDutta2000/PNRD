<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define the levels data
        $levels = [
            ['level_name' => 'State'],
            ['level_name' => 'District'],
            ['level_name' => 'Block'],
            ['level_name' => 'Gram Panchayat'],
            // Add more levels as needed
        ];

        // Insert the data into the 'levels' table
        DB::table('levels')->insert($levels);
    }
}