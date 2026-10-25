<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'full_name',
        'phone_number',
        'country',
        'rooms',
        'check_in',
        'check_out',
        'adults',
        'children',
    ];
    
}
