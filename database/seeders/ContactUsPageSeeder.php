<?php

namespace Database\Seeders;

use App\Models\ContactUsPage;
use App\Models\Language;
use Illuminate\Database\Seeder;

class ContactUsPageSeeder extends Seeder
{
    public function run(): void
    {
        $contactPages = [
            // English
            'en' => [
                'slide_title_1' => 'Get In Touch',
                'slide_subtitle_1' => 'We are here to help and answer any questions you might have',
                'slide_image_1' => 'https://images.unsplash.com/photo-1423666639041-f56000c27a9a?q=80&w=2074',
                'slide_title_2' => 'Contact Us',
                'slide_subtitle_2' => 'Reach out to our team for business inquiries and partnerships',
                'slide_image_2' => 'https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?q=80&w=2072',
                'slide_title_3' => 'Connect With Us',
                'slide_subtitle_3' => 'Building relationships that drive success across Afghanistan',
                'slide_image_3' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070',
                'sort' => 1,
            ],
            // Persian (Dari)
            'fa' => [
                'slide_title_1' => 'با ما در تماس باشید',
                'slide_subtitle_1' => 'ما اینجا هستیم تا به هر سوالی که ممکن است داشته باشید کمک کنیم و پاسخ دهیم',
                'slide_image_1' => 'https://images.unsplash.com/photo-1423666639041-f56000c27a9a?q=80&w=2074',
                'slide_title_2' => 'تماس با ما',
                'slide_subtitle_2' => 'برای سوالات تجاری و شراکت‌ها با تیم ما تماس بگیرید',
                'slide_image_2' => 'https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?q=80&w=2072',
                'slide_title_3' => 'با ما ارتباط برقرار کنید',
                'slide_subtitle_3' => 'ایجاد روابطی که موفقیت را در سراسر افغانستان هدایت می‌کند',
                'slide_image_3' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070',
                'sort' => 2,
            ],
            // Russian
            'ru' => [
                'slide_title_1' => 'Свяжитесь с нами',
                'slide_subtitle_1' => 'Мы здесь, чтобы помочь и ответить на любые ваши вопросы',
                'slide_image_1' => 'https://images.unsplash.com/photo-1423666639041-f56000c27a9a?q=80&w=2074',
                'slide_title_2' => 'Контакты',
                'slide_subtitle_2' => 'Обратитесь к нашей команде по деловым вопросам и партнерству',
                'slide_image_2' => 'https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?q=80&w=2072',
                'slide_title_3' => 'Оставайтесь на связи',
                'slide_subtitle_3' => 'Строим отношения, которые ведут к успеху по всему Афганистану',
                'slide_image_3' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070',
                'sort' => 3,
            ],
        ];

        foreach ($contactPages as $langCode => $data) {
            $language = Language::where('code', $langCode)->first();

            if ($language) {
                ContactUsPage::updateOrCreate(
                    ['language_id' => $language->id],
                    array_merge($data, ['language_id' => $language->id])
                );
            }
        }
    }
}
