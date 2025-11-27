<?php

namespace Database\Seeders;

use App\Models\Agriculture;
use App\Models\Language;
use Illuminate\Database\Seeder;

class AgriculturePageSeeder extends Seeder
{
    public function run(): void
    {
        $agriculturePages = [
            // English
            'en' => [
                'slide_title_1' => 'Agricultural Excellence',
                'slide_subtitle_1' => 'Sustainable farming and food production for a better tomorrow',
                'slide_image_1' => 'https://images.unsplash.com/photo-1625246333195-78d9c38ad449?q=80&w=2070',
                'slide_title_2' => 'Modern Farming',
                'slide_subtitle_2' => 'Using advanced technology for efficient crop production',
                'slide_image_2' => 'https://images.unsplash.com/photo-1574943320219-553eb213f72d?q=80&w=2070',
                'slide_title_3' => 'Quality Products',
                'slide_subtitle_3' => 'From farm to table with the highest quality standards',
                'slide_image_3' => 'https://images.unsplash.com/photo-1464226184884-fa280b87c399?q=80&w=2070',
                'about_title' => 'Who We Are',
                'about_image' => 'https://images.unsplash.com/photo-1500937386664-56d1dfef3854?q=80&w=2070',
                'about_message' => 'Khan Daqiq Agriculture is a leading agricultural company dedicated to sustainable farming practices and high-quality food production. With extensive farmlands across Afghanistan, we cultivate a variety of crops including wheat, rice, fruits, and vegetables. Our commitment to modern farming techniques and environmental responsibility ensures that we deliver premium agricultural products while supporting local communities and preserving our natural resources.',
                'oprations_message' => 'We operate responsibly and sustainably in the following agricultural sectors',
                'sort' => 1,
            ],
            // Persian (Dari)
            'fa' => [
                'slide_title_1' => 'برتری در زراعت',
                'slide_subtitle_1' => 'کشاورزی پایدار و تولید غذا برای فردایی بهتر',
                'slide_image_1' => 'https://images.unsplash.com/photo-1625246333195-78d9c38ad449?q=80&w=2070',
                'slide_title_2' => 'کشاورزی مدرن',
                'slide_subtitle_2' => 'استفاده از تکنولوژی پیشرفته برای تولید کارآمد محصولات',
                'slide_image_2' => 'https://images.unsplash.com/photo-1574943320219-553eb213f72d?q=80&w=2070',
                'slide_title_3' => 'محصولات با کیفیت',
                'slide_subtitle_3' => 'از مزرعه تا سفره با بالاترین استانداردهای کیفیت',
                'slide_image_3' => 'https://images.unsplash.com/photo-1464226184884-fa280b87c399?q=80&w=2070',
                'about_title' => 'ما که هستیم',
                'about_image' => 'https://images.unsplash.com/photo-1500937386664-56d1dfef3854?q=80&w=2070',
                'about_message' => 'خان دقیق زراعت یک شرکت کشاورزی پیشرو است که به شیوه‌های کشاورزی پایدار و تولید غذای با کیفیت متعهد است. با زمین‌های کشاورزی گسترده در سراسر افغانستان، ما انواع محصولات از جمله گندم، برنج، میوه‌ها و سبزیجات را کشت می‌کنیم. تعهد ما به تکنیک‌های کشاورزی مدرن و مسئولیت محیط زیستی تضمین می‌کند که محصولات کشاورزی ممتاز را ارائه می‌دهیم و در عین حال از جوامع محلی حمایت می‌کنیم و منابع طبیعی خود را حفظ می‌کنیم.',
                'oprations_message' => 'ما به گونه‌ای مسئولانه و پایدار در بخش‌های زراعتی زیر فعالیت می‌کنیم',
                'sort' => 2,
            ],
            // Russian
            'ru' => [
                'slide_title_1' => 'Сельскохозяйственное превосходство',
                'slide_subtitle_1' => 'Устойчивое земледелие и производство продуктов питания для лучшего завтра',
                'slide_image_1' => 'https://images.unsplash.com/photo-1625246333195-78d9c38ad449?q=80&w=2070',
                'slide_title_2' => 'Современное земледелие',
                'slide_subtitle_2' => 'Использование передовых технологий для эффективного производства',
                'slide_image_2' => 'https://images.unsplash.com/photo-1574943320219-553eb213f72d?q=80&w=2070',
                'slide_title_3' => 'Качественная продукция',
                'slide_subtitle_3' => 'От фермы до стола с высочайшими стандартами качества',
                'slide_image_3' => 'https://images.unsplash.com/photo-1464226184884-fa280b87c399?q=80&w=2070',
                'about_title' => 'Кто мы',
                'about_image' => 'https://images.unsplash.com/photo-1500937386664-56d1dfef3854?q=80&w=2070',
                'about_message' => 'Хан Дакик Агрикультура — ведущая сельскохозяйственная компания, приверженная устойчивым методам ведения сельского хозяйства и производству высококачественных продуктов питания. Обладая обширными сельскохозяйственными угодьями по всему Афганистану, мы выращиваем разнообразные культуры, включая пшеницу, рис, фрукты и овощи. Наша приверженность современным методам ведения сельского хозяйства и экологической ответственности гарантирует, что мы поставляем первоклассную сельскохозяйственную продукцию, поддерживая местные сообщества и сохраняя наши природные ресурсы.',
                'oprations_message' => 'Мы работаем ответственно и устойчиво в следующих сельскохозяйственных секторах',
                'sort' => 3,
            ],
        ];

        foreach ($agriculturePages as $langCode => $data) {
            $language = Language::where('code', $langCode)->first();

            if ($language) {
                Agriculture::updateOrCreate(
                    ['language_id' => $language->id],
                    array_merge($data, ['language_id' => $language->id])
                );
            }
        }
    }
}
