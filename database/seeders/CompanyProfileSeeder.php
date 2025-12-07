<?php

namespace Database\Seeders;

use App\Models\CompanyProfile;
use App\Models\Language;
use Illuminate\Database\Seeder;

class CompanyProfileSeeder extends Seeder
{
    public function run(): void
    {
        $companyProfiles = [
            // English
            'en' => [
                [
                    'title' => 'Company Profile 2024',
                    'thumbnail' => 'https://images.unsplash.com/photo-1586281380349-632531db7ed4?q=80&w=2070',
                    'file' => null,
                    'sort' => 1,
                ],
                [
                    'title' => 'Mining Division Profile',
                    'thumbnail' => 'https://images.unsplash.com/photo-1578575437130-527eed3abbec?q=80&w=2070',
                    'file' => null,
                    'sort' => 2,
                ],
                [
                    'title' => 'Logistics Division Profile',
                    'thumbnail' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070',
                    'file' => null,
                    'sort' => 3,
                ],
                [
                    'title' => 'Investment Division Profile',
                    'thumbnail' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2070',
                    'file' => null,
                    'sort' => 4,
                ],
            ],
            // Persian (Dari)
            'fa' => [
                [
                    'title' => 'پروفایل شرکت ۲۰۲۴',
                    'thumbnail' => 'https://images.unsplash.com/photo-1586281380349-632531db7ed4?q=80&w=2070',
                    'file' => null,
                    'sort' => 1,
                ],
                [
                    'title' => 'پروفایل بخش معادن',
                    'thumbnail' => 'https://images.unsplash.com/photo-1578575437130-527eed3abbec?q=80&w=2070',
                    'file' => null,
                    'sort' => 2,
                ],
                [
                    'title' => 'پروفایل بخش لجستیک',
                    'thumbnail' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070',
                    'file' => null,
                    'sort' => 3,
                ],
                [
                    'title' => 'پروفایل بخش سرمایه‌گذاری',
                    'thumbnail' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2070',
                    'file' => null,
                    'sort' => 4,
                ],
            ],
            // Russian
            'ru' => [
                [
                    'title' => 'Профиль компании 2024',
                    'thumbnail' => 'https://images.unsplash.com/photo-1586281380349-632531db7ed4?q=80&w=2070',
                    'file' => null,
                    'sort' => 1,
                ],
                [
                    'title' => 'Профиль горнодобывающего подразделения',
                    'thumbnail' => 'https://images.unsplash.com/photo-1578575437130-527eed3abbec?q=80&w=2070',
                    'file' => null,
                    'sort' => 2,
                ],
                [
                    'title' => 'Профиль логистического подразделения',
                    'thumbnail' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070',
                    'file' => null,
                    'sort' => 3,
                ],
                [
                    'title' => 'Профиль инвестиционного подразделения',
                    'thumbnail' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2070',
                    'file' => null,
                    'sort' => 4,
                ],
            ],
        ];

        foreach ($companyProfiles as $langCode => $profiles) {
            $language = Language::where('code', $langCode)->first();

            if ($language) {
                foreach ($profiles as $profileData) {
                    CompanyProfile::create(
                        array_merge($profileData, ['language_id' => $language->id])
                    );
                }
            }
        }
    }
}
