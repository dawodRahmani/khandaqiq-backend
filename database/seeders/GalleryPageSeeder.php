<?php

namespace Database\Seeders;

use App\Models\GalleryPage;
use App\Models\Language;
use Illuminate\Database\Seeder;

class GalleryPageSeeder extends Seeder
{
    public function run(): void
    {
        $galleryPages = [
            // English
            'en' => [
                'slide_title_1' => 'Our Gallery',
                'slide_subtitle_1' => 'Capturing moments of excellence and achievement',
                'slide_image_1' => 'https://images.unsplash.com/photo-1542038784456-1ea8e935640e?q=80&w=2070',
                'slide_title_2' => 'Visual Stories',
                'slide_subtitle_2' => 'A journey through our projects and milestones',
                'slide_image_2' => 'https://images.unsplash.com/photo-1493863641943-9b68992a8d07?q=80&w=2070',
                'slide_title_3' => 'Memorable Moments',
                'slide_subtitle_3' => 'Documenting our progress and success stories',
                'slide_image_3' => 'https://images.unsplash.com/photo-1471341971476-ae15ff5dd4ea?q=80&w=2070',
                'sort' => 1,
            ],
            // Persian (Dari)
            'fa' => [
                'slide_title_1' => 'گالری ما',
                'slide_subtitle_1' => 'ثبت لحظات برتری و موفقیت',
                'slide_image_1' => 'https://images.unsplash.com/photo-1542038784456-1ea8e935640e?q=80&w=2070',
                'slide_title_2' => 'داستان های تصویری',
                'slide_subtitle_2' => 'سفری از میان پروژه ها و دستاوردهای ما',
                'slide_image_2' => 'https://images.unsplash.com/photo-1493863641943-9b68992a8d07?q=80&w=2070',
                'slide_title_3' => 'لحظات به یاد ماندنی',
                'slide_subtitle_3' => 'مستندسازی پیشرفت و داستان های موفقیت ما',
                'slide_image_3' => 'https://images.unsplash.com/photo-1471341971476-ae15ff5dd4ea?q=80&w=2070',
                'sort' => 2,
            ],
            // Russian
            'ru' => [
                'slide_title_1' => 'Наша галерея',
                'slide_subtitle_1' => 'Запечатлевая моменты совершенства и достижений',
                'slide_image_1' => 'https://images.unsplash.com/photo-1542038784456-1ea8e935640e?q=80&w=2070',
                'slide_title_2' => 'Визуальные истории',
                'slide_subtitle_2' => 'Путешествие через наши проекты и вехи',
                'slide_image_2' => 'https://images.unsplash.com/photo-1493863641943-9b68992a8d07?q=80&w=2070',
                'slide_title_3' => 'Памятные моменты',
                'slide_subtitle_3' => 'Документируя наш прогресс и истории успеха',
                'slide_image_3' => 'https://images.unsplash.com/photo-1471341971476-ae15ff5dd4ea?q=80&w=2070',
                'sort' => 3,
            ],
        ];

        foreach ($galleryPages as $langCode => $data) {
            $language = Language::where('code', $langCode)->first();

            if ($language) {
                GalleryPage::updateOrCreate(
                    ['language_id' => $language->id],
                    array_merge($data, ['language_id' => $language->id])
                );
            }
        }
    }
}
