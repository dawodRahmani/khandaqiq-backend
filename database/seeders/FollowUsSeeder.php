<?php

namespace Database\Seeders;

use App\Models\FollowUs;
use Illuminate\Database\Seeder;

class FollowUsSeeder extends Seeder
{
    public function run(): void
    {
        // Only one record allowed - delete existing and create new
        FollowUs::query()->delete();

        FollowUs::create([
            'instagram_link' => 'https://instagram.com/khandaqiq',
            'facebook_link' => 'https://facebook.com/khandaqiq',
            'youtube_link' => 'https://youtube.com/@khandaqiq',
            'is_active' => true,
        ]);
    }
}
