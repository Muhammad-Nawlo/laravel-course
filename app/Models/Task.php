<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $casts = [
        'status' => 'boolean'
    ];
    protected $fillable = ['name', 'status'];
}
