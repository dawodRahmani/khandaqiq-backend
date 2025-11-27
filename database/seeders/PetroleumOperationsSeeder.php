<?php

namespace Database\Seeders;

use App\Models\Petroleumopration;
use App\Models\Language;
use Illuminate\Database\Seeder;

class PetroleumOperationsSeeder extends Seeder
{
    public function run(): void
    {
        $operations = [
            // English
            'en' => [
                [
                    'title' => 'Exploration & Drilling',
                    'description' => 'Advanced geological surveys and drilling operations to discover and access oil and gas reserves.',
                    'image' => 'https://images.unsplash.com/photo-1513828583688-c52646db42da?q=80&w=2070',
                    'important' => true,
                    'sort' => 1,
                ],
                [
                    'title' => 'Refining & Processing',
                    'description' => 'State-of-the-art refining facilities converting crude oil into valuable petroleum products.',
                    'image' => 'https://images.unsplash.com/photo-1518709766631-a6a7f45921c3?q=80&w=2070',
                    'important' => true,
                    'sort' => 2,
                ],
                [
                    'title' => 'Distribution & Logistics',
                    'description' => 'Comprehensive distribution network ensuring reliable delivery of petroleum products nationwide.',
                    'image' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?q=80&w=2070',
                    'important' => false,
                    'sort' => 3,
                ],
                [
                    'title' => 'Natural Gas Supply',
                    'description' => 'Clean natural gas solutions for industrial, commercial, and residential applications.',
                    'image' => 'https://images.unsplash.com/photo-1532601224476-15c79f2f7a51?q=80&w=2070',
                    'important' => false,
                    'sort' => 4,
                ],
            ],
            // Persian (Dari)
            'fa' => [
                [
                    'title' => 'اکتشاف و حفاری',
                    'description' => 'عملیات پیشرفته نقشه‌برداری زمین‌شناسی و حفاری برای کشف و دسترسی به ذخایر نفت و گاز.',
                    'image' => 'https://images.unsplash.com/photo-1513828583688-c52646db42da?q=80&w=2070',
                    'important' => true,
                    'sort' => 1,
                ],
                [
                    'title' => 'پالایش و فرآوری',
                    'description' => 'تاسیسات پالایش پیشرفته برای تبدیل نفت خام به محصولات ارزشمند نفتی.',
                    'image' => 'https://images.unsplash.com/photo-1518709766631-a6a7f45921c3?q=80&w=2070',
                    'important' => true,
                    'sort' => 2,
                ],
                [
                    'title' => 'توزیع و لجستیک',
                    'description' => 'شبکه توزیع جامع برای تضمین تحویل قابل اعتماد محصولات نفتی در سراسر کشور.',
                    'image' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?q=80&w=2070',
                    'important' => false,
                    'sort' => 3,
                ],
                [
                    'title' => 'تامین گاز طبیعی',
                    'description' => 'راه‌حل‌های گاز طبیعی پاک برای کاربردهای صنعتی، تجاری و مسکونی.',
                    'image' => 'https://images.unsplash.com/photo-1532601224476-15c79f2f7a51?q=80&w=2070',
                    'important' => false,
                    'sort' => 4,
                ],
            ],
            // Russian
            'ru' => [
                [
                    'title' => 'Разведка и бурение',
                    'description' => 'Передовые геологические исследования и буровые операции для обнаружения и доступа к запасам нефти и газа.',
                    'image' => 'https://images.unsplash.com/photo-1513828583688-c52646db42da?q=80&w=2070',
                    'important' => true,
                    'sort' => 1,
                ],
                [
                    'title' => 'Переработка и обработка',
                    'description' => 'Современные нефтеперерабатывающие предприятия, преобразующие сырую нефть в ценные нефтепродукты.',
                    'image' => 'https://images.unsplash.com/photo-1518709766631-a6a7f45921c3?q=80&w=2070',
                    'important' => true,
                    'sort' => 2,
                ],
                [
                    'title' => 'Дистрибуция и логистика',
                    'description' => 'Комплексная дистрибьюторская сеть, обеспечивающая надежную доставку нефтепродуктов по всей стране.',
                    'image' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?q=80&w=2070',
                    'important' => false,
                    'sort' => 3,
                ],
                [
                    'title' => 'Поставки природного газа',
                    'description' => 'Экологически чистые решения на основе природного газа для промышленного, коммерческого и жилого применения.',
                    'image' => 'https://images.unsplash.com/photo-1532601224476-15c79f2f7a51?q=80&w=2070',
                    'important' => false,
                    'sort' => 4,
                ],
            ],
        ];

        foreach ($operations as $langCode => $items) {
            $language = Language::where('code', $langCode)->first();

            if ($language) {
                foreach ($items as $item) {
                    Petroleumopration::updateOrCreate(
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
