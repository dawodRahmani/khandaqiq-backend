<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NewsPage;
use App\Models\Language;

class NewsPageSeeder extends Seeder
{
    public function run(): void
    {
        // Get all languages
        $languages = Language::all();

        // NewsPage data for each language (3 entries - one per language due to unique constraint)
        $newsPages = [
            [
                'language_id' => $languages->where('code', 'fa')->first()?->id ?? 1,
                'slide_title_1' => 'آخرین اخبار خان دقیق',
                'slide_subtitle_1' => 'با ما در جریان آخرین رویدادها و اخبار مهم قرار بگیرید',
                'slide_image_1' => 'https://images.unsplash.com/photo-1504711434969-e33886168f5c?w=1200&h=400&fit=crop',
                'slide_title_2' => 'اخبار ویژه',
                'slide_subtitle_2' => 'مهمترین اخبار روز را از دست ندهید',
                'slide_image_2' => 'https://images.unsplash.com/photo-1586339949216-35c2747e48d1?w=1200&h=400&fit=crop',
                'slide_title_3' => 'رویدادهای مهم',
                'slide_subtitle_3' => 'پوشش کامل رویدادهای مهم و تاثیرگذار',
                'slide_image_3' => 'https://images.unsplash.com/photo-1557804506-669a67965ba0?w=1200&h=400&fit=crop',
                'sort' => 1,
            ],
            [
                'language_id' => $languages->where('code', 'en')->first()?->id ?? 2,
                'slide_title_1' => 'Latest Khan Daqiq News',
                'slide_subtitle_1' => 'Stay updated with the latest events and important news',
                'slide_image_1' => 'https://images.unsplash.com/photo-1504711434969-e33886168f5c?w=1200&h=400&fit=crop',
                'slide_title_2' => 'Special News',
                'slide_subtitle_2' => 'Don\'t miss the most important news of the day',
                'slide_image_2' => 'https://images.unsplash.com/photo-1586339949216-35c2747e48d1?w=1200&h=400&fit=crop',
                'slide_title_3' => 'Important Events',
                'slide_subtitle_3' => 'Complete coverage of important and impactful events',
                'slide_image_3' => 'https://images.unsplash.com/photo-1557804506-669a67965ba0?w=1200&h=400&fit=crop',
                'sort' => 2,
            ],
            [
                'language_id' => $languages->where('code', 'ru')->first()?->id ?? 3,
                'slide_title_1' => 'Последние новости Хан Дакик',
                'slide_subtitle_1' => 'Будьте в курсе последних событий и важных новостей',
                'slide_image_1' => 'https://images.unsplash.com/photo-1504711434969-e33886168f5c?w=1200&h=400&fit=crop',
                'slide_title_2' => 'Специальные новости',
                'slide_subtitle_2' => 'Не пропустите самые важные новости дня',
                'slide_image_2' => 'https://images.unsplash.com/photo-1586339949216-35c2747e48d1?w=1200&h=400&fit=crop',
                'slide_title_3' => 'Важные события',
                'slide_subtitle_3' => 'Полное освещение важных и значимых событий',
                'slide_image_3' => 'https://images.unsplash.com/photo-1557804506-669a67965ba0?w=1200&h=400&fit=crop',
                'sort' => 3,
            ],
        ];

        foreach ($newsPages as $newsPage) {
            NewsPage::updateOrCreate(
                ['language_id' => $newsPage['language_id']],
                $newsPage
            );
        }
    }
}
