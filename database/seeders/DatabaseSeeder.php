<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash; // ← اضافه کن

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('123123'), // حالا درست کار می‌کند
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->call(LanguageSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(HomePageSeeder::class);
        $this->call(FollowUsSeeder::class);
        $this->call(NewsPageSeeder::class);
        $this->call(NewsSeeder::class);
        $this->call(PartnershipSeeder::class);
    }
}
