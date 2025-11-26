<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_pages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('language_id')->constrained('languages')->cascadeOnDelete();
            $table->unique('language_id');
            $table->string('slide_title_1');
            $table->text('slide_subtitle_1');
            $table->string('slide_image_1');
            $table->string('slide_title_2')->nullable();
            $table->text('slide_subtitle_2')->nullable();
            $table->string('slide_image_2')->nullable();
            $table->string('slide_title_3')->nullable();
            $table->text('slide_subtitle_3')->nullable();
            $table->string('slide_image_3')->nullable();
            $table->integer('sort')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_pages');
    }
};
