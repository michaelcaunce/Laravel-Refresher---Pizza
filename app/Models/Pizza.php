<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;
    // take an array as a value and cast into a certain data type.
    protected $casts = [
        'toppings' => 'array'
    ];
}
