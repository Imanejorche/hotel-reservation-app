<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use  HasFactory;

    protected $fillable = 
    [
        'username',
        'roomtype',
        'price_per_night',
        'currency',
        'hotelname',
        'image_url',
    ];
    
}
