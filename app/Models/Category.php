<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'status'];

    protected $casts = [
        'status' => 'boolean',
        'created_at' => 'datetime',
    ];
}
