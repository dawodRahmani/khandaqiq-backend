<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HomePage extends Model
{
    use HasFactory;

    protected $table = 'home_pages';

    protected $fillable = [
        'language_id',
        'slide_title_1',
        'slide_subtitle_1',
        'slide_image_1',
        'slide_title_2',
        'slide_subtitle_2',
        'slide_image_2',
        'slide_title_3',
        'slide_subtitle_3',
        'slide_image_3',
        'about_title',
        'about_image',
        'about_message',
        'sector_message',
        'sort',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
