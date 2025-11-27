<?php

namespace Database\Seeders;

use App\Models\Petroleum;
use App\Models\Language;
use Illuminate\Database\Seeder;

class PetroleumPageSeeder extends Seeder
{
    public function run(): void
    {
        $petroleumPages = [
            // English
            'en' => [
                'slide_title_1' => 'Oil & Gas Excellence',
                'slide_subtitle_1' => 'Leading energy solutions for sustainable development and industrial growth',
                'slide_image_1' => 'https://images.unsplash.com/photo-1513828583688-c52646db42da?q=80&w=2070',
                'slide_title_2' => 'Energy Innovation',
                'slide_subtitle_2' => 'Pioneering advanced technologies in petroleum extraction and processing',
                'slide_image_2' => 'https://images.unsplash.com/photo-1518709766631-a6a7f45921c3?q=80&w=2070',
                'slide_title_3' => 'Reliable Supply',
                'slide_subtitle_3' => 'Ensuring consistent energy supply to power economic progress',
                'slide_image_3' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?q=80&w=2070',
                'about_title' => 'Who We Are',
                'about_image' => 'https://images.unsplash.com/photo-1504711434969-e33886168f5c?q=80&w=2070',
                'about_message' => 'Khan Daqiq Petroleum is a leading energy company specializing in oil and gas exploration, production, and distribution. With decades of experience in the energy sector, we are committed to delivering reliable and sustainable energy solutions. Our operations span across exploration, drilling, refining, and distribution, utilizing state-of-the-art technology and adhering to the highest safety and environmental standards. We play a vital role in powering Afghanistan\'s economic growth and industrial development.',
                'operations_message' => 'We operate responsibly and sustainably in the following energy sectors',
                'sort' => 1,
            ],
            // Persian (Dari)
            'fa' => [
                'slide_title_1' => 'برتری در نفت و گاز',
                'slide_subtitle_1' => 'راه‌حل‌های انرژی پیشرو برای توسعه پایدار و رشد صنعتی',
                'slide_image_1' => 'https://images.unsplash.com/photo-1513828583688-c52646db42da?q=80&w=2070',
                'slide_title_2' => 'نوآوری در انرژی',
                'slide_subtitle_2' => 'پیشگامی در فناوری‌های پیشرفته استخراج و پردازش نفت',
                'slide_image_2' => 'https://images.unsplash.com/photo-1518709766631-a6a7f45921c3?q=80&w=2070',
                'slide_title_3' => 'تامین مطمئن',
                'slide_subtitle_3' => 'تضمین تامین مداوم انرژی برای پیشرفت اقتصادی',
                'slide_image_3' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?q=80&w=2070',
                'about_title' => 'ما که هستیم',
                'about_image' => 'https://images.unsplash.com/photo-1504711434969-e33886168f5c?q=80&w=2070',
                'about_message' => 'خان دقیق پترولیوم یک شرکت انرژی پیشرو در زمینه اکتشاف، تولید و توزیع نفت و گاز است. با دهه‌ها تجربه در بخش انرژی، ما متعهد به ارائه راه‌حل‌های انرژی قابل اعتماد و پایدار هستیم. عملیات ما شامل اکتشاف، حفاری، پالایش و توزیع می‌شود و از فناوری‌های پیشرفته استفاده کرده و بالاترین استانداردهای ایمنی و محیط زیستی را رعایت می‌کنیم. ما نقش حیاتی در تأمین انرژی رشد اقتصادی و توسعه صنعتی افغانستان داریم.',
                'operations_message' => 'ما به گونه‌ای مسئولانه و پایدار در بخش‌های انرژی زیر فعالیت می‌کنیم',
                'sort' => 2,
            ],
            // Russian
            'ru' => [
                'slide_title_1' => 'Превосходство в нефти и газе',
                'slide_subtitle_1' => 'Ведущие энергетические решения для устойчивого развития и промышленного роста',
                'slide_image_1' => 'https://images.unsplash.com/photo-1513828583688-c52646db42da?q=80&w=2070',
                'slide_title_2' => 'Энергетические инновации',
                'slide_subtitle_2' => 'Передовые технологии в добыче и переработке нефти',
                'slide_image_2' => 'https://images.unsplash.com/photo-1518709766631-a6a7f45921c3?q=80&w=2070',
                'slide_title_3' => 'Надежные поставки',
                'slide_subtitle_3' => 'Обеспечение стабильных поставок энергии для экономического прогресса',
                'slide_image_3' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?q=80&w=2070',
                'about_title' => 'Кто мы',
                'about_image' => 'https://images.unsplash.com/photo-1504711434969-e33886168f5c?q=80&w=2070',
                'about_message' => 'Хан Дакик Петролеум — ведущая энергетическая компания, специализирующаяся на разведке, добыче и распределении нефти и газа. Обладая многолетним опытом в энергетическом секторе, мы стремимся предоставлять надежные и устойчивые энергетические решения. Наша деятельность охватывает разведку, бурение, переработку и дистрибуцию с использованием передовых технологий и соблюдением высочайших стандартов безопасности и охраны окружающей среды. Мы играем важную роль в обеспечении энергией экономического роста и промышленного развития Афганистана.',
                'operations_message' => 'Мы работаем ответственно и устойчиво в следующих энергетических секторах',
                'sort' => 3,
            ],
        ];

        foreach ($petroleumPages as $langCode => $data) {
            $language = Language::where('code', $langCode)->first();

            if ($language) {
                Petroleum::updateOrCreate(
                    ['language_id' => $language->id],
                    array_merge($data, ['language_id' => $language->id])
                );
            }
        }
    }
}
