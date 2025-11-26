<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Language;

class LanguageSeeder extends Seeder
{
    public function run(): void
    {
        $languages = [
            ['name' => 'دری', 'code' => 'fa', 'direction' => 'rtl', 'is_active' => true],
            ['name' => 'Русский', 'code' => 'ru', 'direction' => 'ltr', 'is_active' => true],
            ['name' => 'English', 'code' => 'en', 'direction' => 'ltr', 'is_active' => true],
        ];

        foreach ($languages as $lang) {
            Language::updateOrCreate(['code' => $lang['code']], $lang);
        }
    }
}
