<?php

namespace Database\Seeders;

use App\Models\ListingPortal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ListingPortalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ListingPortal::insert([
            ['listing_id' => 1,  'portal_id' => 1],
            ['listing_id' => 1,  'portal_id' => 2],
            ['listing_id' => 1,  'portal_id' => 3],
            ['listing_id' => 2,  'portal_id' => 1],
            ['listing_id' => 2,  'portal_id' => 3],
            ['listing_id' => 3,  'portal_id' => 2],
            ['listing_id' => 3,  'portal_id' => 3],
            ['listing_id' => 4,  'portal_id' => 1],
            ['listing_id' => 4,  'portal_id' => 2],
            ['listing_id' => 4,  'portal_id' => 3],
            ['listing_id' => 5,  'portal_id' => 1],
            ['listing_id' => 6,  'portal_id' => 1],
            ['listing_id' => 6,  'portal_id' => 2],
            ['listing_id' => 6,  'portal_id' => 3],
            ['listing_id' => 7,  'portal_id' => 1],
            ['listing_id' => 7,  'portal_id' => 3],
            ['listing_id' => 8,  'portal_id' => 2],
            ['listing_id' => 8,  'portal_id' => 3],
            ['listing_id' => 9,  'portal_id' => 3],
        ]);
    }
}
