<?php

namespace Database\Seeders;

use App\Models\Bathroom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BathroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bathroom::insert([
            ['name' => 1,  'status' => 'active'],
            ['name' => 2, 'status' => 'active'],
            ['name' => 3, 'status' => 'active'],
            ['name' => 4, 'status' => 'active'],
            ['name' => 5, 'status' => 'active'],
            ['name' => 6, 'status' => 'active'],
            ['name' => 7, 'status' => 'active'],
            ['name' => 8, 'status' => 'active'],
            ['name' => 9, 'status' => 'active'],
            ['name' => 10, 'status' => 'active']
        ]);
    }
}
