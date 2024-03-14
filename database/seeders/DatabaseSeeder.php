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
        $this->call(BathroomSeeder::class);
        $this->call(BedroomSeeder::class);
        $this->call(PortalSeeder::class);
        $this->call(ListingSeeder::class);
        $this->call(ListingPortalSeeder::class);
    }
}
