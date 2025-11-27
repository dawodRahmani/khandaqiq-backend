<?php

namespace Database\Seeders;

use App\Models\ContactWay;
use App\Models\Language;
use Illuminate\Database\Seeder;

class ContactWaySeeder extends Seeder
{
    public function run(): void
    {
        $contactWays = [
            // English
            'en' => [
                'title' => 'Contact Information',
                'address' => 'Kabul, Afghanistan - Main Office, Street 10, District 4',
                'email_1' => 'info@khandaqiq.com',
                'email_2' => 'support@khandaqiq.com',
                'phone_1' => '+93 700 000 000',
                'phone_2' => '+93 799 999 999',
            ],
            // Persian (Dari)
            'fa' => [
                'title' => 'اطلاعات تماس',
                'address' => 'کابل، افغانستان - دفتر مرکزی، خیابان ۱۰، ناحیه ۴',
                'email_1' => 'info@khandaqiq.com',
                'email_2' => 'support@khandaqiq.com',
                'phone_1' => '+93 700 000 000',
                'phone_2' => '+93 799 999 999',
            ],
            // Russian
            'ru' => [
                'title' => 'Контактная информация',
                'address' => 'Кабул, Афганистан - Главный офис, улица 10, район 4',
                'email_1' => 'info@khandaqiq.com',
                'email_2' => 'support@khandaqiq.com',
                'phone_1' => '+93 700 000 000',
                'phone_2' => '+93 799 999 999',
            ],
        ];

        foreach ($contactWays as $langCode => $data) {
            $language = Language::where('code', $langCode)->first();

            if ($language) {
                ContactWay::updateOrCreate(
                    ['language_id' => $language->id],
                    array_merge($data, ['language_id' => $language->id])
                );
            }
        }
    }
}
