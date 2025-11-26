<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogisticMessages extends Model
{
    use HasFactory;

    protected $table = 'logistic_messages';

    protected $fillable = ['name', 'email', 'phone', 'message', 'is_read', 'is_reply'];

    protected $casts = [
        'is_read' => 'boolean',
        'is_reply' => 'boolean',
    ];

}
