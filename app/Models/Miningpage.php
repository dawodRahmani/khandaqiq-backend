<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MiningPage extends Model
{
    use HasFactory;

    // نام جدول مطابق مایگریشن
    protected $table = 'mining_pages';

    // ستون‌هایی که قابل Mass Assignment هستند
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
        'operations_message',
        'sort',
    ];

    // رابطه با جدول languages
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
