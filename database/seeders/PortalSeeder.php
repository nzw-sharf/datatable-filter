<?php

namespace Database\Seeders;

use App\Models\Portal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Portal::insert([
            ['name' => 'Property Finder', 'status' => 'active'],
            ['name' => 'Bayut',  'status' => 'active'],
            ['name' => 'Dubizzle', 'status' => 'active']
        ]);
    }
}
