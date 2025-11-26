<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;
use App\Models\Language;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $languages = Language::all();

        // English Products
        $enLangId = $languages->where('code', 'en')->first()?->id ?? 2;

        // Persian Products
        $faLangId = $languages->where('code', 'fa')->first()?->id ?? 1;

        // Russian Products
        $ruLangId = $languages->where('code', 'ru')->first()?->id ?? 3;

        $products = [
            // English - Metals
            [
                'language_id' => $enLangId,
                'title' => 'Copper Ore',
                'important' => true,
                'type' => 'Metals',
                'description' => 'High-quality copper ore extracted from our premium mining sites. Suitable for industrial processing and manufacturing.',
                'price' => 450.00,
                'image' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=300&fit=crop',
                'link' => null,
                'sort' => 1,
            ],
            [
                'language_id' => $enLangId,
                'title' => 'Iron Ore',
                'important' => false,
                'type' => 'Metals',
                'description' => 'Premium grade iron ore with high Fe content. Ideal for steel production and heavy industry applications.',
                'price' => 320.00,
                'image' => 'https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=400&h=300&fit=crop',
                'link' => null,
                'sort' => 2,
            ],
            [
                'language_id' => $enLangId,
                'title' => 'Gold Concentrate',
                'important' => true,
                'type' => 'Metals',
                'description' => 'Refined gold concentrate from certified mining operations. Available in bulk quantities for international trade.',
                'price' => 5500.00,
                'image' => 'https://images.unsplash.com/photo-1610375461246-83df859d849d?w=400&h=300&fit=crop',
                'link' => null,
                'sort' => 3,
            ],
            [
                'language_id' => $enLangId,
                'title' => 'Marble Stone',
                'important' => false,
                'type' => 'Non-Metals',
                'description' => 'Elegant marble stone in various colors and patterns. Perfect for construction, decoration, and architectural projects.',
                'price' => 180.00,
                'image' => 'https://images.unsplash.com/photo-1618220179428-22790b461013?w=400&h=300&fit=crop',
                'link' => null,
                'sort' => 4,
            ],
            [
                'language_id' => $enLangId,
                'title' => 'Granite Blocks',
                'important' => false,
                'type' => 'Non-Metals',
                'description' => 'Durable granite blocks available in multiple sizes. Excellent for flooring, countertops, and exterior cladding.',
                'price' => 220.00,
                'image' => 'https://images.unsplash.com/photo-1599619585752-c3edb42a414c?w=400&h=300&fit=crop',
                'link' => null,
                'sort' => 5,
            ],

            // Persian - Metals
            [
                'language_id' => $faLangId,
                'title' => 'سنگ مس',
                'important' => true,
                'type' => 'Metals',
                'description' => 'سنگ مس با کیفیت بالا از معادن برتر ما استخراج شده است. مناسب برای پردازش صنعتی و تولید.',
                'price' => 450.00,
                'image' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=300&fit=crop',
                'link' => null,
                'sort' => 1,
            ],
            [
                'language_id' => $faLangId,
                'title' => 'سنگ آهن',
                'important' => false,
                'type' => 'Metals',
                'description' => 'سنگ آهن درجه یک با محتوای آهن بالا. ایده‌آل برای تولید فولاد و کاربردهای صنایع سنگین.',
                'price' => 320.00,
                'image' => 'https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=400&h=300&fit=crop',
                'link' => null,
                'sort' => 2,
            ],
            [
                'language_id' => $faLangId,
                'title' => 'کنسانتره طلا',
                'important' => true,
                'type' => 'Metals',
                'description' => 'کنسانتره طلای تصفیه شده از عملیات معدنی معتبر. در مقادیر عمده برای تجارت بین‌المللی موجود است.',
                'price' => 5500.00,
                'image' => 'https://images.unsplash.com/photo-1610375461246-83df859d849d?w=400&h=300&fit=crop',
                'link' => null,
                'sort' => 3,
            ],
            [
                'language_id' => $faLangId,
                'title' => 'سنگ مرمر',
                'important' => false,
                'type' => 'Non-Metals',
                'description' => 'سنگ مرمر زیبا در رنگ‌ها و طرح‌های مختلف. عالی برای ساخت و ساز، دکوراسیون و پروژه‌های معماری.',
                'price' => 180.00,
                'image' => 'https://images.unsplash.com/photo-1618220179428-22790b461013?w=400&h=300&fit=crop',
                'link' => null,
                'sort' => 4,
            ],
            [
                'language_id' => $faLangId,
                'title' => 'بلوک‌های گرانیت',
                'important' => false,
                'type' => 'Non-Metals',
                'description' => 'بلوک‌های گرانیت مقاوم در اندازه‌های مختلف. عالی برای کفپوش، پیشخوان و نمای بیرونی.',
                'price' => 220.00,
                'image' => 'https://images.unsplash.com/photo-1599619585752-c3edb42a414c?w=400&h=300&fit=crop',
                'link' => null,
                'sort' => 5,
            ],

            // Russian - Metals
            [
                'language_id' => $ruLangId,
                'title' => 'Медная руда',
                'important' => true,
                'type' => 'Metals',
                'description' => 'Высококачественная медная руда, добытая на наших премиальных участках. Подходит для промышленной переработки и производства.',
                'price' => 450.00,
                'image' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=300&fit=crop',
                'link' => null,
                'sort' => 1,
            ],
            [
                'language_id' => $ruLangId,
                'title' => 'Железная руда',
                'important' => false,
                'type' => 'Metals',
                'description' => 'Железная руда премиум-класса с высоким содержанием Fe. Идеально подходит для производства стали и тяжелой промышленности.',
                'price' => 320.00,
                'image' => 'https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=400&h=300&fit=crop',
                'link' => null,
                'sort' => 2,
            ],
            [
                'language_id' => $ruLangId,
                'title' => 'Золотой концентрат',
                'important' => true,
                'type' => 'Metals',
                'description' => 'Очищенный золотой концентрат из сертифицированных горнодобывающих операций. Доступен оптом для международной торговли.',
                'price' => 5500.00,
                'image' => 'https://images.unsplash.com/photo-1610375461246-83df859d849d?w=400&h=300&fit=crop',
                'link' => null,
                'sort' => 3,
            ],
            [
                'language_id' => $ruLangId,
                'title' => 'Мраморный камень',
                'important' => false,
                'type' => 'Non-Metals',
                'description' => 'Элегантный мраморный камень различных цветов и узоров. Идеален для строительства, декора и архитектурных проектов.',
                'price' => 180.00,
                'image' => 'https://images.unsplash.com/photo-1618220179428-22790b461013?w=400&h=300&fit=crop',
                'link' => null,
                'sort' => 4,
            ],
            [
                'language_id' => $ruLangId,
                'title' => 'Гранитные блоки',
                'important' => false,
                'type' => 'Non-Metals',
                'description' => 'Прочные гранитные блоки различных размеров. Отлично подходит для напольных покрытий, столешниц и наружной облицовки.',
                'price' => 220.00,
                'image' => 'https://images.unsplash.com/photo-1599619585752-c3edb42a414c?w=400&h=300&fit=crop',
                'link' => null,
                'sort' => 5,
            ],
        ];

        foreach ($products as $product) {
            Products::create($product);
        }
    }
}
