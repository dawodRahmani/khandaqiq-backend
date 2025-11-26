<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Snapshot extends Model
{
    use HasFactory;

    protected $table = 'snapshots';

    protected $fillable = [
        'language_id',
        'title',
        'important',
        'description',
        'image',
        'link',
        'sort',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
