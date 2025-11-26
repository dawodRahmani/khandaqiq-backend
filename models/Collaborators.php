<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaborators extends Model
{
    use HasFactory;

    protected $table = 'collaborators';

    protected $fillable = ['language_id', 'full_name', 'important', 'description', 'image', 'position', 'phone', 'email', 'sort'];

    protected $casts = [
        'important' => 'boolean',
        'sort' => 'integer',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

}
