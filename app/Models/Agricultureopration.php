<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agricultureopration extends Model
{
    use HasFactory;

    protected $table = 'agriculture_operations';

    protected $fillable = [
        'language_id',
        'title',
        'important',
        'description',
        'image',
        'sort',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
