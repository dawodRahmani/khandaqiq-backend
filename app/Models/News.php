<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    // نام جدول مطابق مایگریشن
    protected $table = 'news';

    // ستون‌هایی که قابل Mass Assignment هستند
    protected $fillable = [
        'language_id',
        'title',
        'new',
        'important',
        'image',
        'link',
        'date',
        'sort',
    ];

    // رابطه با جدول languages
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
