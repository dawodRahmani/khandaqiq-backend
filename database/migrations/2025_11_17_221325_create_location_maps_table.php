<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('location_maps', function (Blueprint $table) {
            $table->id();

            // عنوان یا نام لوکیشن
            $table->string('title')->nullable();

            // مختصات جغرافیایی
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();

            // آدرس کامل (اختیاری)
            $table->string('address')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('location_maps');
    }
};
