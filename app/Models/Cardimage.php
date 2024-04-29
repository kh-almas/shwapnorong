<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cardimage extends Model
{
    use HasFactory;

    protected $fillable = [
        'serial',
        'image',
    ];
}
