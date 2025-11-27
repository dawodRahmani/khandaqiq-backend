<?php

namespace Database\Seeders;

use App\Models\Servicespage;
use App\Models\Language;
use Illuminate\Database\Seeder;

class ServicesPageSeeder extends Seeder
{
    public function run(): void
    {
        $servicePages = [
            // English
            'en' => [
                'slide_title_1' => 'Our Services',
                'slide_subtitle_1' => 'Comprehensive business solutions tailored to your needs',
                'slide_image_1' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=2070',
                'slide_title_2' => 'Expert Support',
                'slide_subtitle_2' => 'Professional assistance across all our business sectors',
                'slide_image_2' => 'https://images.unsplash.com/photo-1521737711867-e3b97375f902?q=80&w=2070',
                'slide_title_3' => 'Quality Guaranteed',
                'slide_subtitle_3' => 'Delivering excellence in every service we provide',
                'slide_image_3' => 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=2070',
                'sort' => 1,
            ],
            // Persian (Dari)
            'fa' => [
                'slide_title_1' => 'خدمات ما',
                'slide_subtitle_1' => 'راه حل های جامع تجاری متناسب با نیازهای شما',
                'slide_image_1' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=2070',
                'slide_title_2' => 'پشتیبانی تخصصی',
                'slide_subtitle_2' => 'کمک حرفه ای در تمام بخش های تجاری ما',
                'slide_image_2' => 'https://images.unsplash.com/photo-1521737711867-e3b97375f902?q=80&w=2070',
                'slide_title_3' => 'کیفیت تضمین شده',
                'slide_subtitle_3' => 'ارائه برتری در هر خدمتی که ارائه می دهیم',
                'slide_image_3' => 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=2070',
                'sort' => 2,
            ],
            // Russian
            'ru' => [
                'slide_title_1' => 'Наши услуги',
                'slide_subtitle_1' => 'Комплексные бизнес-решения, адаптированные под ваши потребности',
                'slide_image_1' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=2070',
                'slide_title_2' => 'Экспертная поддержка',
                'slide_subtitle_2' => 'Профессиональная помощь во всех наших бизнес-секторах',
                'slide_image_2' => 'https://images.unsplash.com/photo-1521737711867-e3b97375f902?q=80&w=2070',
                'slide_title_3' => 'Гарантия качества',
                'slide_subtitle_3' => 'Обеспечиваем превосходство в каждой услуге',
                'slide_image_3' => 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=2070',
                'sort' => 3,
            ],
        ];

        foreach ($servicePages as $langCode => $data) {
            $language = Language::where('code', $langCode)->first();

            if ($language) {
                Servicespage::updateOrCreate(
                    ['language_id' => $language->id],
                    array_merge($data, ['language_id' => $language->id])
                );
            }
        }
    }
}
