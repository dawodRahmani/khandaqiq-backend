<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = ['language_id', 'title', 'important', 'description', 'image', 'link', 'sort'];

    protected $casts = [
        'important' => 'boolean',
        'sort' => 'integer',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

}
