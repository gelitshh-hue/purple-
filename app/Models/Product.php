<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'nema_en',
        'nema_ar',
        'description_en',
        'description_ar'
    ];
}
