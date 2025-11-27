<?php

namespace Database\Seeders;

use App\Models\Collaborators;
use App\Models\Language;
use Illuminate\Database\Seeder;

class CollaboratorsSeeder extends Seeder
{
    public function run(): void
    {
        $collaborators = [
            // English
            'en' => [
                // CEO - Important (will be displayed as featured/large card)
                [
                    'full_name' => 'Ahmad Khan Daqiq',
                    'important' => true,
                    'description' => 'As the founder and CEO of Khan Daqiq Group, Ahmad Khan brings over 25 years of experience in industrial development and strategic leadership. Under his visionary guidance, the company has grown from a small mining operation to a diversified conglomerate spanning multiple sectors including mining, logistics, agriculture, and energy. His commitment to sustainable development and community empowerment has made Khan Daqiq a leader in Afghanistan\'s private sector.',
                    'image' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=2070',
                    'grade' => '10',
                    'position' => 'Chief Executive Officer',
                    'phone' => '+93 700 000 001',
                    'email' => 'ceo@khandaqiq.com',
                    'sort' => 1,
                ],
                // Team Members
                [
                    'full_name' => 'Mohammad Rahimi',
                    'important' => false,
                    'description' => 'Leading our financial operations with expertise in corporate finance and investment strategy. Over 15 years of experience in financial management.',
                    'image' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=2070',
                    'grade' => '8',
                    'position' => 'Chief Financial Officer',
                    'phone' => '+93 700 000 002',
                    'email' => 'cfo@khandaqiq.com',
                    'sort' => 2,
                ],
                [
                    'full_name' => 'Fatima Ahmadi',
                    'important' => false,
                    'description' => 'Overseeing all mining and extraction operations with a focus on safety and efficiency. Expert in geological engineering and sustainable mining practices.',
                    'image' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=2070',
                    'grade' => '8',
                    'position' => 'Director of Mining Operations',
                    'phone' => '+93 700 000 003',
                    'email' => 'mining@khandaqiq.com',
                    'sort' => 3,
                ],
                [
                    'full_name' => 'Khalid Noori',
                    'important' => false,
                    'description' => 'Managing our extensive logistics network and supply chain operations across the region. Specialist in international trade and customs.',
                    'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=2070',
                    'grade' => '7',
                    'position' => 'Head of Logistics',
                    'phone' => '+93 700 000 004',
                    'email' => 'logistics@khandaqiq.com',
                    'sort' => 4,
                ],
                [
                    'full_name' => 'Sara Karimi',
                    'important' => false,
                    'description' => 'Leading our human resources initiatives and talent development programs. Passionate about building a skilled workforce for Afghanistan\'s future.',
                    'image' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=2070',
                    'grade' => '7',
                    'position' => 'HR Director',
                    'phone' => '+93 700 000 005',
                    'email' => 'hr@khandaqiq.com',
                    'sort' => 5,
                ],
                [
                    'full_name' => 'Reza Mohammadi',
                    'important' => false,
                    'description' => 'Driving technological innovation and digital transformation across all company operations. Expert in industrial automation and IT systems.',
                    'image' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=2070',
                    'grade' => '7',
                    'position' => 'Chief Technology Officer',
                    'phone' => '+93 700 000 006',
                    'email' => 'cto@khandaqiq.com',
                    'sort' => 6,
                ],
            ],
            // Persian (Dari)
            'fa' => [
                // CEO
                [
                    'full_name' => 'احمد خان دقیق',
                    'important' => true,
                    'description' => 'به عنوان بنیانگذار و مدیرعامل گروه خان دقیق، احمد خان بیش از ۲۵ سال تجربه در توسعه صنعتی و رهبری استراتژیک دارد. تحت هدایت دوراندیشانه او، شرکت از یک عملیات معدنی کوچک به یک شرکت متنوع در چندین بخش از جمله معدن، لجستیک، کشاورزی و انرژی تبدیل شده است. تعهد او به توسعه پایدار و توانمندسازی جامعه، خان دقیق را به رهبر بخش خصوصی افغانستان تبدیل کرده است.',
                    'image' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=2070',
                    'grade' => '10',
                    'position' => 'مدیرعامل',
                    'phone' => '+93 700 000 001',
                    'email' => 'ceo@khandaqiq.com',
                    'sort' => 1,
                ],
                [
                    'full_name' => 'محمد رحیمی',
                    'important' => false,
                    'description' => 'مدیریت عملیات مالی ما با تخصص در امور مالی شرکتی و استراتژی سرمایه‌گذاری. بیش از ۱۵ سال تجربه در مدیریت مالی.',
                    'image' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=2070',
                    'grade' => '8',
                    'position' => 'مدیر مالی',
                    'phone' => '+93 700 000 002',
                    'email' => 'cfo@khandaqiq.com',
                    'sort' => 2,
                ],
                [
                    'full_name' => 'فاطمه احمدی',
                    'important' => false,
                    'description' => 'نظارت بر تمام عملیات معدنی و استخراج با تمرکز بر ایمنی و کارایی. متخصص در مهندسی زمین‌شناسی و شیوه‌های معدنکاری پایدار.',
                    'image' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=2070',
                    'grade' => '8',
                    'position' => 'مدیر عملیات معدن',
                    'phone' => '+93 700 000 003',
                    'email' => 'mining@khandaqiq.com',
                    'sort' => 3,
                ],
                [
                    'full_name' => 'خالد نوری',
                    'important' => false,
                    'description' => 'مدیریت شبکه گسترده لجستیک و عملیات زنجیره تأمین در سراسر منطقه. متخصص در تجارت بین‌المللی و امور گمرکی.',
                    'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=2070',
                    'grade' => '7',
                    'position' => 'رئیس لجستیک',
                    'phone' => '+93 700 000 004',
                    'email' => 'logistics@khandaqiq.com',
                    'sort' => 4,
                ],
                [
                    'full_name' => 'سارا کریمی',
                    'important' => false,
                    'description' => 'رهبری برنامه‌های منابع انسانی و توسعه استعداد. علاقه‌مند به ایجاد نیروی کار ماهر برای آینده افغانستان.',
                    'image' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=2070',
                    'grade' => '7',
                    'position' => 'مدیر منابع انسانی',
                    'phone' => '+93 700 000 005',
                    'email' => 'hr@khandaqiq.com',
                    'sort' => 5,
                ],
                [
                    'full_name' => 'رضا محمدی',
                    'important' => false,
                    'description' => 'پیشبرد نوآوری فناوری و تحول دیجیتال در تمام عملیات شرکت. متخصص در اتوماسیون صنعتی و سیستم‌های فناوری اطلاعات.',
                    'image' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=2070',
                    'grade' => '7',
                    'position' => 'مدیر فناوری',
                    'phone' => '+93 700 000 006',
                    'email' => 'cto@khandaqiq.com',
                    'sort' => 6,
                ],
            ],
            // Russian
            'ru' => [
                // CEO
                [
                    'full_name' => 'Ахмад Хан Дакик',
                    'important' => true,
                    'description' => 'Как основатель и генеральный директор группы Хан Дакик, Ахмад Хан обладает более чем 25-летним опытом в промышленном развитии и стратегическом руководстве. Под его дальновидным руководством компания выросла из небольшого горнодобывающего предприятия в диверсифицированный конгломерат, охватывающий несколько секторов, включая добычу, логистику, сельское хозяйство и энергетику.',
                    'image' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=2070',
                    'grade' => '10',
                    'position' => 'Генеральный директор',
                    'phone' => '+93 700 000 001',
                    'email' => 'ceo@khandaqiq.com',
                    'sort' => 1,
                ],
                [
                    'full_name' => 'Мохаммад Рахими',
                    'important' => false,
                    'description' => 'Руководит нашими финансовыми операциями с опытом в корпоративных финансах и инвестиционной стратегии. Более 15 лет опыта в финансовом управлении.',
                    'image' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=2070',
                    'grade' => '8',
                    'position' => 'Финансовый директор',
                    'phone' => '+93 700 000 002',
                    'email' => 'cfo@khandaqiq.com',
                    'sort' => 2,
                ],
                [
                    'full_name' => 'Фатима Ахмади',
                    'important' => false,
                    'description' => 'Контролирует все горнодобывающие операции с акцентом на безопасность и эффективность. Эксперт в геологической инженерии и устойчивых методах добычи.',
                    'image' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=2070',
                    'grade' => '8',
                    'position' => 'Директор горных операций',
                    'phone' => '+93 700 000 003',
                    'email' => 'mining@khandaqiq.com',
                    'sort' => 3,
                ],
                [
                    'full_name' => 'Халид Нури',
                    'important' => false,
                    'description' => 'Управляет нашей обширной логистической сетью и операциями цепочки поставок по всему региону. Специалист по международной торговле и таможне.',
                    'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=2070',
                    'grade' => '7',
                    'position' => 'Руководитель логистики',
                    'phone' => '+93 700 000 004',
                    'email' => 'logistics@khandaqiq.com',
                    'sort' => 4,
                ],
                [
                    'full_name' => 'Сара Карими',
                    'important' => false,
                    'description' => 'Руководит нашими инициативами в области управления персоналом и программами развития талантов. Увлечена созданием квалифицированной рабочей силы для будущего Афганистана.',
                    'image' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=2070',
                    'grade' => '7',
                    'position' => 'Директор по персоналу',
                    'phone' => '+93 700 000 005',
                    'email' => 'hr@khandaqiq.com',
                    'sort' => 5,
                ],
                [
                    'full_name' => 'Реза Мохаммади',
                    'important' => false,
                    'description' => 'Продвигает технологические инновации и цифровую трансформацию во всех операциях компании. Эксперт в промышленной автоматизации и IT-системах.',
                    'image' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=2070',
                    'grade' => '7',
                    'position' => 'Технический директор',
                    'phone' => '+93 700 000 006',
                    'email' => 'cto@khandaqiq.com',
                    'sort' => 6,
                ],
            ],
        ];

        foreach ($collaborators as $langCode => $items) {
            $language = Language::where('code', $langCode)->first();

            if ($language) {
                foreach ($items as $item) {
                    Collaborators::updateOrCreate(
                        [
                            'language_id' => $language->id,
                            'email' => $item['email'],
                        ],
                        array_merge($item, ['language_id' => $language->id])
                    );
                }
            }
        }
    }
}
