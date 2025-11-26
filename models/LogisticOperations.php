<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogisticOperations extends Model
{
    use HasFactory;

    protected $table = 'logistic_operations';

    protected $fillable = ['language_id', 'title', 'important', 'description', 'image', 'sort'];

    protected $casts = [
        'important' => 'boolean',
        'sort' => 'integer',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

}
