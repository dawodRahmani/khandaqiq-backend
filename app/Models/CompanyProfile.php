<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CompanyProfile extends Model
{
    use HasFactory;

    protected $table = 'company_profiles';

    protected $fillable = [
        'language_id',
        'title',
        'thumbnail',
        'file',
        'sort',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
