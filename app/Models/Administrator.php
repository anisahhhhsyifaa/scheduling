<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    use HasFactory;
    // Kolom yang bisa diisi (mass assignable)
    protected $fillable = [
        'name',        // Nama Administrator
        'email',       // Email Administrator
        'password',    // Password Administrator
    ];

    // Hidden attributes (misal: password) agar tidak ikut di-return dalam query
    protected $hidden = [
        'password',
    ];

    // Cast attributes (misal: tanggal)
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
