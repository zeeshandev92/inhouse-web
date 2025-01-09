<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'license_type', 'license_no', 'license_expiry_date', 'status'];

    protected $casts = [
        'created_at' => 'datetime',
    ];
}
