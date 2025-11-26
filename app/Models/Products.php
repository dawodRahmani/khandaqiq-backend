<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    // نام جدول مطابق مایگریشن
    protected $table = 'products';
    // ستون‌هایی که قابل Mass Assignment هستند
    protected $fillable = [
        'language_id',
        'title',
        'important',
        'type',
        'description',
        'price',
        'image',
        'link',
        'sort',
    ];

    // رابطه با جدول languages
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
