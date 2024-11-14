<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'teachers';

    protected $fillable = [
        'name',
        'mata_pelajaran',
    ];

    // protected $hidden = [
    //     'created_at',
    //     'deleted_at',
    // ];

    // protected $casts = [
    //     'created_at' => 'datetime', 
    // ];
}       
