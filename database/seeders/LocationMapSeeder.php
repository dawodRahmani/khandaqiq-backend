<?php

namespace Database\Seeders;

use App\Models\LocationMap;
use Illuminate\Database\Seeder;

class LocationMapSeeder extends Seeder
{
    public function run(): void
    {
        $locations = [
            [
                'title' => 'Khan Daqiq Head Office - Kabul',
                'address' => 'Shahr-e-Naw Park, Kabul, Afghanistan',
                'latitude' => 34.5281,
                'longitude' => 69.1723,
            ],
            [
                'title' => 'Khan Daqiq Branch - Mazar-i-Sharif',
                'address' => 'Khorasan Market, Mazar-i-Sharif, Afghanistan',
                'latitude' => 36.7069,
                'longitude' => 67.1147,
            ],
        ];

        foreach ($locations as $location) {
            LocationMap::updateOrCreate(
                [
                    'title' => $location['title'],
                ],
                $location
            );
        }
    }
}
