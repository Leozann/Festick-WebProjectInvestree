<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Catalogue;

class CatalogueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Catalogue::create([
            'catalogue_name' => "Regular",
            'catalogue_desc' => "Free Ticket Wristband",
            'catalogue_price' => 150000,
        ]);

        Catalogue::create([
            'catalogue_name' => "VIP",
            'catalogue_desc' => "Free Ticket Wristband, VIP Viewing Area, VIP Toilet, Entrance Access",
            'catalogue_price' => 400000,
        ]);

        Catalogue::create([
            'catalogue_name' => "VVIP",
            'catalogue_desc' => "Free Ticket Wristband, VIP Viewing Area, VIP Toilet, VIP Lounge & Bar, VVIP Entrance Access. Free Merchandise, Backstage Access",
            'catalogue_price' => 3000000,
        ]);
    }
}
