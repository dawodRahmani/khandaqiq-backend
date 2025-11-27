<?php

namespace Database\Seeders;

use App\Models\Inevesmentopration;
use App\Models\Language;
use Illuminate\Database\Seeder;

class InvestmentOperationsSeeder extends Seeder
{
    public function run(): void
    {
        $operations = [
            // English
            'en' => [
                [
                    'title' => 'Real Estate Development',
                    'description' => 'Strategic investments in commercial and residential real estate projects, creating modern infrastructure and sustainable communities.',
                    'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070',
                    'important' => true,
                    'sort' => 1,
                ],
                [
                    'title' => 'Energy & Infrastructure',
                    'description' => 'Investing in renewable energy projects and critical infrastructure to power economic growth and sustainable development.',
                    'image' => 'https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?q=80&w=2070',
                    'important' => true,
                    'sort' => 2,
                ],
                [
                    'title' => 'Technology & Innovation',
                    'description' => 'Supporting tech startups and digital transformation initiatives that drive innovation and create future opportunities.',
                    'image' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?q=80&w=2070',
                    'important' => false,
                    'sort' => 3,
                ],
                [
                    'title' => 'Agriculture & Agribusiness',
                    'description' => 'Investments in modern farming, food processing, and agricultural supply chains to ensure food security and rural development.',
                    'image' => 'https://images.unsplash.com/photo-1625246333195-78d9c38ad449?q=80&w=2070',
                    'important' => false,
                    'sort' => 4,
                ],
            ],
            // Persian (Dari)
            'fa' => [
                [
                    'title' => 'توسعه املاک',
                    'description' => 'سرمایه‌گذاری‌های استراتژیک در پروژه‌های املاک تجاری و مسکونی، ایجاد زیرساخت‌های مدرن و جوامع پایدار.',
                    'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070',
                    'important' => true,
                    'sort' => 1,
                ],
                [
                    'title' => 'انرژی و زیرساخت',
                    'description' => 'سرمایه‌گذاری در پروژه‌های انرژی تجدیدپذیر و زیرساخت‌های حیاتی برای تقویت رشد اقتصادی و توسعه پایدار.',
                    'image' => 'https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?q=80&w=2070',
                    'important' => true,
                    'sort' => 2,
                ],
                [
                    'title' => 'فناوری و نوآوری',
                    'description' => 'حمایت از استارتاپ‌های فناوری و ابتکارات تحول دیجیتال که نوآوری را پیش می‌برند و فرصت‌های آینده را ایجاد می‌کنند.',
                    'image' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?q=80&w=2070',
                    'important' => false,
                    'sort' => 3,
                ],
                [
                    'title' => 'کشاورزی و صنایع غذایی',
                    'description' => 'سرمایه‌گذاری در کشاورزی مدرن، فرآوری مواد غذایی و زنجیره تأمین کشاورزی برای تضمین امنیت غذایی و توسعه روستایی.',
                    'image' => 'https://images.unsplash.com/photo-1625246333195-78d9c38ad449?q=80&w=2070',
                    'important' => false,
                    'sort' => 4,
                ],
            ],
            // Russian
            'ru' => [
                [
                    'title' => 'Развитие недвижимости',
                    'description' => 'Стратегические инвестиции в коммерческие и жилые объекты недвижимости, создание современной инфраструктуры и устойчивых сообществ.',
                    'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070',
                    'important' => true,
                    'sort' => 1,
                ],
                [
                    'title' => 'Энергетика и инфраструктура',
                    'description' => 'Инвестиции в проекты возобновляемой энергетики и критически важную инфраструктуру для обеспечения экономического роста и устойчивого развития.',
                    'image' => 'https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?q=80&w=2070',
                    'important' => true,
                    'sort' => 2,
                ],
                [
                    'title' => 'Технологии и инновации',
                    'description' => 'Поддержка технологических стартапов и инициатив цифровой трансформации, способствующих инновациям и создающих возможности будущего.',
                    'image' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?q=80&w=2070',
                    'important' => false,
                    'sort' => 3,
                ],
                [
                    'title' => 'Сельское хозяйство и агробизнес',
                    'description' => 'Инвестиции в современное сельское хозяйство, переработку продуктов питания и сельскохозяйственные цепочки поставок для обеспечения продовольственной безопасности и развития сельских районов.',
                    'image' => 'https://images.unsplash.com/photo-1625246333195-78d9c38ad449?q=80&w=2070',
                    'important' => false,
                    'sort' => 4,
                ],
            ],
        ];

        foreach ($operations as $langCode => $items) {
            $language = Language::where('code', $langCode)->first();

            if ($language) {
                foreach ($items as $item) {
                    Inevesmentopration::updateOrCreate(
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
