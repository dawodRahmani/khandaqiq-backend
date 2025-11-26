<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MiningMessages extends Model
{
    use HasFactory;

    protected $table = 'mining_messages';

    protected $fillable = ['name', 'email', 'phone', 'message', 'is_read', 'is_reply'];

    protected $casts = [
        'is_read' => 'boolean',
        'is_reply' => 'boolean',
    ];

}
