<?php

namespace Database\Seeders;

use App\Models\Snapshot;
use App\Models\Language;
use Illuminate\Database\Seeder;

class SnapshotsSeeder extends Seeder
{
    public function run(): void
    {
        $snapshots = [
            // English
            'en' => [
                [
                    'title' => 'Mining Operations',
                    'description' => 'Advanced extraction processes at our mining facility',
                    'image' => 'https://images.unsplash.com/photo-1578328819058-b69f3a3b0f6b?q=80&w=2070',
                    'link' => '/sectors/mining',
                    'important' => true,
                    'sort' => 1,
                ],
                [
                    'title' => 'Logistics Hub',
                    'description' => 'Our state-of-the-art logistics and distribution center',
                    'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070',
                    'link' => '/sectors/logistic',
                    'important' => true,
                    'sort' => 2,
                ],
                [
                    'title' => 'Agricultural Fields',
                    'description' => 'Sustainable farming practices in action',
                    'image' => 'https://images.unsplash.com/photo-1625246333195-78d9c38ad449?q=80&w=2070',
                    'link' => '/sectors/agriculture',
                    'important' => false,
                    'sort' => 3,
                ],
                [
                    'title' => 'Team Meeting',
                    'description' => 'Strategic planning session with our leadership team',
                    'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070',
                    'link' => null,
                    'important' => false,
                    'sort' => 4,
                ],
                [
                    'title' => 'Product Showcase',
                    'description' => 'Our premium quality products on display',
                    'image' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?q=80&w=2070',
                    'link' => '/pages/products',
                    'important' => false,
                    'sort' => 5,
                ],
                [
                    'title' => 'Corporate Event',
                    'description' => 'Annual company gathering and celebration',
                    'image' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?q=80&w=2070',
                    'link' => null,
                    'important' => false,
                    'sort' => 6,
                ],
                [
                    'title' => 'Investment Partners',
                    'description' => 'Meeting with international investment partners',
                    'image' => 'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?q=80&w=2070',
                    'link' => '/sectors/investment',
                    'important' => false,
                    'sort' => 7,
                ],
                [
                    'title' => 'Facility Tour',
                    'description' => 'Visitors exploring our modern facilities',
                    'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=2070',
                    'link' => null,
                    'important' => false,
                    'sort' => 8,
                ],
            ],
            // Persian (Dari)
            'fa' => [
                [
                    'title' => 'عملیات معدن',
                    'description' => 'فرآیندهای پیشرفته استخراج در تأسیسات معدنی ما',
                    'image' => 'https://images.unsplash.com/photo-1578328819058-b69f3a3b0f6b?q=80&w=2070',
                    'link' => '/sectors/mining',
                    'important' => true,
                    'sort' => 1,
                ],
                [
                    'title' => 'مرکز لجستیک',
                    'description' => 'مرکز لجستیک و توزیع مدرن ما',
                    'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070',
                    'link' => '/sectors/logistic',
                    'important' => true,
                    'sort' => 2,
                ],
                [
                    'title' => 'مزارع کشاورزی',
                    'description' => 'شیوه های کشاورزی پایدار در عمل',
                    'image' => 'https://images.unsplash.com/photo-1625246333195-78d9c38ad449?q=80&w=2070',
                    'link' => '/sectors/agriculture',
                    'important' => false,
                    'sort' => 3,
                ],
                [
                    'title' => 'جلسه تیم',
                    'description' => 'جلسه برنامه ریزی استراتژیک با تیم رهبری ما',
                    'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070',
                    'link' => null,
                    'important' => false,
                    'sort' => 4,
                ],
                [
                    'title' => 'نمایش محصولات',
                    'description' => 'محصولات با کیفیت برتر ما در نمایش',
                    'image' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?q=80&w=2070',
                    'link' => '/pages/products',
                    'important' => false,
                    'sort' => 5,
                ],
                [
                    'title' => 'رویداد شرکتی',
                    'description' => 'گردهمایی و جشن سالانه شرکت',
                    'image' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?q=80&w=2070',
                    'link' => null,
                    'important' => false,
                    'sort' => 6,
                ],
                [
                    'title' => 'شرکای سرمایه گذاری',
                    'description' => 'ملاقات با شرکای سرمایه گذاری بین المللی',
                    'image' => 'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?q=80&w=2070',
                    'link' => '/sectors/investment',
                    'important' => false,
                    'sort' => 7,
                ],
                [
                    'title' => 'بازدید از تأسیسات',
                    'description' => 'بازدیدکنندگان در حال کشف تأسیسات مدرن ما',
                    'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=2070',
                    'link' => null,
                    'important' => false,
                    'sort' => 8,
                ],
            ],
            // Russian
            'ru' => [
                [
                    'title' => 'Горнодобывающие операции',
                    'description' => 'Передовые процессы добычи на нашем горнодобывающем объекте',
                    'image' => 'https://images.unsplash.com/photo-1578328819058-b69f3a3b0f6b?q=80&w=2070',
                    'link' => '/sectors/mining',
                    'important' => true,
                    'sort' => 1,
                ],
                [
                    'title' => 'Логистический центр',
                    'description' => 'Наш современный логистический и распределительный центр',
                    'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070',
                    'link' => '/sectors/logistic',
                    'important' => true,
                    'sort' => 2,
                ],
                [
                    'title' => 'Сельскохозяйственные поля',
                    'description' => 'Устойчивые методы ведения сельского хозяйства в действии',
                    'image' => 'https://images.unsplash.com/photo-1625246333195-78d9c38ad449?q=80&w=2070',
                    'link' => '/sectors/agriculture',
                    'important' => false,
                    'sort' => 3,
                ],
                [
                    'title' => 'Командное совещание',
                    'description' => 'Сессия стратегического планирования с нашей командой руководителей',
                    'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070',
                    'link' => null,
                    'important' => false,
                    'sort' => 4,
                ],
                [
                    'title' => 'Витрина продукции',
                    'description' => 'Наша продукция премиум-качества на выставке',
                    'image' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?q=80&w=2070',
                    'link' => '/pages/products',
                    'important' => false,
                    'sort' => 5,
                ],
                [
                    'title' => 'Корпоративное мероприятие',
                    'description' => 'Ежегодное собрание и празднование компании',
                    'image' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?q=80&w=2070',
                    'link' => null,
                    'important' => false,
                    'sort' => 6,
                ],
                [
                    'title' => 'Инвестиционные партнёры',
                    'description' => 'Встреча с международными инвестиционными партнёрами',
                    'image' => 'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?q=80&w=2070',
                    'link' => '/sectors/investment',
                    'important' => false,
                    'sort' => 7,
                ],
                [
                    'title' => 'Экскурсия по объекту',
                    'description' => 'Посетители изучают наши современные объекты',
                    'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=2070',
                    'link' => null,
                    'important' => false,
                    'sort' => 8,
                ],
            ],
        ];

        foreach ($snapshots as $langCode => $items) {
            $language = Language::where('code', $langCode)->first();

            if ($language) {
                foreach ($items as $item) {
                    Snapshot::updateOrCreate(
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
