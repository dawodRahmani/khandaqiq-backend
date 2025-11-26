<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Snapshots extends Model
{
    use HasFactory;

    protected $table = 'snapshots';

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
