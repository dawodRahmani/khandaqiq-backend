<?php

namespace Database\Seeders;

use App\Models\MiningPage;
use App\Models\Language;
use Illuminate\Database\Seeder;

class MiningPageSeeder extends Seeder
{
    public function run(): void
    {
        $miningPages = [
            // English
            'en' => [
                'slide_title_1' => 'Mining Excellence',
                'slide_subtitle_1' => 'Industrial Processing & Mineral Stone Extraction Company',
                'slide_image_1' => 'https://images.unsplash.com/photo-1578328819058-b69f3a3b0f6b?q=80&w=2070',
                'slide_title_2' => 'Sustainable Mining',
                'slide_subtitle_2' => 'Extracting value from the earth with responsibility',
                'slide_image_2' => 'https://images.unsplash.com/photo-1605000797499-95a51c5269ae?q=80&w=2070',
                'slide_title_3' => 'Modern Technology',
                'slide_subtitle_3' => 'Using cutting-edge equipment for efficient extraction',
                'slide_image_3' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070',
                'about_title' => 'Who We Are',
                'about_image' => 'https://images.unsplash.com/photo-1504711434969-e33886168f5c?q=80&w=2070',
                'about_message' => 'Khan Daqiq Mining is a leading company in mineral extraction and processing. With years of experience in the mining industry, we are committed to sustainable practices while delivering high-quality minerals to our clients. Our team of experts uses modern technology and equipment to ensure efficient and environmentally responsible mining operations across Afghanistan and the region.',
                'operations_message' => 'We operate responsibly and sustainably in the following sectors',
                'sort' => 1,
            ],
            // Persian (Dari)
            'fa' => [
                'slide_title_1' => 'برتری در معدنکاری',
                'slide_subtitle_1' => 'شرکت پردازش صنعتی و استخراج سنگ معدن',
                'slide_image_1' => 'https://images.unsplash.com/photo-1578328819058-b69f3a3b0f6b?q=80&w=2070',
                'slide_title_2' => 'معدنکاری پایدار',
                'slide_subtitle_2' => 'استخراج ارزش از زمین با مسئولیت',
                'slide_image_2' => 'https://images.unsplash.com/photo-1605000797499-95a51c5269ae?q=80&w=2070',
                'slide_title_3' => 'تکنولوژی مدرن',
                'slide_subtitle_3' => 'استفاده از تجهیزات پیشرفته برای استخراج کارآمد',
                'slide_image_3' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070',
                'about_title' => 'ما که هستیم',
                'about_image' => 'https://images.unsplash.com/photo-1504711434969-e33886168f5c?q=80&w=2070',
                'about_message' => 'خان دقیق معادن یک شرکت پیشرو در استخراج و پردازش مواد معدنی است. با سال‌ها تجربه در صنعت معدن، ما متعهد به رویه‌های پایدار هستیم و در عین حال مواد معدنی با کیفیت بالا را به مشتریان خود ارائه می‌دهیم. تیم متخصصان ما از تکنولوژی و تجهیزات مدرن استفاده می‌کند تا عملیات معدنکاری کارآمد و مسئولانه از نظر محیط زیست را در سراسر افغانستان و منطقه تضمین کند.',
                'operations_message' => 'ما به گونه ای مسئوولانه و پایدار در بخش های ذیل فعالیت میکنیم',
                'sort' => 2,
            ],
            // Russian
            'ru' => [
                'slide_title_1' => 'Превосходство в горнодобыче',
                'slide_subtitle_1' => 'Компания по промышленной переработке и добыче минерального камня',
                'slide_image_1' => 'https://images.unsplash.com/photo-1578328819058-b69f3a3b0f6b?q=80&w=2070',
                'slide_title_2' => 'Устойчивая добыча',
                'slide_subtitle_2' => 'Извлечение ценности из земли с ответственностью',
                'slide_image_2' => 'https://images.unsplash.com/photo-1605000797499-95a51c5269ae?q=80&w=2070',
                'slide_title_3' => 'Современные технологии',
                'slide_subtitle_3' => 'Использование передового оборудования для эффективной добычи',
                'slide_image_3' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070',
                'about_title' => 'Кто мы',
                'about_image' => 'https://images.unsplash.com/photo-1504711434969-e33886168f5c?q=80&w=2070',
                'about_message' => 'Хан Дакик Майнинг — ведущая компания в области добычи и переработки полезных ископаемых. Имея многолетний опыт работы в горнодобывающей отрасли, мы привержены устойчивым практикам, предоставляя при этом высококачественные минералы нашим клиентам. Наша команда экспертов использует современные технологии и оборудование для обеспечения эффективных и экологически ответственных горнодобывающих операций по всему Афганистану и региону.',
                'operations_message' => 'Мы работаем ответственно и устойчиво в следующих секторах',
                'sort' => 3,
            ],
        ];

        foreach ($miningPages as $langCode => $data) {
            $language = Language::where('code', $langCode)->first();

            if ($language) {
                MiningPage::updateOrCreate(
                    ['language_id' => $language->id],
                    array_merge($data, ['language_id' => $language->id])
                );
            }
        }
    }
}
