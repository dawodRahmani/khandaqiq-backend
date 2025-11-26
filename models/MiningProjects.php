<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MiningProjects extends Model
{
    use HasFactory;

    protected $table = 'mining_projects';

    protected $fillable = ['language_id', 'title', 'description', 'image', 'sort'];

    protected $casts = [
        'sort' => 'integer',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

}
