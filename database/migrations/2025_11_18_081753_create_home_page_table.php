<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
                  // 1. صفحه Home
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('language_id')->constrained('languages')->cascadeOnDelete();
            $table->unique('language_id');
            // Slide 1
            $table->string('slide_title_1');
            $table->text('slide_subtitle_1');
            $table->string('slide_image_1');
            // Slide 2
            $table->string('slide_title_2')->nullable();
            $table->text('slide_subtitle_2')->nullable();
            $table->string('slide_image_2')->nullable();
            // Slide 3
            $table->string('slide_title_3')->nullable();
            $table->text('slide_subtitle_3')->nullable();
            $table->string('slide_image_3')->nullable();
            // About section
            $table->string('about_title');
            $table->string('about_image');
            $table->text('about_message');
            // Sector message
            $table->text('sector_message');
            // Sort
            $table->integer('sort')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_pages');
    }
};
