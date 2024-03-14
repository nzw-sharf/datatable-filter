<?php

namespace Database\Seeders;

use App\Models\Bedroom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BedroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bedroom::insert([
            ['name' => 'Studio', 'status' => 'active'],
            ['name' => '1 Bedroom',  'status' => 'active'],
            ['name' => '2 Bedroom', 'status' => 'active'],
            ['name' => '3 Bedroom', 'status' => 'active'],
            ['name' => '4 Bedroom', 'status' => 'active'],
            ['name' => '5 Bedroom', 'status' => 'active'],
            ['name' => '6 Bedroom', 'status' => 'active'],
            ['name' => '7 Bedroom', 'status' => 'active'],
            ['name' => '8 Bedroom', 'status' => 'active'],
            ['name' => '9 Bedroom', 'status' => 'active'],
            ['name' => '9+ Bedroom', 'status' => 'active']
        ]);
    }
}
