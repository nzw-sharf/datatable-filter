<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Listing::insert([
            [
                'title' => 'Maimoon Gardens by Fakhruddin Properties', 
                'description' => "A modern property provides a range of amenities ensuring a comfortable living. The project's location offers a well-developed infrastructure. Residents can find shared swimming pool, barbecue area, security, balcony, children's play area, built-in wardrobe, built-in kitchen appliances, shared gym and entertainment options in proximity." , 
                'price' => 950000 , 
                'type' => 'Apartment' , 
                'bedroom_id' => 2 , 
                'bathroom_id' => 1 , 
                'status' => 'active'
            ],
            [
                'title' => 'Vida Dubai Mall - Emaar', 
                'description' => "A modern property provides a range of amenities ensuring a comfortable living. The project's location offers a well-developed infrastructure. Residents can find central air conditioning, children's play area, built-in kitchen appliances, covered parking, balcony, shared swimming pool, security, shared gym, concierge service and entertainment options in proximity." , 
                'price' => 4500000 , 
                'type' => 'Apartment' , 
                'bedroom_id' => 3 , 
                'bathroom_id' => 3 , 
                'status' => 'active'
            ],
            [
                'title' => 'Al Badia Residences', 
                'description' => "A modern property provides a range of amenities ensuring a comfortable living. The project's location offers a well-developed infrastructure. Residents can find central air conditioning, children's play area, built-in kitchen appliances, covered parking, balcony, shared swimming pool, security, shared gym, concierge service and entertainment options in proximity." , 
                'price' => 3500000 , 
                'type' => 'Apartment' , 
                'bedroom_id' => 4 , 
                'bathroom_id' => 5 , 
                'status' => 'active'
            ],
            [
                'title' => 'Signature Villas Frond J', 
                'description' => "A modern property provides a range of amenities ensuring a comfortable living. The project's location offers a well-developed infrastructure. Residents can find central air conditioning, children's play area, built-in kitchen appliances, covered parking, balcony, shared swimming pool, security, shared gym, concierge service and entertainment options in proximity." , 
                'price' => 95000000 , 
                'type' => 'Villa' , 
                'bedroom_id' => 6 , 
                'bathroom_id' => 6 , 
                'status' => 'active'
            ],
            [
                'title' => 'District One Villas', 
                'description' => "A modern property provides a range of amenities ensuring a comfortable living. The project's location offers a well-developed infrastructure. Residents can find central air conditioning, children's play area, built-in kitchen appliances, covered parking, balcony, shared swimming pool, security, shared gym, concierge service and entertainment options in proximity." , 
                'price' => 12000000 , 
                'type' => 'Villa' , 
                'bedroom_id' => 5 , 
                'bathroom_id' => 5 , 
                'status' => 'active'
            ],
            [
                'title' => 'Camelia', 
                'description' => "A modern property provides a range of amenities ensuring a comfortable living. The project's location offers a well-developed infrastructure. Residents can find central air conditioning, children's play area, built-in kitchen appliances, covered parking, balcony, shared swimming pool, security, shared gym, concierge service and entertainment options in proximity." , 
                'price' => 1683000 , 
                'type' => 'Townhouse' , 
                'bedroom_id' => 5 , 
                'bathroom_id' => 4 , 
                'status' => 'active'
            ],
            [
                'title' => 'Cherry Woods', 
                'description' => "A modern property provides a range of amenities ensuring a comfortable living. The project's location offers a well-developed infrastructure. Residents can find central air conditioning, children's play area, built-in kitchen appliances, covered parking, balcony, shared swimming pool, security, shared gym, concierge service and entertainment options in proximity." , 
                'price' => 3150000 , 
                'type' => 'Townhouse' , 
                'bedroom_id' => 4 , 
                'bathroom_id' => 4 , 
                'status' => 'active'
            ],
            [
                'title' => 'Mansion 1', 
                'description' => "A modern property provides a range of amenities ensuring a comfortable living. The project's location offers a well-developed infrastructure. Residents can find central air conditioning, children's play area, built-in kitchen appliances, covered parking, balcony, shared swimming pool, security, shared gym, concierge service and entertainment options in proximity." , 
                'price' => 60000000 , 
                'type' => 'Penthouse' , 
                'bedroom_id' => 5 , 
                'bathroom_id' => 5 , 
                'status' => 'active'
            ],
            [
                'title' => 'St Regis The Residences', 
                'description' => "A modern property provides a range of amenities ensuring a comfortable living. The project's location offers a well-developed infrastructure. Residents can find central air conditioning, children's play area, built-in kitchen appliances, covered parking, balcony, shared swimming pool, security, shared gym, concierge service and entertainment options in proximity." , 
                'price' => 88000000 , 
                'type' => 'Penthouse' , 
                'bedroom_id' => 6 , 
                'bathroom_id' => 6 , 
                'status' => 'active'
            ],
        ]);
    }
}
