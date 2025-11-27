<?php

namespace Database\Seeders;

use App\Models\MiningProject;
use App\Models\Language;
use Illuminate\Database\Seeder;

class MiningProjectsSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            // English
            'en' => [
                [
                    'title' => 'Bamiyan Copper Mine',
                    'description' => 'Large-scale copper extraction project in Bamiyan province with modern processing facilities.',
                    'state' => 'completed',
                    'image' => 'https://images.unsplash.com/photo-1578328819058-b69f3a3b0f6b?q=80&w=2070',
                    'sort' => 1,
                ],
                [
                    'title' => 'Herat Gold Processing',
                    'description' => 'Gold refining and processing plant with advanced technology for high purity output.',
                    'state' => 'completed',
                    'image' => 'https://images.unsplash.com/photo-1605000797499-95a51c5269ae?q=80&w=2070',
                    'sort' => 2,
                ],
                [
                    'title' => 'Kabul Marble Quarry',
                    'description' => 'Premium marble extraction and cutting facility serving domestic and international markets.',
                    'state' => 'in progress',
                    'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070',
                    'sort' => 3,
                ],
                [
                    'title' => 'Badakhshan Gemstone Mine',
                    'description' => 'Precious gemstone extraction including lapis lazuli and emeralds from mountainous regions.',
                    'state' => 'in progress',
                    'image' => 'https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?q=80&w=2070',
                    'sort' => 4,
                ],
                [
                    'title' => 'Logar Iron Ore Project',
                    'description' => 'Major iron ore extraction and beneficiation project to supply regional steel industries.',
                    'state' => 'coming soon',
                    'image' => 'https://images.unsplash.com/photo-1504711434969-e33886168f5c?q=80&w=2070',
                    'sort' => 5,
                ],
                [
                    'title' => 'Nangarhar Coal Mine',
                    'description' => 'Sustainable coal mining operation with environmental management systems.',
                    'state' => 'coming soon',
                    'image' => 'https://images.unsplash.com/photo-1578328819058-b69f3a3b0f6b?q=80&w=2070',
                    'sort' => 6,
                ],
            ],
            // Persian (Dari)
            'fa' => [
                [
                    'title' => 'معدن مس بامیان',
                    'description' => 'پروژه استخراج مس در مقیاس بزرگ در ولایت بامیان با تأسیسات پردازش مدرن.',
                    'state' => 'completed',
                    'image' => 'https://images.unsplash.com/photo-1578328819058-b69f3a3b0f6b?q=80&w=2070',
                    'sort' => 1,
                ],
                [
                    'title' => 'پردازش طلای هرات',
                    'description' => 'کارخانه تصفیه و پردازش طلا با تکنولوژی پیشرفته برای خروجی با خلوص بالا.',
                    'state' => 'completed',
                    'image' => 'https://images.unsplash.com/photo-1605000797499-95a51c5269ae?q=80&w=2070',
                    'sort' => 2,
                ],
                [
                    'title' => 'معدن سنگ مرمر کابل',
                    'description' => 'تأسیسات استخراج و برش سنگ مرمر درجه یک برای خدمت به بازارهای داخلی و بین‌المللی.',
                    'state' => 'in progress',
                    'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070',
                    'sort' => 3,
                ],
                [
                    'title' => 'معدن سنگ‌های قیمتی بدخشان',
                    'description' => 'استخراج سنگ‌های قیمتی شامل لاجورد و زمرد از مناطق کوهستانی.',
                    'state' => 'in progress',
                    'image' => 'https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?q=80&w=2070',
                    'sort' => 4,
                ],
                [
                    'title' => 'پروژه سنگ آهن لوگر',
                    'description' => 'پروژه بزرگ استخراج و پرعیار سازی سنگ آهن برای تأمین صنایع فولاد منطقه‌ای.',
                    'state' => 'coming soon',
                    'image' => 'https://images.unsplash.com/photo-1504711434969-e33886168f5c?q=80&w=2070',
                    'sort' => 5,
                ],
                [
                    'title' => 'معدن ذغال سنگ ننگرهار',
                    'description' => 'عملیات معدنکاری ذغال سنگ پایدار با سیستم‌های مدیریت محیط زیست.',
                    'state' => 'coming soon',
                    'image' => 'https://images.unsplash.com/photo-1578328819058-b69f3a3b0f6b?q=80&w=2070',
                    'sort' => 6,
                ],
            ],
            // Russian
            'ru' => [
                [
                    'title' => 'Медный рудник Бамиан',
                    'description' => 'Крупномасштабный проект по добыче меди в провинции Бамиан с современными перерабатывающими мощностями.',
                    'state' => 'completed',
                    'image' => 'https://images.unsplash.com/photo-1578328819058-b69f3a3b0f6b?q=80&w=2070',
                    'sort' => 1,
                ],
                [
                    'title' => 'Переработка золота в Герате',
                    'description' => 'Завод по рафинированию и переработке золота с передовыми технологиями для получения продукции высокой чистоты.',
                    'state' => 'completed',
                    'image' => 'https://images.unsplash.com/photo-1605000797499-95a51c5269ae?q=80&w=2070',
                    'sort' => 2,
                ],
                [
                    'title' => 'Мраморный карьер Кабул',
                    'description' => 'Предприятие по добыче и резке премиального мрамора, обслуживающее внутренние и международные рынки.',
                    'state' => 'in progress',
                    'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070',
                    'sort' => 3,
                ],
                [
                    'title' => 'Добыча драгоценных камней в Бадахшане',
                    'description' => 'Добыча драгоценных камней, включая лазурит и изумруды, из горных районов.',
                    'state' => 'in progress',
                    'image' => 'https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?q=80&w=2070',
                    'sort' => 4,
                ],
                [
                    'title' => 'Проект железной руды Логар',
                    'description' => 'Крупный проект по добыче и обогащению железной руды для снабжения региональных сталелитейных производств.',
                    'state' => 'coming soon',
                    'image' => 'https://images.unsplash.com/photo-1504711434969-e33886168f5c?q=80&w=2070',
                    'sort' => 5,
                ],
                [
                    'title' => 'Угольная шахта Нангархар',
                    'description' => 'Устойчивая угледобывающая операция с системами экологического менеджмента.',
                    'state' => 'coming soon',
                    'image' => 'https://images.unsplash.com/photo-1578328819058-b69f3a3b0f6b?q=80&w=2070',
                    'sort' => 6,
                ],
            ],
        ];

        foreach ($projects as $langCode => $items) {
            $language = Language::where('code', $langCode)->first();

            if ($language) {
                foreach ($items as $item) {
                    MiningProject::updateOrCreate(
                        [
                            'language_id' => $language->id,
                            'title' => $item['title'],
                        ],
                        array_merge($item, ['language_id' => $language->id])
                    );
                }
            }
        }
    }
}
