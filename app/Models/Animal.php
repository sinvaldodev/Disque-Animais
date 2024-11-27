<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    /** @use HasFactory<\Database\Factories\AnimalFactory> */
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'type',
        'breed',
        'age',
        'location',
        'contact',
        'status',
        'description',
    ];
}
