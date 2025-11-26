<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('follow_us', function (Blueprint $table) {
            $table->id();
            $table->string('instagram_link');
            $table->string('facebook_link');
            $table->string('youtube_link');
            $table->boolean('is_active')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('follow_us');
    }
};
