<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FollowUs extends Model
{
    protected $fillable = [
        'instagram_link',
        'facebook_link',
        'youtube_link',
        'is_active',
    ];

    protected static function booted()
    {
        static::creating(function ($model) {
            if (self::count() >= 1) {
                throw new \Exception('Only one FollowUs record is allowed.');
            }
        });
    }
}
