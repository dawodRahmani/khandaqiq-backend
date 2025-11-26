<?php

namespace Database\Seeders;

use App\Models\partnerShip;
use Illuminate\Database\Seeder;

class PartnershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * Note: Partnership table is global (not language-specific).
     * Logos and links are the same across all languages.
     */
    public function run(): void
    {
        // Clear existing partnerships
        partnerShip::query()->delete();

        // Sample partnerships with placeholder logos
        $partnerships = [
            [
                'logo_image' => 'partnerships/partner-1.png',
                'link' => 'https://example-partner1.com',
            ],
            [
                'logo_image' => 'partnerships/partner-2.png',
                'link' => 'https://example-partner2.com',
            ],
            [
                'logo_image' => 'partnerships/partner-3.png',
                'link' => 'https://example-partner3.com',
            ],
            [
                'logo_image' => 'partnerships/partner-4.png',
                'link' => 'https://example-partner4.com',
            ],
            [
                'logo_image' => 'partnerships/partner-5.png',
                'link' => 'https://example-partner5.com',
            ],
            [
                'logo_image' => 'partnerships/partner-6.png',
                'link' => 'https://example-partner6.com',
            ],
        ];

        foreach ($partnerships as $partnership) {
            partnerShip::create($partnership);
        }
    }
}
