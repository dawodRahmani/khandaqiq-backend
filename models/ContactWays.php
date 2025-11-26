<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactWays extends Model
{
    use HasFactory;

    protected $table = 'contact_ways';

    protected $fillable = ['language_id', 'language_id', 'title', 'address', 'email_1', 'email_2', 'phone_1', 'phone_2', 'sort'];

    protected $casts = [
        'sort' => 'integer',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

}
