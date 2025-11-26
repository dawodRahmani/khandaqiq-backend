<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MiningProject extends Model
{
    use HasFactory;

    // نام جدول مطابق مایگریشن
    protected $table = 'mining_projects';

    // ستون‌هایی که قابل Mass Assignment هستند
    protected $fillable = [
        'language_id',
        'title',
        'description',
        'state',
        'image',
        'sort',
    ];

    // رابطه با جدول languages
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
