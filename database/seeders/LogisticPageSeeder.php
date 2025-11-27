<?php

namespace Database\Seeders;

use App\Models\Logistic;
use App\Models\Language;
use Illuminate\Database\Seeder;

class LogisticPageSeeder extends Seeder
{
    public function run(): void
    {
        $logisticPages = [
            // English
            'en' => [
                'slide_title_1' => 'Logistics Excellence',
                'slide_subtitle_1' => 'Your trusted partner in global freight and cargo solutions',
                'slide_image_1' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070',
                'slide_title_2' => 'Worldwide Shipping',
                'slide_subtitle_2' => 'Connecting businesses across continents with reliable logistics',
                'slide_image_2' => 'https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?q=80&w=2070',
                'slide_title_3' => 'Fast & Secure',
                'slide_subtitle_3' => 'Delivering your cargo safely and on time, every time',
                'slide_image_3' => 'https://images.unsplash.com/photo-1578575437130-527eed3abbec?q=80&w=2070',
                'about_title' => 'Who We Are',
                'about_image' => 'https://images.unsplash.com/photo-1578328819058-b69f3a3b0f6b?q=80&w=2070',
                'about_message' => 'Khan Daqiq Logistics is a leading provider of comprehensive freight and cargo services. With years of experience in international trade and transportation, we offer seamless logistics solutions including air freight, sea freight, rail transport, and trucking services. Our dedicated team ensures your goods reach their destination safely and efficiently, whether across the region or around the world.',
                'operations_message' => 'We operate responsibly and efficiently in the following logistics sectors',
                'sort' => 1,
            ],
            // Persian (Dari)
            'fa' => [
                'slide_title_1' => 'برتری در لوژستیک',
                'slide_subtitle_1' => 'شریک مورد اعتماد شما در راه‌حل‌های حمل و نقل جهانی',
                'slide_image_1' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070',
                'slide_title_2' => 'حمل و نقل جهانی',
                'slide_subtitle_2' => 'اتصال کسب‌وکارها در سراسر قاره‌ها با لوژستیک قابل اعتماد',
                'slide_image_2' => 'https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?q=80&w=2070',
                'slide_title_3' => 'سریع و امن',
                'slide_subtitle_3' => 'تحویل محموله شما به صورت ایمن و به موقع، همیشه',
                'slide_image_3' => 'https://images.unsplash.com/photo-1578575437130-527eed3abbec?q=80&w=2070',
                'about_title' => 'ما که هستیم',
                'about_image' => 'https://images.unsplash.com/photo-1578328819058-b69f3a3b0f6b?q=80&w=2070',
                'about_message' => 'خان دقیق لوژستیک یک ارائه‌دهنده پیشرو خدمات جامع حمل و نقل و باربری است. با سال‌ها تجربه در تجارت بین‌المللی و حمل و نقل، ما راه‌حل‌های لوژستیکی بی‌نقص شامل حمل هوایی، حمل دریایی، حمل ریلی و خدمات کامیون ارائه می‌دهیم. تیم متعهد ما اطمینان می‌دهد که کالاهای شما به صورت ایمن و کارآمد به مقصد می‌رسند، چه در سراسر منطقه و چه در سراسر جهان.',
                'operations_message' => 'ما به گونه‌ای مسئولانه و کارآمد در بخش‌های لوژستیکی زیر فعالیت می‌کنیم',
                'sort' => 2,
            ],
            // Russian
            'ru' => [
                'slide_title_1' => 'Превосходство в логистике',
                'slide_subtitle_1' => 'Ваш надежный партнер в глобальных грузовых решениях',
                'slide_image_1' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070',
                'slide_title_2' => 'Мировые перевозки',
                'slide_subtitle_2' => 'Соединяем бизнес по всем континентам с надежной логистикой',
                'slide_image_2' => 'https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?q=80&w=2070',
                'slide_title_3' => 'Быстро и безопасно',
                'slide_subtitle_3' => 'Доставляем ваш груз безопасно и вовремя, каждый раз',
                'slide_image_3' => 'https://images.unsplash.com/photo-1578575437130-527eed3abbec?q=80&w=2070',
                'about_title' => 'Кто мы',
                'about_image' => 'https://images.unsplash.com/photo-1578328819058-b69f3a3b0f6b?q=80&w=2070',
                'about_message' => 'Хан Дакик Логистика — ведущий поставщик комплексных грузовых и транспортных услуг. Имея многолетний опыт в международной торговле и транспортировке, мы предлагаем бесперебойные логистические решения, включая авиаперевозки, морские перевозки, железнодорожный транспорт и автомобильные перевозки. Наша преданная команда гарантирует, что ваши товары достигнут места назначения безопасно и эффективно, будь то по региону или по всему миру.',
                'operations_message' => 'Мы работаем ответственно и эффективно в следующих логистических секторах',
                'sort' => 3,
            ],
        ];

        foreach ($logisticPages as $langCode => $data) {
            $language = Language::where('code', $langCode)->first();

            if ($language) {
                Logistic::updateOrCreate(
                    ['language_id' => $language->id],
                    array_merge($data, ['language_id' => $language->id])
                );
            }
        }
    }
}
