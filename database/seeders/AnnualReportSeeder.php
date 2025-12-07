<?php

namespace Database\Seeders;

use App\Models\AnnualReport;
use App\Models\Language;
use Illuminate\Database\Seeder;

class AnnualReportSeeder extends Seeder
{
    public function run(): void
    {
        $annualReports = [
            // English
            'en' => [
                [
                    'title' => 'Annual Report 2024',
                    'date' => '2024',
                    'thumbnail' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=2070',
                    'file' => null,
                    'sort' => 1,
                ],
                [
                    'title' => 'Annual Report 2023',
                    'date' => '2023',
                    'thumbnail' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=2070',
                    'file' => null,
                    'sort' => 2,
                ],
                [
                    'title' => 'Annual Report 2022',
                    'date' => '2022',
                    'thumbnail' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=2070',
                    'file' => null,
                    'sort' => 3,
                ],
                [
                    'title' => 'Annual Report 2021',
                    'date' => '2021',
                    'thumbnail' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=2070',
                    'file' => null,
                    'sort' => 4,
                ],
            ],
            // Persian (Dari)
            'fa' => [
                [
                    'title' => 'گزارش سالانه ۲۰۲۴',
                    'date' => '۲۰۲۴',
                    'thumbnail' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=2070',
                    'file' => null,
                    'sort' => 1,
                ],
                [
                    'title' => 'گزارش سالانه ۲۰۲۳',
                    'date' => '۲۰۲۳',
                    'thumbnail' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=2070',
                    'file' => null,
                    'sort' => 2,
                ],
                [
                    'title' => 'گزارش سالانه ۲۰۲۲',
                    'date' => '۲۰۲۲',
                    'thumbnail' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=2070',
                    'file' => null,
                    'sort' => 3,
                ],
                [
                    'title' => 'گزارش سالانه ۲۰۲۱',
                    'date' => '۲۰۲۱',
                    'thumbnail' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=2070',
                    'file' => null,
                    'sort' => 4,
                ],
            ],
            // Russian
            'ru' => [
                [
                    'title' => 'Годовой отчет 2024',
                    'date' => '2024',
                    'thumbnail' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=2070',
                    'file' => null,
                    'sort' => 1,
                ],
                [
                    'title' => 'Годовой отчет 2023',
                    'date' => '2023',
                    'thumbnail' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=2070',
                    'file' => null,
                    'sort' => 2,
                ],
                [
                    'title' => 'Годовой отчет 2022',
                    'date' => '2022',
                    'thumbnail' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=2070',
                    'file' => null,
                    'sort' => 3,
                ],
                [
                    'title' => 'Годовой отчет 2021',
                    'date' => '2021',
                    'thumbnail' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=2070',
                    'file' => null,
                    'sort' => 4,
                ],
            ],
        ];

        foreach ($annualReports as $langCode => $reports) {
            $language = Language::where('code', $langCode)->first();

            if ($language) {
                foreach ($reports as $reportData) {
                    AnnualReport::create(
                        array_merge($reportData, ['language_id' => $language->id])
                    );
                }
            }
        }
    }
}
