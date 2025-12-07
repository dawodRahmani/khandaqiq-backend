<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('profile_pages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('language_id')->constrained('languages')->onDelete('cascade');
            $table->string('hero_image')->nullable();
            $table->string('hero_subtitle')->nullable();
            $table->string('about_title')->nullable();
            $table->text('about_message')->nullable();
            $table->string('profiles_title')->nullable();
            $table->string('reports_title')->nullable();
            $table->integer('sort')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('profile_pages');
    }
};
