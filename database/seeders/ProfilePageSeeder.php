<?php

namespace Database\Seeders;

use App\Models\ProfilePage;
use App\Models\Language;
use Illuminate\Database\Seeder;

class ProfilePageSeeder extends Seeder
{
    public function run(): void
    {
        $profilePages = [
            // English
            'en' => [
                'hero_image' => 'https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?q=80&w=2070',
                'hero_subtitle' => 'Industrial Processing & Mineral Stone Extraction Company',
                'about_title' => 'About Group',
                'about_message' => 'Khan Daqiq Group is one of the leading investment, mining, logistics and construction companies in Afghanistan with years of experience and professional team, providing comprehensive and diverse services.',
                'profiles_title' => 'Our Profiles',
                'reports_title' => 'Annual Reports',
                'sort' => 1,
            ],
            // Persian (Dari)
            'fa' => [
                'hero_image' => 'https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?q=80&w=2070',
                'hero_subtitle' => 'شرکت پردازش صنعتی و استخراج سنگ معدنی',
                'about_title' => 'درباره گروپ',
                'about_message' => 'گروپ کمپنی خان دقیق یکی از پیشتازان عرصه سرمایه‌گذاری، معدن، لجستیک و ساختمانی در افغانستان است که با سال‌ها تجربه و تیم متخصص، خدمات جامع و متنوعی را ارائه می‌دهد.',
                'profiles_title' => 'پروفایل های ما',
                'reports_title' => 'گزارش های سالانه',
                'sort' => 2,
            ],
            // Russian
            'ru' => [
                'hero_image' => 'https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?q=80&w=2070',
                'hero_subtitle' => 'Компания по промышленной переработке и добыче минерального камня',
                'about_title' => 'О группе',
                'about_message' => 'Группа компаний Хан Дакик является одной из ведущих инвестиционных, горнодобывающих, логистических и строительных компаний в Афганистане с многолетним опытом и профессиональной командой, предоставляющей комплексные и разнообразные услуги.',
                'profiles_title' => 'Наши профили',
                'reports_title' => 'Годовые отчеты',
                'sort' => 3,
            ],
        ];

        foreach ($profilePages as $langCode => $data) {
            $language = Language::where('code', $langCode)->first();

            if ($language) {
                ProfilePage::updateOrCreate(
                    ['language_id' => $language->id],
                    array_merge($data, ['language_id' => $language->id])
                );
            }
        }
    }
}
