<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'body', 'is_homepage', 'info_squares'];

    protected $casts = [
        'info_squares' => 'json'
    ];
}
