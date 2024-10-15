<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'beds',
        'bath',
        'area',
        'city',
        'code',
        'street',
        'street_nr',
        'price',
    ];
}
