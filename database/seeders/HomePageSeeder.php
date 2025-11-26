<?php

namespace Database\Seeders;

use App\Models\HomePage;
use App\Models\Language;
use Illuminate\Database\Seeder;

class HomePageSeeder extends Seeder
{
    public function run(): void
    {
        $homePages = [
            // English
            'en' => [
                'slide_title_1' => 'Welcome to Khan Daqiq',
                'slide_subtitle_1' => 'Leading company in mining, agriculture, logistics and investment',
                'slide_image_1' => 'images/slides/slide1_en.jpg',
                'slide_title_2' => 'Mining Excellence',
                'slide_subtitle_2' => 'Extracting value from the earth with modern technology',
                'slide_image_2' => 'images/slides/slide2_en.jpg',
                'slide_title_3' => 'Sustainable Growth',
                'slide_subtitle_3' => 'Building a better future through responsible business',
                'slide_image_3' => 'images/slides/slide3_en.jpg',
                'about_title' => 'About Khan Daqiq',
                'about_image' => 'images/about/about_en.jpg',
                'about_message' => 'Khan Daqiq is a leading multi-sector company specializing in mining, agriculture, logistics, petroleum, and investment services. With years of experience and a commitment to excellence, we deliver quality services across Afghanistan and the region.',
                'sector_message' => 'Our diverse portfolio spans across multiple sectors, enabling us to provide comprehensive solutions to our clients and partners.',
                'sort' => 1,
            ],
            // Persian (Dari)
            'fa' => [
                'slide_title_1' => 'به خان دقیق خوش آمدید',
                'slide_subtitle_1' => 'شرکت پیشرو در معادن، زراعت، لوژستیک و سرمایه گذاری',
                'slide_image_1' => 'images/slides/slide1_fa.jpg',
                'slide_title_2' => 'برتری در معدنکاری',
                'slide_subtitle_2' => 'استخراج ارزش از زمین با تکنولوژی مدرن',
                'slide_image_2' => 'images/slides/slide2_fa.jpg',
                'slide_title_3' => 'رشد پایدار',
                'slide_subtitle_3' => 'ساختن آینده بهتر از طریق کسب و کار مسئولانه',
                'slide_image_3' => 'images/slides/slide3_fa.jpg',
                'about_title' => 'درباره خان دقیق',
                'about_image' => 'images/about/about_fa.jpg',
                'about_message' => 'خان دقیق یک شرکت چند بخشی پیشرو است که در زمینه معادن، زراعت، لوژستیک، نفت و گاز، و خدمات سرمایه گذاری تخصص دارد. با سال‌ها تجربه و تعهد به کیفیت، ما خدمات با کیفیت را در سراسر افغانستان و منطقه ارائه می‌دهیم.',
                'sector_message' => 'مجموعه متنوع ما شامل بخش‌های مختلف است که به ما امکان می‌دهد راه‌حل‌های جامع به مشتریان و شرکای خود ارائه دهیم.',
                'sort' => 2,
            ],
            // Russian
            'ru' => [
                'slide_title_1' => 'Добро пожаловать в Хан Дакик',
                'slide_subtitle_1' => 'Ведущая компания в области горнодобычи, сельского хозяйства, логистики и инвестиций',
                'slide_image_1' => 'images/slides/slide1_ru.jpg',
                'slide_title_2' => 'Превосходство в горнодобыче',
                'slide_subtitle_2' => 'Извлечение ценности из земли с помощью современных технологий',
                'slide_image_2' => 'images/slides/slide2_ru.jpg',
                'slide_title_3' => 'Устойчивый рост',
                'slide_subtitle_3' => 'Строим лучшее будущее через ответственный бизнес',
                'slide_image_3' => 'images/slides/slide3_ru.jpg',
                'about_title' => 'О компании Хан Дакик',
                'about_image' => 'images/about/about_ru.jpg',
                'about_message' => 'Хан Дакик — ведущая многопрофильная компания, специализирующаяся на горнодобыче, сельском хозяйстве, логистике, нефтегазовой отрасли и инвестиционных услугах. Благодаря многолетнему опыту и стремлению к совершенству, мы предоставляем качественные услуги по всему Афганистану и региону.',
                'sector_message' => 'Наш разнообразный портфель охватывает множество секторов, что позволяет нам предоставлять комплексные решения нашим клиентам и партнерам.',
                'sort' => 3,
            ],
        ];

        foreach ($homePages as $langCode => $data) {
            $language = Language::where('code', $langCode)->first();

            if ($language) {
                HomePage::updateOrCreate(
                    ['language_id' => $language->id],
                    array_merge($data, ['language_id' => $language->id])
                );
            }
        }
    }
}
