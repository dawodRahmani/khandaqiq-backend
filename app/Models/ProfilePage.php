<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProfilePage extends Model
{
    use HasFactory;

    protected $table = 'profile_pages';

    protected $fillable = [
        'language_id',
        'hero_image',
        'hero_subtitle',
        'about_title',
        'about_message',
        'profiles_title',
        'reports_title',
        'sort',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
