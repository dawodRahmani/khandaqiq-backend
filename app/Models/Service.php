<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = [
        'language_id',
        'title',
        'important',
        'description',
        'image',
        'phone',
        'email',
        'sort',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
