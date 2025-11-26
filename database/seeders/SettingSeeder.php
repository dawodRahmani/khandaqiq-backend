<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing settings before seeding
        Setting::query()->delete();

        $settings = [
            [
                'key' => 'site_name',
                'value' => 'Khan Daqiq',
                'type' => 'text',
            ],
            [
                'key' => 'site_name_persian',
                'value' => 'خان دقیق',
                'type' => 'text',
            ],
            [
                'key' => 'site_name_russian',
                'value' => 'Хан Дакик',
                'type' => 'text',
            ],
            [
                'key' => 'site_logo',
                'value' => 'https://images.unsplash.com/photo-1599305445671-ac291c95aaa9?w=400&h=400&fit=crop',
                'type' => 'image',
            ],
            [
                'key' => 'email',
                'value' => 'info@khandaqiq.com',
                'type' => 'text',
            ],
            [
                'key' => 'whatsapp',
                'value' => '+93 700 123 456',
                'type' => 'text',
            ],
            [
                'key' => 'phone_number',
                'value' => '+93 20 123 4567',
                'type' => 'text',
            ],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
