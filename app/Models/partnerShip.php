<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partnerShip extends Model
{
    use HasFactory;

    protected $table = 'partner_ship';

    protected $fillable = [
        'logo_image',
        'link',
    ];

    
    
}
