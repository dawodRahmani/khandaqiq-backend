<?php

namespace Database\Seeders;

use App\Models\Agricultureopration;
use App\Models\Language;
use Illuminate\Database\Seeder;

class AgricultureOperationsSeeder extends Seeder
{
    public function run(): void
    {
        $operations = [
            // English
            'en' => [
                [
                    'title' => 'Crop Production',
                    'description' => 'Large-scale cultivation of wheat, rice, corn, and other essential crops using modern farming techniques.',
                    'image' => 'https://images.unsplash.com/photo-1625246333195-78d9c38ad449?q=80&w=2070',
                    'important' => true,
                    'sort' => 1,
                ],
                [
                    'title' => 'Fruit Orchards',
                    'description' => 'Premium fruit production including apples, grapes, pomegranates, and dried fruits for domestic and export markets.',
                    'image' => 'https://images.unsplash.com/photo-1574943320219-553eb213f72d?q=80&w=2070',
                    'important' => false,
                    'sort' => 2,
                ],
                [
                    'title' => 'Vegetable Farming',
                    'description' => 'Fresh vegetable cultivation with greenhouse and open-field farming for year-round supply.',
                    'image' => 'https://images.unsplash.com/photo-1464226184884-fa280b87c399?q=80&w=2070',
                    'important' => false,
                    'sort' => 3,
                ],
                [
                    'title' => 'Processing & Export',
                    'description' => 'Agricultural product processing, packaging, and export to international markets.',
                    'image' => 'https://images.unsplash.com/photo-1500937386664-56d1dfef3854?q=80&w=2070',
                    'important' => false,
                    'sort' => 4,
                ],
            ],
            // Persian (Dari)
            'fa' => [
                [
                    'title' => 'تولید محصولات زراعتی',
                    'description' => 'کشت گندم، برنج، جواری و سایر محصولات ضروری در مقیاس بزرگ با استفاده از تکنیک‌های کشاورزی مدرن.',
                    'image' => 'https://images.unsplash.com/photo-1625246333195-78d9c38ad449?q=80&w=2070',
                    'important' => true,
                    'sort' => 1,
                ],
                [
                    'title' => 'باغ‌های میوه',
                    'description' => 'تولید میوه‌های ممتاز شامل سیب، انگور، انار و میوه‌های خشک برای بازارهای داخلی و صادراتی.',
                    'image' => 'https://images.unsplash.com/photo-1574943320219-553eb213f72d?q=80&w=2070',
                    'important' => false,
                    'sort' => 2,
                ],
                [
                    'title' => 'کشت سبزیجات',
                    'description' => 'کشت سبزیجات تازه با کشاورزی گلخانه‌ای و مزرعه باز برای تأمین در تمام طول سال.',
                    'image' => 'https://images.unsplash.com/photo-1464226184884-fa280b87c399?q=80&w=2070',
                    'important' => false,
                    'sort' => 3,
                ],
                [
                    'title' => 'پردازش و صادرات',
                    'description' => 'پردازش، بسته‌بندی و صادرات محصولات کشاورزی به بازارهای بین‌المللی.',
                    'image' => 'https://images.unsplash.com/photo-1500937386664-56d1dfef3854?q=80&w=2070',
                    'important' => false,
                    'sort' => 4,
                ],
            ],
            // Russian
            'ru' => [
                [
                    'title' => 'Производство зерновых',
                    'description' => 'Крупномасштабное выращивание пшеницы, риса, кукурузы и других важных культур с использованием современных методов.',
                    'image' => 'https://images.unsplash.com/photo-1625246333195-78d9c38ad449?q=80&w=2070',
                    'important' => true,
                    'sort' => 1,
                ],
                [
                    'title' => 'Фруктовые сады',
                    'description' => 'Производство премиальных фруктов, включая яблоки, виноград, гранаты и сухофрукты для внутреннего и экспортного рынков.',
                    'image' => 'https://images.unsplash.com/photo-1574943320219-553eb213f72d?q=80&w=2070',
                    'important' => false,
                    'sort' => 2,
                ],
                [
                    'title' => 'Овощеводство',
                    'description' => 'Выращивание свежих овощей в теплицах и открытом грунте для круглогодичного снабжения.',
                    'image' => 'https://images.unsplash.com/photo-1464226184884-fa280b87c399?q=80&w=2070',
                    'important' => false,
                    'sort' => 3,
                ],
                [
                    'title' => 'Переработка и экспорт',
                    'description' => 'Переработка, упаковка и экспорт сельскохозяйственной продукции на международные рынки.',
                    'image' => 'https://images.unsplash.com/photo-1500937386664-56d1dfef3854?q=80&w=2070',
                    'important' => false,
                    'sort' => 4,
                ],
            ],
        ];

        foreach ($operations as $langCode => $items) {
            $language = Language::where('code', $langCode)->first();

            if ($language) {
                foreach ($items as $item) {
                    Agricultureopration::updateOrCreate(
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
