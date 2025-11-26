<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = ['language_id', 'title', 'new', 'important', 'image', 'link', 'date', 'sort'];

    protected $casts = [
        'important' => 'boolean',
        'date' => 'date',
        'sort' => 'integer',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

}
