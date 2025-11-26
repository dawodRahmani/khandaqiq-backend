<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;
use App\Models\Language;
use Carbon\Carbon;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        // Clear existing news before seeding
        News::query()->delete();

        // Get all languages
        $languages = Language::all();
        $faId = $languages->where('code', 'fa')->first()?->id ?? 1;
        $enId = $languages->where('code', 'en')->first()?->id ?? 2;
        $ruId = $languages->where('code', 'ru')->first()?->id ?? 3;

        // 5 News items, each with 3 language versions (15 total records)
        $newsItems = [
            // News 1: New Branch Opening - All 3 languages
            [
                'language_id' => $faId,
                'title' => 'افتتاح شعبه جدید در کابل',
                'new' => 'شعبه جدید خان دقیق در شهر کابل با امکانات پیشرفته و خدمات کامل افتتاح شد. این شعبه با هدف ارائه بهترین خدمات به مشتریان عزیز راه‌اندازی گردیده است.',
                'important' => true,
                'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600&h=400&fit=crop',
                'link' => null,
                'date' => Carbon::now()->subDays(2)->format('Y-m-d'),
                'sort' => 1,
            ],
            [
                'language_id' => $enId,
                'title' => 'New Branch Opening in Kabul',
                'new' => 'Khan Daqiq\'s new branch in Kabul city has been opened with advanced facilities and complete services. This branch has been launched with the aim of providing the best services to our valued customers.',
                'important' => true,
                'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600&h=400&fit=crop',
                'link' => null,
                'date' => Carbon::now()->subDays(2)->format('Y-m-d'),
                'sort' => 2,
            ],
            [
                'language_id' => $ruId,
                'title' => 'Открытие нового филиала в Кабуле',
                'new' => 'Новый филиал Khan Daqiq в городе Кабул был открыт с современным оборудованием и полным спектром услуг. Этот филиал был запущен с целью предоставления наилучших услуг нашим уважаемым клиентам.',
                'important' => true,
                'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600&h=400&fit=crop',
                'link' => null,
                'date' => Carbon::now()->subDays(2)->format('Y-m-d'),
                'sort' => 3,
            ],

            // News 2: Special Programs - All 3 languages
            [
                'language_id' => $faId,
                'title' => 'برنامه‌های ویژه نوروزی',
                'new' => 'به مناسبت فرا رسیدن سال نو، خان دقیق برنامه‌های ویژه و تخفیف‌های استثنایی را برای مشتریان عزیز خود در نظر گرفته است. از این فرصت استفاده کنید.',
                'important' => false,
                'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&h=400&fit=crop',
                'link' => null,
                'date' => Carbon::now()->subDays(5)->format('Y-m-d'),
                'sort' => 4,
            ],
            [
                'language_id' => $enId,
                'title' => 'Special New Year Programs',
                'new' => 'On the occasion of the New Year, Khan Daqiq has prepared special programs and exceptional discounts for our valued customers. Take advantage of this opportunity.',
                'important' => false,
                'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&h=400&fit=crop',
                'link' => null,
                'date' => Carbon::now()->subDays(5)->format('Y-m-d'),
                'sort' => 5,
            ],
            [
                'language_id' => $ruId,
                'title' => 'Специальные новогодние программы',
                'new' => 'В связи с наступающим новым годом Khan Daqiq подготовил специальные программы и исключительные скидки для своих уважаемых клиентов. Воспользуйтесь этой возможностью.',
                'important' => false,
                'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&h=400&fit=crop',
                'link' => null,
                'date' => Carbon::now()->subDays(5)->format('Y-m-d'),
                'sort' => 6,
            ],

            // News 3: Annual Meeting - All 3 languages
            [
                'language_id' => $faId,
                'title' => 'موفقیت نشست سالانه',
                'new' => 'نشست سالانه خان دقیق با حضور مدیران ارشد و ذینفعان کلیدی با موفقیت برگزار شد. تصمیمات مهمی برای رشد و توسعه شرکت در سال آینده اتخاذ گردید.',
                'important' => true,
                'image' => 'https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=600&h=400&fit=crop',
                'link' => null,
                'date' => Carbon::now()->subDays(10)->format('Y-m-d'),
                'sort' => 7,
            ],
            [
                'language_id' => $enId,
                'title' => 'Annual Meeting Success',
                'new' => 'Khan Daqiq\'s annual meeting was held successfully with the presence of top managers and key stakeholders. Important decisions were made for the company\'s growth and development in the coming year.',
                'important' => true,
                'image' => 'https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=600&h=400&fit=crop',
                'link' => null,
                'date' => Carbon::now()->subDays(10)->format('Y-m-d'),
                'sort' => 8,
            ],
            [
                'language_id' => $ruId,
                'title' => 'Успешное проведение ежегодного собрания',
                'new' => 'Ежегодное собрание Khan Daqiq прошло успешно с участием высших руководителей и ключевых заинтересованных сторон. Были приняты важные решения для роста и развития компании в наступающем году.',
                'important' => true,
                'image' => 'https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=600&h=400&fit=crop',
                'link' => null,
                'date' => Carbon::now()->subDays(10)->format('Y-m-d'),
                'sort' => 9,
            ],

            // News 4: New Mining Equipment - All 3 languages
            [
                'language_id' => $faId,
                'title' => 'تجهیزات جدید معدنی',
                'new' => 'خان دقیق تجهیزات معدنی پیشرفته‌ای را برای بهبود کارایی و ایمنی عملیات خود خریداری کرده است. این سرمایه‌گذاری نشان‌دهنده تعهد ما به تکنولوژی مدرن است.',
                'important' => false,
                'image' => 'https://images.unsplash.com/photo-1581092918484-8313e1f7e8c7?w=600&h=400&fit=crop',
                'link' => null,
                'date' => Carbon::now()->subDays(15)->format('Y-m-d'),
                'sort' => 10,
            ],
            [
                'language_id' => $enId,
                'title' => 'New Mining Equipment',
                'new' => 'Khan Daqiq has acquired advanced mining equipment to improve the efficiency and safety of its operations. This investment demonstrates our commitment to modern technology.',
                'important' => false,
                'image' => 'https://images.unsplash.com/photo-1581092918484-8313e1f7e8c7?w=600&h=400&fit=crop',
                'link' => null,
                'date' => Carbon::now()->subDays(15)->format('Y-m-d'),
                'sort' => 11,
            ],
            [
                'language_id' => $ruId,
                'title' => 'Новое горнодобывающее оборудование',
                'new' => 'Khan Daqiq приобрел современное горнодобывающее оборудование для повышения эффективности и безопасности своих операций. Эти инвестиции демонстрируют нашу приверженность современным технологиям.',
                'important' => false,
                'image' => 'https://images.unsplash.com/photo-1581092918484-8313e1f7e8c7?w=600&h=400&fit=crop',
                'link' => null,
                'date' => Carbon::now()->subDays(15)->format('Y-m-d'),
                'sort' => 12,
            ],

            // News 5: Partnership Agreement - All 3 languages
            [
                'language_id' => $faId,
                'title' => 'توافقنامه مشارکت استراتژیک',
                'new' => 'خان دقیق با یک شرکت بین‌المللی معتبر توافقنامه مشارکت استراتژیک امضا کرد. این همکاری فرصت‌های جدیدی برای رشد و توسعه فراهم می‌کند.',
                'important' => true,
                'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=600&h=400&fit=crop',
                'link' => null,
                'date' => Carbon::now()->subDays(20)->format('Y-m-d'),
                'sort' => 13,
            ],
            [
                'language_id' => $enId,
                'title' => 'Strategic Partnership Agreement',
                'new' => 'Khan Daqiq has signed a strategic partnership agreement with a reputable international company. This collaboration provides new opportunities for growth and development.',
                'important' => true,
                'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=600&h=400&fit=crop',
                'link' => null,
                'date' => Carbon::now()->subDays(20)->format('Y-m-d'),
                'sort' => 14,
            ],
            [
                'language_id' => $ruId,
                'title' => 'Соглашение о стратегическом партнерстве',
                'new' => 'Khan Daqiq подписал соглашение о стратегическом партнерстве с авторитетной международной компанией. Это сотрудничество открывает новые возможности для роста и развития.',
                'important' => true,
                'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=600&h=400&fit=crop',
                'link' => null,
                'date' => Carbon::now()->subDays(20)->format('Y-m-d'),
                'sort' => 15,
            ],
        ];

        foreach ($newsItems as $newsItem) {
            News::create($newsItem);
        }
    }
}
