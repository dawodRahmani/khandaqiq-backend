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
        $this->call(MiningPageSeeder::class);
        $this->call(MiningOperationsSeeder::class);
        $this->call(MiningProjectsSeeder::class);
        $this->call(LogisticPageSeeder::class);
        $this->call(LogisticOperationsSeeder::class);
        $this->call(InvestmentPageSeeder::class);
        $this->call(InvestmentOperationsSeeder::class);
        $this->call(AgriculturePageSeeder::class);
        $this->call(AgricultureOperationsSeeder::class);
        $this->call(PetroleumPageSeeder::class);
        $this->call(PetroleumOperationsSeeder::class);
        $this->call(ServicesPageSeeder::class);
        $this->call(ServicesSeeder::class);
        $this->call(HrPageSeeder::class);
        $this->call(CollaboratorsSeeder::class);
        $this->call(GalleryPageSeeder::class);
        $this->call(SnapshotsSeeder::class);
        $this->call(ContactUsPageSeeder::class);
        $this->call(ContactWaySeeder::class);
        $this->call(LocationMapSeeder::class);
    }
}
