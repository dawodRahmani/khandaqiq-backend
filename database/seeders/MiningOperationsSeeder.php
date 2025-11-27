<?php

namespace Database\Seeders;

use App\Models\Miningopration;
use App\Models\Language;
use Illuminate\Database\Seeder;

class MiningOperationsSeeder extends Seeder
{
    public function run(): void
    {
        $operations = [
            // English
            'en' => [
                [
                    'title' => 'Mineral Extraction',
                    'description' => 'Advanced mining techniques for efficient mineral extraction from various geological formations.',
                    'image' => 'https://images.unsplash.com/photo-1578328819058-b69f3a3b0f6b?q=80&w=2070',
                    'important' => true,
                    'sort' => 1,
                ],
                [
                    'title' => 'Processing & Refining',
                    'description' => 'State-of-the-art processing facilities for mineral purification and refinement.',
                    'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070',
                    'important' => false,
                    'sort' => 2,
                ],
                [
                    'title' => 'Quality Control',
                    'description' => 'Rigorous quality assurance protocols ensuring the highest standards in mineral products.',
                    'image' => 'https://images.unsplash.com/photo-1605000797499-95a51c5269ae?q=80&w=2070',
                    'important' => false,
                    'sort' => 3,
                ],
                [
                    'title' => 'Export & Distribution',
                    'description' => 'Global distribution network for delivering minerals to international markets.',
                    'image' => 'https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?q=80&w=2070',
                    'important' => false,
                    'sort' => 4,
                ],
            ],
            // Persian (Dari)
            'fa' => [
                [
                    'title' => 'استخراج مواد معدنی',
                    'description' => 'تکنیک‌های پیشرفته معدنکاری برای استخراج کارآمد مواد معدنی از ساختارهای مختلف زمین‌شناسی.',
                    'image' => 'https://images.unsplash.com/photo-1578328819058-b69f3a3b0f6b?q=80&w=2070',
                    'important' => true,
                    'sort' => 1,
                ],
                [
                    'title' => 'پردازش و تصفیه',
                    'description' => 'تأسیسات پردازش مدرن برای خالص‌سازی و تصفیه مواد معدنی.',
                    'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070',
                    'important' => false,
                    'sort' => 2,
                ],
                [
                    'title' => 'کنترل کیفیت',
                    'description' => 'پروتکل‌های سختگیرانه تضمین کیفیت برای اطمینان از بالاترین استانداردها در محصولات معدنی.',
                    'image' => 'https://images.unsplash.com/photo-1605000797499-95a51c5269ae?q=80&w=2070',
                    'important' => false,
                    'sort' => 3,
                ],
                [
                    'title' => 'صادرات و توزیع',
                    'description' => 'شبکه توزیع جهانی برای تحویل مواد معدنی به بازارهای بین‌المللی.',
                    'image' => 'https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?q=80&w=2070',
                    'important' => false,
                    'sort' => 4,
                ],
            ],
            // Russian
            'ru' => [
                [
                    'title' => 'Добыча минералов',
                    'description' => 'Передовые методы добычи для эффективного извлечения минералов из различных геологических формаций.',
                    'image' => 'https://images.unsplash.com/photo-1578328819058-b69f3a3b0f6b?q=80&w=2070',
                    'important' => true,
                    'sort' => 1,
                ],
                [
                    'title' => 'Переработка и очистка',
                    'description' => 'Современные перерабатывающие мощности для очистки и рафинирования минералов.',
                    'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070',
                    'important' => false,
                    'sort' => 2,
                ],
                [
                    'title' => 'Контроль качества',
                    'description' => 'Строгие протоколы обеспечения качества, гарантирующие высочайшие стандарты минеральной продукции.',
                    'image' => 'https://images.unsplash.com/photo-1605000797499-95a51c5269ae?q=80&w=2070',
                    'important' => false,
                    'sort' => 3,
                ],
                [
                    'title' => 'Экспорт и дистрибуция',
                    'description' => 'Глобальная дистрибьюторская сеть для доставки минералов на международные рынки.',
                    'image' => 'https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?q=80&w=2070',
                    'important' => false,
                    'sort' => 4,
                ],
            ],
        ];

        foreach ($operations as $langCode => $items) {
            $language = Language::where('code', $langCode)->first();

            if ($language) {
                foreach ($items as $item) {
                    Miningopration::updateOrCreate(
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
