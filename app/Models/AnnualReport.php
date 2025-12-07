<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AnnualReport extends Model
{
    use HasFactory;

    protected $table = 'annual_reports';

    protected $fillable = [
        'language_id',
        'title',
        'date',
        'thumbnail',
        'file',
        'sort',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
