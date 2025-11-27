<?php

namespace Database\Seeders;

use App\Models\Inevesment;
use App\Models\Language;
use Illuminate\Database\Seeder;

class InvestmentPageSeeder extends Seeder
{
    public function run(): void
    {
        $investmentPages = [
            // English
            'en' => [
                'slide_title_1' => 'Strategic Investments',
                'slide_subtitle_1' => 'Building sustainable growth through strategic investment opportunities',
                'slide_image_1' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2070',
                'slide_title_2' => 'Diverse Portfolio',
                'slide_subtitle_2' => 'Investing across multiple sectors for balanced returns',
                'slide_image_2' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070',
                'slide_title_3' => 'Long-term Vision',
                'slide_subtitle_3' => 'Creating lasting value for stakeholders and communities',
                'slide_image_3' => 'https://images.unsplash.com/photo-1507679799987-c73779587ccf?q=80&w=2070',
                'about_title' => 'Who We Are',
                'about_image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=2070',
                'about_message' => 'Khan Daqiq Investment is a leading investment company committed to creating sustainable value through strategic investments across multiple sectors. With a focus on long-term growth and responsible investment practices, we partner with businesses and projects that drive economic development in Afghanistan and the region. Our experienced team of investment professionals brings deep industry knowledge and a commitment to excellence in every investment decision.',
                'operations_message' => 'Our investment activities span across these key sectors',
                'sort' => 1,
            ],
            // Persian (Dari)
            'fa' => [
                'slide_title_1' => 'سرمایه‌گذاری‌های استراتژیک',
                'slide_subtitle_1' => 'ایجاد رشد پایدار از طریق فرصت‌های سرمایه‌گذاری استراتژیک',
                'slide_image_1' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2070',
                'slide_title_2' => 'پورتفولیوی متنوع',
                'slide_subtitle_2' => 'سرمایه‌گذاری در بخش‌های مختلف برای بازده متوازن',
                'slide_image_2' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070',
                'slide_title_3' => 'چشم‌انداز بلندمدت',
                'slide_subtitle_3' => 'ایجاد ارزش پایدار برای ذینفعان و جوامع',
                'slide_image_3' => 'https://images.unsplash.com/photo-1507679799987-c73779587ccf?q=80&w=2070',
                'about_title' => 'ما که هستیم',
                'about_image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=2070',
                'about_message' => 'خان دقیق سرمایه‌گذاری یک شرکت پیشرو در زمینه سرمایه‌گذاری است که متعهد به ایجاد ارزش پایدار از طریق سرمایه‌گذاری‌های استراتژیک در بخش‌های مختلف می‌باشد. با تمرکز بر رشد بلندمدت و شیوه‌های سرمایه‌گذاری مسئولانه، ما با کسب‌وکارها و پروژه‌هایی همکاری می‌کنیم که توسعه اقتصادی را در افغانستان و منطقه پیش می‌برند. تیم باتجربه متخصصان سرمایه‌گذاری ما دانش عمیق صنعتی و تعهد به تعالی را در هر تصمیم سرمایه‌گذاری به ارمغان می‌آورد.',
                'operations_message' => 'فعالیت‌های سرمایه‌گذاری ما در این بخش‌های کلیدی گسترده است',
                'sort' => 2,
            ],
            // Russian
            'ru' => [
                'slide_title_1' => 'Стратегические инвестиции',
                'slide_subtitle_1' => 'Создание устойчивого роста через стратегические инвестиционные возможности',
                'slide_image_1' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2070',
                'slide_title_2' => 'Диверсифицированный портфель',
                'slide_subtitle_2' => 'Инвестиции в различные секторы для сбалансированной доходности',
                'slide_image_2' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070',
                'slide_title_3' => 'Долгосрочное видение',
                'slide_subtitle_3' => 'Создание долгосрочной ценности для заинтересованных сторон и сообществ',
                'slide_image_3' => 'https://images.unsplash.com/photo-1507679799987-c73779587ccf?q=80&w=2070',
                'about_title' => 'Кто мы',
                'about_image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=2070',
                'about_message' => 'Хан Дакик Инвестиции — ведущая инвестиционная компания, стремящаяся создавать устойчивую ценность через стратегические инвестиции в различные секторы. Ориентируясь на долгосрочный рост и ответственные инвестиционные практики, мы сотрудничаем с предприятиями и проектами, которые способствуют экономическому развитию Афганистана и региона. Наша опытная команда инвестиционных профессионалов обладает глубокими отраслевыми знаниями и стремлением к совершенству в каждом инвестиционном решении.',
                'operations_message' => 'Наша инвестиционная деятельность охватывает следующие ключевые секторы',
                'sort' => 3,
            ],
        ];

        foreach ($investmentPages as $langCode => $data) {
            $language = Language::where('code', $langCode)->first();

            if ($language) {
                Inevesment::updateOrCreate(
                    ['language_id' => $language->id],
                    array_merge($data, ['language_id' => $language->id])
                );
            }
        }
    }
}
