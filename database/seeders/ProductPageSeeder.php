<?php

namespace Database\Seeders;

use App\Models\Productpage;
use App\Models\Language;
use Illuminate\Database\Seeder;

class ProductPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productPages = [
            // English
            'en' => [
                'slide_title_1' => 'Our Products',
                'slide_subtitle_1' => 'Quality products from mining, agriculture, and industrial processing',
                'slide_image_1' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070',
                'slide_title_2' => 'Premium Quality',
                'slide_subtitle_2' => 'Delivering excellence in every product we offer',
                'slide_image_2' => 'https://images.unsplash.com/photo-1578328819058-b69f3a3b0f6b?q=80&w=2070',
                'slide_title_3' => 'Trusted Solutions',
                'slide_subtitle_3' => 'Your reliable partner for industrial and agricultural products',
                'slide_image_3' => 'https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?q=80&w=2070',
                'sort' => 1,
            ],
            // Persian (Dari)
            'fa' => [
                'slide_title_1' => 'محصولات ما',
                'slide_subtitle_1' => 'محصولات باکیفیت از معادن، زراعت و پروسس صنعتی',
                'slide_image_1' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070',
                'slide_title_2' => 'کیفیت برتر',
                'slide_subtitle_2' => 'ارائه برتری در هر محصولی که ارائه می‌دهیم',
                'slide_image_2' => 'https://images.unsplash.com/photo-1578328819058-b69f3a3b0f6b?q=80&w=2070',
                'slide_title_3' => 'راه‌حل‌های قابل اعتماد',
                'slide_subtitle_3' => 'شریک قابل اعتماد شما برای محصولات صنعتی و کشاورزی',
                'slide_image_3' => 'https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?q=80&w=2070',
                'sort' => 2,
            ],
            // Russian
            'ru' => [
                'slide_title_1' => 'Наши продукты',
                'slide_subtitle_1' => 'Качественная продукция из горнодобычи, сельского хозяйства и промышленной обработки',
                'slide_image_1' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070',
                'slide_title_2' => 'Премиум качество',
                'slide_subtitle_2' => 'Превосходство в каждом продукте, который мы предлагаем',
                'slide_image_2' => 'https://images.unsplash.com/photo-1578328819058-b69f3a3b0f6b?q=80&w=2070',
                'slide_title_3' => 'Надежные решения',
                'slide_subtitle_3' => 'Ваш надежный партнер для промышленных и сельскохозяйственных продуктов',
                'slide_image_3' => 'https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?q=80&w=2070',
                'sort' => 3,
            ],
        ];

        foreach ($productPages as $langCode => $data) {
            $language = Language::where('code', $langCode)->first();

            if ($language) {
                Productpage::updateOrCreate(
                    ['language_id' => $language->id],
                    array_merge($data, ['language_id' => $language->id])
                );
            }
        }
    }
}
