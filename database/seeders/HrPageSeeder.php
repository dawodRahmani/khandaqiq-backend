<?php

namespace Database\Seeders;

use App\Models\HrPage;
use App\Models\Language;
use Illuminate\Database\Seeder;

class HrPageSeeder extends Seeder
{
    public function run(): void
    {
        $hrPages = [
            // English
            'en' => [
                'slide_title_1' => 'Our Team',
                'slide_subtitle_1' => 'Meet the dedicated professionals driving our success',
                'slide_image_1' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070',
                'slide_title_2' => 'Excellence in Leadership',
                'slide_subtitle_2' => 'Experienced leaders shaping the future of our industry',
                'slide_image_2' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070',
                'slide_title_3' => 'Join Our Family',
                'slide_subtitle_3' => 'Building careers and empowering talent across Afghanistan',
                'slide_image_3' => 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=2070',
                'sort' => 1,
            ],
            // Persian (Dari)
            'fa' => [
                'slide_title_1' => 'تیم ما',
                'slide_subtitle_1' => 'با متخصصان متعهدی که موفقیت ما را رقم می‌زنند آشنا شوید',
                'slide_image_1' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070',
                'slide_title_2' => 'برتری در رهبری',
                'slide_subtitle_2' => 'رهبران با تجربه که آینده صنعت ما را شکل می‌دهند',
                'slide_image_2' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070',
                'slide_title_3' => 'به خانواده ما بپیوندید',
                'slide_subtitle_3' => 'ساختن مسیر شغلی و توانمندسازی استعدادها در سراسر افغانستان',
                'slide_image_3' => 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=2070',
                'sort' => 2,
            ],
            // Russian
            'ru' => [
                'slide_title_1' => 'Наша команда',
                'slide_subtitle_1' => 'Познакомьтесь с преданными профессионалами, обеспечивающими наш успех',
                'slide_image_1' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070',
                'slide_title_2' => 'Превосходство в лидерстве',
                'slide_subtitle_2' => 'Опытные лидеры, формирующие будущее нашей отрасли',
                'slide_image_2' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070',
                'slide_title_3' => 'Присоединяйтесь к нашей семье',
                'slide_subtitle_3' => 'Строим карьеры и развиваем таланты по всему Афганистану',
                'slide_image_3' => 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=2070',
                'sort' => 3,
            ],
        ];

        foreach ($hrPages as $langCode => $data) {
            $language = Language::where('code', $langCode)->first();

            if ($language) {
                HrPage::updateOrCreate(
                    ['language_id' => $language->id],
                    array_merge($data, ['language_id' => $language->id])
                );
            }
        }
    }
}
