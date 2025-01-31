<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone_no',
        'status',
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];
}
