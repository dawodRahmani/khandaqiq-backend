<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Language;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            // English
            'en' => [
                [
                    'title' => 'Mining & Extraction',
                    'description' => 'Professional mineral extraction and processing services with state-of-the-art equipment and sustainable practices.',
                    'image' => 'https://images.unsplash.com/photo-1578328819058-b69f3a3b0f6b?q=80&w=2070',
                    'phone' => '+93 700 000 001',
                    'email' => 'mining@khandaqiq.com',
                    'important' => true,
                    'sort' => 1,
                ],
                [
                    'title' => 'Logistics & Transport',
                    'description' => 'Comprehensive freight and logistics solutions including air, sea, rail, and road transport services.',
                    'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070',
                    'phone' => '+93 700 000 002',
                    'email' => 'logistics@khandaqiq.com',
                    'important' => true,
                    'sort' => 2,
                ],
                [
                    'title' => 'Agricultural Services',
                    'description' => 'Modern farming techniques, crop production, and agricultural consulting for sustainable food production.',
                    'image' => 'https://images.unsplash.com/photo-1625246333195-78d9c38ad449?q=80&w=2070',
                    'phone' => '+93 700 000 003',
                    'email' => 'agriculture@khandaqiq.com',
                    'important' => false,
                    'sort' => 3,
                ],
                [
                    'title' => 'Investment Consulting',
                    'description' => 'Expert financial advisory and investment opportunities in Afghanistan\'s growing sectors.',
                    'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2070',
                    'phone' => '+93 700 000 004',
                    'email' => 'investment@khandaqiq.com',
                    'important' => false,
                    'sort' => 4,
                ],
            ],
            // Persian (Dari)
            'fa' => [
                [
                    'title' => 'استخراج معدن',
                    'description' => 'خدمات حرفه ای استخراج و پردازش مواد معدنی با تجهیزات پیشرفته و روش های پایدار.',
                    'image' => 'https://images.unsplash.com/photo-1578328819058-b69f3a3b0f6b?q=80&w=2070',
                    'phone' => '+93 700 000 001',
                    'email' => 'mining@khandaqiq.com',
                    'important' => true,
                    'sort' => 1,
                ],
                [
                    'title' => 'لجستیک و حمل و نقل',
                    'description' => 'راه حل های جامع حمل و نقل و لجستیک شامل خدمات هوایی، دریایی، ریلی و جاده ای.',
                    'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070',
                    'phone' => '+93 700 000 002',
                    'email' => 'logistics@khandaqiq.com',
                    'important' => true,
                    'sort' => 2,
                ],
                [
                    'title' => 'خدمات کشاورزی',
                    'description' => 'تکنیک های کشاورزی مدرن، تولید محصولات و مشاوره کشاورزی برای تولید پایدار غذا.',
                    'image' => 'https://images.unsplash.com/photo-1625246333195-78d9c38ad449?q=80&w=2070',
                    'phone' => '+93 700 000 003',
                    'email' => 'agriculture@khandaqiq.com',
                    'important' => false,
                    'sort' => 3,
                ],
                [
                    'title' => 'مشاوره سرمایه گذاری',
                    'description' => 'مشاوره مالی تخصصی و فرصت های سرمایه گذاری در بخش های رو به رشد افغانستان.',
                    'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2070',
                    'phone' => '+93 700 000 004',
                    'email' => 'investment@khandaqiq.com',
                    'important' => false,
                    'sort' => 4,
                ],
            ],
            // Russian
            'ru' => [
                [
                    'title' => 'Добыча и переработка',
                    'description' => 'Профессиональные услуги по добыче и переработке минералов с использованием современного оборудования.',
                    'image' => 'https://images.unsplash.com/photo-1578328819058-b69f3a3b0f6b?q=80&w=2070',
                    'phone' => '+93 700 000 001',
                    'email' => 'mining@khandaqiq.com',
                    'important' => true,
                    'sort' => 1,
                ],
                [
                    'title' => 'Логистика и транспорт',
                    'description' => 'Комплексные логистические решения, включая воздушные, морские, железнодорожные и автомобильные перевозки.',
                    'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070',
                    'phone' => '+93 700 000 002',
                    'email' => 'logistics@khandaqiq.com',
                    'important' => true,
                    'sort' => 2,
                ],
                [
                    'title' => 'Сельскохозяйственные услуги',
                    'description' => 'Современные методы земледелия, производство культур и консультации для устойчивого производства продовольствия.',
                    'image' => 'https://images.unsplash.com/photo-1625246333195-78d9c38ad449?q=80&w=2070',
                    'phone' => '+93 700 000 003',
                    'email' => 'agriculture@khandaqiq.com',
                    'important' => false,
                    'sort' => 3,
                ],
                [
                    'title' => 'Инвестиционный консалтинг',
                    'description' => 'Экспертное финансовое консультирование и инвестиционные возможности в растущих секторах Афганистана.',
                    'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2070',
                    'phone' => '+93 700 000 004',
                    'email' => 'investment@khandaqiq.com',
                    'important' => false,
                    'sort' => 4,
                ],
            ],
        ];

        foreach ($services as $langCode => $items) {
            $language = Language::where('code', $langCode)->first();

            if ($language) {
                foreach ($items as $item) {
                    Service::updateOrCreate(
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
