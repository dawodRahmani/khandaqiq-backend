<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Collaborators extends Model
{
    use HasFactory;

    protected $table = 'collaborators';

    protected $fillable = [
        'language_id',
        'full_name',
        'important',
        'description',
        'image',
        'grade',
        'position',
        'phone',
        'email',
        'sort',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
