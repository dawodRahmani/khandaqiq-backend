<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Logisticopration extends Model
{
    use HasFactory;

    protected $table = 'logistic_operations';

    protected $fillable = [
        'language_id',
        'title',
        'importend',
        'description',
        'image',
        'sort',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
