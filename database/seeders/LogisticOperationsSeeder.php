<?php

namespace Database\Seeders;

use App\Models\Logisticopration;
use App\Models\Language;
use Illuminate\Database\Seeder;

class LogisticOperationsSeeder extends Seeder
{
    public function run(): void
    {
        $operations = [
            // English
            'en' => [
                [
                    'title' => 'Logistics & Freight',
                    'description' => 'Comprehensive freight forwarding services including warehousing, distribution, and supply chain management solutions.',
                    'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070',
                    'important' => true,
                    'sort' => 1,
                ],
                [
                    'title' => 'Import & Export',
                    'description' => 'Full-service import and export solutions with customs clearance, documentation, and regulatory compliance.',
                    'image' => 'https://images.unsplash.com/photo-1578575437130-527eed3abbec?q=80&w=2070',
                    'important' => false,
                    'sort' => 2,
                ],
                [
                    'title' => 'Transit & International Trade',
                    'description' => 'Seamless transit services connecting major trade routes with efficient cross-border logistics solutions.',
                    'image' => 'https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?q=80&w=2070',
                    'important' => false,
                    'sort' => 3,
                ],
                [
                    'title' => 'Value-Added Services',
                    'description' => 'Additional services including packaging, labeling, quality inspection, and cargo insurance.',
                    'image' => 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=2070',
                    'important' => false,
                    'sort' => 4,
                ],
            ],
            // Persian (Dari)
            'fa' => [
                [
                    'title' => 'لوژستیک و حمل بار',
                    'description' => 'خدمات جامع حمل و نقل شامل انبارداری، توزیع و راه‌حل‌های مدیریت زنجیره تأمین.',
                    'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070',
                    'important' => true,
                    'sort' => 1,
                ],
                [
                    'title' => 'واردات و صادرات',
                    'description' => 'راه‌حل‌های کامل واردات و صادرات با ترخیص گمرکی، مستندات و انطباق با مقررات.',
                    'image' => 'https://images.unsplash.com/photo-1578575437130-527eed3abbec?q=80&w=2070',
                    'important' => false,
                    'sort' => 2,
                ],
                [
                    'title' => 'ترانزیت و تجارت بین‌المللی',
                    'description' => 'خدمات ترانزیت بی‌نقص که مسیرهای تجاری اصلی را با راه‌حل‌های لوژستیکی کارآمد متصل می‌کند.',
                    'image' => 'https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?q=80&w=2070',
                    'important' => false,
                    'sort' => 3,
                ],
                [
                    'title' => 'خدمات ارزش افزوده',
                    'description' => 'خدمات اضافی شامل بسته‌بندی، برچسب‌گذاری، بازرسی کیفیت و بیمه محموله.',
                    'image' => 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=2070',
                    'important' => false,
                    'sort' => 4,
                ],
            ],
            // Russian
            'ru' => [
                [
                    'title' => 'Логистика и грузоперевозки',
                    'description' => 'Комплексные услуги грузовых перевозок, включая складирование, дистрибуцию и решения по управлению цепочкой поставок.',
                    'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070',
                    'important' => true,
                    'sort' => 1,
                ],
                [
                    'title' => 'Импорт и экспорт',
                    'description' => 'Полный комплекс услуг по импорту и экспорту с таможенным оформлением, документацией и соблюдением нормативных требований.',
                    'image' => 'https://images.unsplash.com/photo-1578575437130-527eed3abbec?q=80&w=2070',
                    'important' => false,
                    'sort' => 2,
                ],
                [
                    'title' => 'Транзит и международная торговля',
                    'description' => 'Бесперебойные транзитные услуги, соединяющие основные торговые маршруты с эффективными решениями трансграничной логистики.',
                    'image' => 'https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?q=80&w=2070',
                    'important' => false,
                    'sort' => 3,
                ],
                [
                    'title' => 'Услуги с добавленной стоимостью',
                    'description' => 'Дополнительные услуги, включая упаковку, маркировку, контроль качества и страхование грузов.',
                    'image' => 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=2070',
                    'important' => false,
                    'sort' => 4,
                ],
            ],
        ];

        foreach ($operations as $langCode => $items) {
            $language = Language::where('code', $langCode)->first();

            if ($language) {
                foreach ($items as $item) {
                    Logisticopration::updateOrCreate(
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
